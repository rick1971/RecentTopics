<?php
/**
 *
 * @package Recent Topics Extension
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_U_RT_VIEW'            => 'Aktualne teme : pogled ( master )',
	'ACL_U_RT_ENABLE'          => 'Aktualne teme : uključivanje ili isključivanje',
	'ACL_U_RT_ALT_LOCATION'    => 'Aktualne teme : koristiti alternativne lokacije za prikaz',
	'ACL_U_RT_SORT_START_TIME' => 'Aktualne teme : Promjena vrsta reda',
	'ACL_U_RT_UNREAD_ONLY'     => 'Aktualne teme : koristite nepročitana samo za modu',
));
