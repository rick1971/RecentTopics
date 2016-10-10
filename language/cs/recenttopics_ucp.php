<?php
/**
 *
 * @package Recent Topics Extension
 * Czech translation by R3gi
 *
 * @copyright (c) 2016 PayBas
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
	'RT_ENABLE'              => 'Zobrazit nedávná témata',
	'RT_LOCATION'            => 'Select location to display recent topics',
	'RT_LOCATION_EXP'        => 'Vyloučené vzhledy :pbTech, pbWoW3 (kvůli pevnému umístění)',
	'RT_SORT_START_TIME'     => 'Řadit nedávná témata dle času založení',
	'RT_SORT_START_TIME_EXP' => 'Namísto jejich řazení podle času posledního příspěvku.',
	'RT_UNREAD_ONLY'         => 'V nedávných tématech zobrazovat pouze nepřečtené příspěvky',
	'RT_TOP'                 => 'Zobrazovat nahoře',
	'RT_BOTTOM'              => 'Zobrazovat dole',
	'RT_SIDE'                => 'Zobrazovat na straně',
	)
);
