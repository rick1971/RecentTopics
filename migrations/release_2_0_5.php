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
class release_2_0_5 extends \phpbb\db\migration\migration
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
		return isset($this->config['rt_version']) && version_compare($this->config['rt_version'], '2.0.5', '>=');
	}

	/**
	 * Defines other migrations to be applied first
	 *
	 * @return array An array of migration class names
	 */
	static public function depends_on()
	{
		return array(
		'\paybas\recenttopics\migrations\release_2_0_4',
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
		array('config.update', array('rt_version', '2.0.5')),
		array('config.add', array('rt_on_newspage', 0)),
		array('config.add', array('rt_sort_start_time', 0)),
		);
	}
}
