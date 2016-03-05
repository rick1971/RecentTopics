<?php
/**
 *
 * @package Recent Topics Extension
 * Italian translation by Mauron
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
	'RT_ENABLE'              => 'Mostra argomenti recenti',
	'RT_ALT_LOCATION'        => 'Mostra lista in posizione alternativa',
	'RT_ALT_LOCATION_EXP'    => 'Sposta la lista di argomenti recenti in posizione alternativa (generalmente in basso, dipende dallo stile usato).',
	'RT_SORT_START_TIME'     => 'Ordina argomenti recenti per data d’inizio',
	'RT_SORT_START_TIME_EXP' => 'Gli argomenti non saranno ordinati per data ultimo messaggio.',
	'RT_UNREAD_ONLY'         => 'Mostra solo argomenti non letti nella lista di argomenti recenti',
));
