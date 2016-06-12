<?php
/**
 *
 * @package Recent Topics Extension
 * Hungarian translation by PayBas
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
	'RT_ENABLE'              => 'A kijelző Friss témák',
	'RT_ALT_LOCATION'        => 'Az alternatív megjelenítési helyét',
	'RT_ALT_LOCATION_EXP'    => 'Mozgás utóbbi téma egy másik helyre (általában az alján, de attól függ, hogy a stílus használható) .',
	'RT_SORT_START_TIME'     => 'Rendezés Legújabb témák téma kezdési időpont',
	'RT_SORT_START_TIME_EXP' => 'Rendezés helyett ezek az utolsó üzenet ideje.',
	'RT_UNREAD_ONLY'         => 'Csak megjelenítéséhez olvasatlan téma az utóbbi témák',
	)
);
