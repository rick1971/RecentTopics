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
	'ACL_U_RT_VIEW'            => 'Son Konular: görüntüler (master)',
	'ACL_U_RT_ENABLE'          => 'Son Konular: etkinleştir veya devre dışı bırak',
	'ACL_U_RT_ALT_LOCATION'    => 'Son Konular: farklı yerlerde göster',
	'ACL_U_RT_SORT_START_TIME' => 'Son Konular: sıralamayı değiştir',
	'ACL_U_RT_UNREAD_ONLY'     => 'Son Konular: sadece-okunmamış modunu kullan',
	)
);
