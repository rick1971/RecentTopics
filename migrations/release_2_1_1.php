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
class release_2_1_1 extends \phpbb\db\migration\migration
{

	/**
	 * Check if recent topics 2.1.1 is installed.
	 *
	 * @return bool True if notification type exists, false otherwise
	 * @access public
	 */
	public function effectively_installed()
	{
		return isset($this->config['rt_version']) && version_compare($this->config['rt_version'], '2.1.1', '>=');
	}

	/**
	 * Assign migration file dependencies for this migration
	 *
	 * @return array Array of migration files
	 * @static
	 * @access public
	 */
	static public function depends_on()
	{
		return array(
			'\paybas\recenttopics\migrations\release_2_1_0',
		);
	}

	/**
	 * Add table columns schema to the database:
	 *
	 * @return array Array of table columns schema
	 * @access public
	 */
	public function update_data()
	{
		return array(
			array('config.update', array('rt_version', '2.1.1')),
			array('config.update', array('rt_location', 'RT_SIDE')),
			array('custom', array(array($this, 'update_default_loc'))),
		);

	}

	public function update_default_loc()
	{
		$sql = 'UPDATE ' . USERS_TABLE . ' SET user_rt_location = \'RT_SIDE\' ';
		$this->db->sql_query($sql);
	}

}
