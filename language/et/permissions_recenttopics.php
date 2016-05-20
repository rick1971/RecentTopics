<?php
/**
 *
 * @package Recent Topics Extension
 * Estonian translation by www.phpbbeesti.com 04/2015
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge(
	$lang, array(
	'ACL_U_RT_VIEW'            => 'Hiljutised teemad: vaade (master)',
	'ACL_U_RT_ENABLE'          => 'Hiljutised teemad: luba või keela',
	'ACL_U_RT_LOCATION'        => 'Recent Topics: select display location',
	'ACL_U_RT_SORT_START_TIME' => 'Hiljutised teemad: muuda sorteerimis järjekorda',
	'ACL_U_RT_UNREAD_ONLY'     => 'Hiljutised teemad: kasuta ainult lugemata režiimi',
	)
);
