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
	'ACL_U_RT_VIEW'            => 'Può visualizzare l’elenco di argomenti recenti', //'Argomenti recenti: mostra (master)',
	'ACL_U_RT_ENABLE'          => 'Può disattivare l’elenco di argomenti recenti', // 'Argomenti recenti: attiva o disattiva',
	'ACL_U_RT_ALT_LOCATION'    => 'Può visualizzare l’elenco di argomenti recenti in posizione alternativa', // 'Argomenti recenti: usa posizione alternativa',
	'ACL_U_RT_SORT_START_TIME' => 'Può cambiare la modalità di ordinamento dell’elenco di argomenti recenti', // 'Argomenti recenti: cambia ordinamento',
	'ACL_U_RT_UNREAD_ONLY'     => 'Può impostare la visualizzazione dei soli argomenti non letti nell’elenco di argomenti recenti', // 'Argomenti recenti: usa modalità “solo non letti”',
));
