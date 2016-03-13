<?php
/**
 * Created by PhpStorm.
 * User: Nix
 * Date: 13.03.16
 * Time: 13:33
 */
namespace paybas\recenttopics\tests\dbal;

class simple_test extends \phpbb_database_test_case
{
	static protected function setup_extensions()
	{
		return array('paybas/recenttopics');
	}

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	public function getDataSet()
	{
		return $this->createXMLDataSet(dirname(__FILE__) . '/config.xml');
	}

	public function test_column()
	{
		$this->db = $this->new_dbal();
		$db_tools = new \phpbb\db\tools($this->db);
		$this->assertTrue($db_tools->sql_column_exists(FORUMS_TABLE, 'forum_recent_topics'), 'Asserting that column "forum_recent_topics" exists');
	}
}
