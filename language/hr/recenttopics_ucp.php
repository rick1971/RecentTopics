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
	'RT_ENABLE'              => 'Prikaz Aktualne tema',
	'RT_LOCATION'            => 'Select location to display recent topics',
	'RT_LOCATION_EXP'        => 'For prosilver styles.',
	'RT_SORT_START_TIME'     => 'Sortiraj Aktualne teme po vremenu pokretanja teme',
	'RT_SORT_START_TIME_EXP' => 'Umjesto da ih sortiranje po posljednji post vremena.',
	'RT_UNREAD_ONLY'         => 'Prikazati samo nepročitane teme u posljednjih nekoliko tema',
	)
);
