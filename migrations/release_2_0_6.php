<?php
/**
 *
 * @package Recent Topics Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

namespace paybas\recenttopics\migrations;

/**
 * Abstract base class for database migrations
 *
 * Each migration consists of a set of schema and data changes to be implemented
 * in a subclass. This class provides various utility methods to simplify editing
 * a phpBB.
 */
class release_2_0_6 extends \phpbb\db\migration\migration
{
	/**
	 * Allows you to check if the migration is effectively installed (entirely optional)
	 *
	 * This is checked when a migration is installed. If true is returned, the migration will be set as
	 * installed without performing the database changes.
	 * This function is intended to help moving to migrations from a previous database updater, where some
	 * migrations may have been installed already even though they are not yet listed in the migrations table.
	 *
	 * @return bool True if this migration is installed, False if this migration is not installed (checked on install)
	 */
	public function effectively_installed()
	{
		return isset($this->config['rt_version']) && version_compare($this->config['rt_version'], '2.0.6', '>=');
	}

	/**
	 * Defines other migrations to be applied first
	 *
	 * @return array An array of migration class names
	 */
	static public function depends_on()
	{
		return array(
			'\paybas\recenttopics\migrations\release_2_0_5',
		);
	}

	/**
	 * Updates the database schema by providing a set of change instructions
	 *
	 * @return array Array of schema changes (compatible with db_tools->perform_schema_changes())
	 */
	public function update_schema()
	{
		return array(
			'add_columns'    => array(
				$this->table_prefix . 'users' => array(
					'user_rt_enable'          => array('BOOL', 1),
					'user_rt_alt_location'    => array('BOOL', 0),
					'user_rt_sort_start_time' => array('BOOL', 0),
					'user_rt_unread_only'     => array('BOOL', 0),
				),
			),
		);
	}

	/**
	 * Reverts the database schema by providing a set of change instructions
	 *
	 * @return array Array of schema changes (compatible with db_tools->perform_schema_changes())
	 */
	public function revert_schema()
	{
		return array(
			'drop_columns'    => array(
				$this->table_prefix . 'users' => array(
					'user_rt_enable',
					'user_rt_alt_location',
					'user_rt_sort_start_time',
					'user_rt_unread_only',
				),
			),
		);
	}

	/**
	 * Updates data by returning a list of instructions to be executed
	 *
	 * @return array Array of data update instructions
	 */
	public function update_data()
	{
		return array(
			array('config.remove', array('rt_unreadonly')),
			array('config.add', array('rt_unread_only', 0)),
			array('config.add', array('rt_alt_location', 0)),
			array('config.update', array('rt_version', '2.0.6')),

			array('permission.add', array('u_rt_view')),
			array('permission.add', array('u_rt_enable')),
			array('permission.add', array('u_rt_alt_location')),
			array('permission.add', array('u_rt_sort_start_time')),
			array('permission.add', array('u_rt_unread_only')),

			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_enable')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_alt_location')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_sort_start_time')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_unread_only')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NOPM', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NOAVATAR', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NEW_MEMBER', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NOAVATAR', 'u_rt_view')),
			array('permission.permission_set', array('GUESTS', 'u_rt_view', 'group')),
		);
	}

	/**
	 * Reverts data by returning a list of instructions to be executed
	 *
	 * @return array Array of data instructions that will be performed on revert
	 *    NOTE: calls to tools (such as config.add) are automatically reverted when
	 *        possible, so you should not attempt to revert those, this is mostly for
	 *        otherwise unrevertable calls (custom functions for example)
	 */
	public function revert_data()
	{
		return array(
			array('config.remove', array('rt_unread_only')),
			array('config.remove', array('rt_alt_location')),

			array('permission.remove', array('u_rt_view')),
			array('permission.remove', array('u_rt_enable')),
			array('permission.remove', array('u_rt_alt_location')),
			array('permission.remove', array('u_rt_sort_start_time')),
			array('permission.remove', array('u_rt_unread_only')),

		);
	}
}
