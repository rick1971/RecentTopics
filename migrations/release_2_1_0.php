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

class release_2_1_0 extends \phpbb\db\migration\migration
{

	/**
	 * Check if recent topics 2.1 is installed.
	 *
	 * @return bool True if notification type exists, false otherwise
	 * @access public
	 */
	public function effectively_installed()
	{
		return isset($this->config['rt_version']) && version_compare($this->config['rt_version'], '2.1.0', '>=');
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
			'\paybas\recenttopics\migrations\release_2_0_6',
		);
	}


	/**
	 * Add table columns schema to the database:
	 *
	 * @return array Array of table columns schema
	 * @access public
	 */
	public function update_schema()
	{
		return array(
			'drop_columns'    => array(
				$this->table_prefix . 'users' => array(
					'user_rt_alt_location',
				),
			),

			'add_columns'    => array(
				$this->table_prefix . 'users' => array(
					'user_rt_location'    => array('VCHAR:10', ''),
				),
			),
		);

	}

	/**
	 * Drop table columns schema from the database
	 *
	 * @return array Array of table columns schema
	 * @access public
	 */
	public function revert_schema()
	{
		return array(
			'drop_columns'		=> array(
				$this->table_prefix . 'users'		=> array(
					'user_rt_location',
				),
			),
		);
	}

	/**
	 * Add or update data in the database
	 *
	 * @return array Array of table data
	 * @access public
	 */
	public function update_data()
	{
		return array(
			array('config.update', array('rt_version', '2.1.0')),
			array('config.remove', array('rt_alt_location')),
			array('config.add',    array('rt_location', 'RT_TOP')),

			array('permission.remove', array('u_rt_alt_location')),
			array('permission.add', array('u_rt_location')),

			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_location')),

		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('rt_location')),
			array('permission.remove', array('u_rt_location')),

		);
	}







}
