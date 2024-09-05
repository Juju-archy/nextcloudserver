<?php
/**
 * SPDX-FileCopyrightText: 2018 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
namespace OCA\User_LDAP\Tests\User;

use OCA\User_LDAP\Mapping\UserMapping;
use OCA\User_LDAP\User\DeletedUsersIndex;
use OCP\IConfig;
use OCP\IDBConnection;
use OCP\Share\IManager;

/**
 * Class DeletedUsersIndexTest
 *
 * @group DB
 *
 * @package OCA\User_LDAP\Tests\User
 */
class DeletedUsersIndexTest extends \Test\TestCase {
	/** @var DeletedUsersIndex */
	protected $dui;

	/** @var IConfig */
	protected $config;

	/** @var IDBConnection */
	protected $db;

	/** @var UserMapping|\PHPUnit\Framework\MockObject\MockObject */
	protected $mapping;
	/** @var IManager|\PHPUnit\Framework\MockObject\MockObject */
	protected $shareManager;

	protected function setUp(): void {
		parent::setUp();

		// no mocks for those as tests go against DB
		$this->config = \OC::$server->getConfig();
		$this->db = \OC::$server->getDatabaseConnection();

		// ensure a clean database
		$this->config->deleteAppFromAllUsers('user_ldap');

		$this->mapping = $this->createMock(UserMapping::class);
		$this->shareManager = $this->createMock(IManager::class);

		$this->dui = new DeletedUsersIndex($this->config, $this->mapping, $this->shareManager);
	}

	protected function tearDown(): void {
		$this->config->deleteAppFromAllUsers('user_ldap');
		parent::tearDown();
	}

	public function testMarkAndFetchUser() {
		$uids = [
			'cef3775c-71d2-48eb-8984-39a4051b0b95',
			'8c4bbb40-33ed-42d0-9b14-85b0ab76c1cc',
		];

		// ensure test works on a pristine state
		$this->assertFalse($this->dui->hasUsers());

		$this->dui->markUser($uids[0]);

		$this->assertTrue($this->dui->hasUsers());

		$this->dui->markUser($uids[1]);

		$deletedUsers = $this->dui->getUsers();
		$this->assertSame(2, count($deletedUsers));

		// ensure the different uids were used
		foreach ($deletedUsers as $deletedUser) {
			$this->assertTrue(in_array($deletedUser->getOCName(), $uids));
			$i = array_search($deletedUser->getOCName(), $uids);
			$this->assertNotFalse($i);
			unset($uids[$i]);
		}
		$this->assertEmpty($uids);
	}

	public function testUnmarkUser() {
		$uids = [
			'22a162c7-a9ee-487c-9f33-0563795583fb',
			'1fb4e0da-4a75-47f3-8fa7-becc7e35c9c5',
		];

		// we know this works, because of "testMarkAndFetchUser"
		$this->dui->markUser($uids[0]);
		// this returns a working instance of OfflineUser
		$testUser = $this->dui->getUsers()[0];
		$testUser->unmark();

		// the DUI caches the users, to clear mark someone else
		$this->dui->markUser($uids[1]);

		$deletedUsers = $this->dui->getUsers();
		foreach ($deletedUsers as $deletedUser) {
			$this->assertNotSame($testUser->getOCName(), $deletedUser->getOCName());
		}
	}
}
