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
class release_2_0_0 extends \phpbb\db\migration\migration
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
		return isset($this->config['rt_version']) && version_compare($this->config['rt_version'], '2.0.0', '>=');
	}

	/**
	 * Updates the database schema by providing a set of change instructions
	 *
	 * @return array Array of schema changes (compatible with db_tools->perform_schema_changes())
	 */
	public function update_schema()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'forums' => array(
					'forum_recent_topics' => array('TINT:1', 1),
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
			'drop_columns' => array(
				$this->table_prefix . 'forums' => array(
					'forum_recent_topics',
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

			// Remove old config if it exists
			array('if', array(
				isset($this->config['recenttopics']),
				array('config.remove', array('recenttopics')),
			)),
			array('if', array(
				isset($this->config['rt_mod_version']),
				array('config.remove', array('rt_mod_version')),
			)),
			array('if', array(
				isset($this->config['rt_version']),
				array('config.remove', array('rt_version')),
			)),
			array('if', array(
				isset($this->config['rt_number']),
				array('config.remove', array('rt_number')),
			)),
			array('if', array(
				isset($this->config['rt_page_number']),
				array('config.remove', array('rt_page_number')),
			)),
			array('if', array(
				isset($this->config['rt_anti_topics']),
				array('config.remove', array('rt_anti_topics')),
			)),
			array('if', array(
				isset($this->config['rt_parents']),
				array('config.remove', array('rt_parents')),
			)),
			array('if', array(
				isset($this->config['rt_index']),
				array('config.remove', array('rt_index')),
			)),

			// Add new config vars
			array('config.add', array('rt_version', '2.0.0')),
			array('config.add', array('rt_number', 5)),
			array('config.add', array('rt_page_number', 0)),
			array('config.add', array('rt_anti_topics', 0)),
			array('config.add', array('rt_parents', 1)),
			array('config.add', array('rt_unreadonly', 0)),
			array('config.add', array('rt_index', 1)),

			// Remove old (v1) modules
			array('if', array(
				array('module.exists', array('acp', 'RECENT_TOPICS_MOD', array(
					'module_basename'    => 'recenttopics',
					'modes'    => array('overview'),
				),
				)),
				array('module.remove', array('acp', 'RECENT_TOPICS_MOD', array(
					'module_basename'    => 'recenttopics',
					'modes'    => array('overview'),
				),
				)),
			)),
			array('if', array(
				array('module.exists', array('acp', 'ACP_CAT_DOT_MODS', 'RECENT_TOPICS_MOD')),
				array('module.remove', array('acp', 'ACP_CAT_DOT_MODS', 'RECENT_TOPICS_MOD')),
			)),

			// Remove early beta modules
			array('if', array(
				array('module.exists', array('acp', 'RECENT_TOPICS_EXT', array(
					'module_basename'    => '\paybas\recenttopics\acp\recenttopics_module',
					'modes'    => array('recenttopics_config'),
				),
				)),
				array('module.remove', array('acp', 'RECENT_TOPICS_EXT', array(
					'module_basename'    => '\paybas\recenttopics\acp\recenttopics_module',
					'modes'    => array('recenttopics_config'),
				),
				)),
			)),
			array('if', array(
				array('module.exists', array('acp', 'ACP_CAT_DOT_MODS', 'RECENT_TOPICS_EXT')),
				array('module.remove', array('acp', 'ACP_CAT_DOT_MODS', 'RECENT_TOPICS_EXT')),
			)),

			// Add new modules
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'RECENT_TOPICS'
			)),

			array('module.add', array(
				'acp',
				'RECENT_TOPICS',
				array(
					'module_basename'    => '\paybas\recenttopics\acp\recenttopics_module',
					'modes'    => array('recenttopics_config'),
				),
			)),
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
			array('config.remove', array('rt_version')),
			array('config.remove', array('rt_number')),
			array('config.remove', array('rt_page_number')),
			array('config.remove', array('rt_anti_topics')),
			array('config.remove', array('rt_parents')),
			array('config.remove', array('rt_unreadonly')),
			array('config.remove', array('rt_index')),

			array('module.remove', array(
				'acp',
				'RECENT_TOPICS',
				array(
					'module_basename'    => '\paybas\recenttopics\acp\recenttopics_module',
					'modes'    => array('recenttopics_config'),
				),
			)),
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'RECENT_TOPICS'
			)),
		);
	}
}
