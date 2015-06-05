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
	'RT_ENABLE'              => 'Mostra topic recenti',
	'RT_ALT_LOCATION'        => 'Mostra topic recenti in posizione alternativa',
	'RT_ALT_LOCATION_EXP'    => 'Sposta l’elenco dei topic recenti in una posizione differente (generalmente in fondo ma dipende dallo stile usato).',
	'RT_SORT_START_TIME'     => 'Ordina topic recenti per data d’apertura',
	'RT_SORT_START_TIME_EXP' => 'I topic vengono ordinati in base alla rispettiva data d’apertura e non in base a quella dell’ultimo post.',
	'RT_UNREAD_ONLY'         => 'Mostra solo topic non letti come topic recenti',
));
