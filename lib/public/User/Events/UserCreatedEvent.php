<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2019 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
namespace OCP\User\Events;

use OCP\EventDispatcher\Event;
use OCP\IUser;

/**
 * Emitted when a new user has been created on the back-end.
 *
 * @since 18.0.0
 */
class UserCreatedEvent extends Event {
	/** @var IUser */
	private $user;

	/** @var string */
	private $password;

	/**
	 * @since 18.0.0
	 */
	public function __construct(IUser $user,
		string $password) {
		parent::__construct();
		$this->user = $user;
		$this->password = $password;
	}

	/**
	 * @since 18.0.0
	 */
	public function getUser(): IUser {
		return $this->user;
	}

	/**
	 * @since 18.0.0
	 */
	public function getUid(): string {
		return $this->user->getUID();
	}

	/**
	 * @since 18.0.0
	 */
	public function getPassword(): string {
		return $this->password;
	}
}
