<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2018 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
namespace OCP\Calendar\Room;

/**
 * @since 14.0.0
 */
interface IManager {
	/**
	 * Registers a room backend
	 *
	 * @param string $backendClass
	 * @return void
	 * @since 14.0.0
	 * @deprecated 24.0.0 use \OC\AppFramework\Bootstrap\::registerCalendarRoomBackend
	 */
	public function registerBackend(string $backendClass);

	/**
	 * Unregisters a room backend
	 *
	 * @param string $backendClass
	 * @return void
	 * @since 14.0.0
	 * @deprecated 24.0.0
	 */
	public function unregisterBackend(string $backendClass);

	/**
	 * @return IBackend[]
	 * @since 14.0.0
	 * @deprecated 24.0.0
	 */
	public function getBackends():array;

	/**
	 * @param string $backendId
	 * @return IBackend|null
	 * @since 14.0.0
	 * @deprecated 24.0.0
	 */
	public function getBackend($backendId);

	/**
	 * removes all registered backend instances
	 * @return void
	 * @since 14.0.0
	 * @deprecated 24.0.0
	 */
	public function clear();

	/**
	 * Update all rooms from all backends right now.
	 *
	 * @since 30.0.0
	 */
	public function update(): void;
}
