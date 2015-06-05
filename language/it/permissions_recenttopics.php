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
	'ACL_U_RT_VIEW'            => 'Può nascondere l’elenco dei topic recenti',
	'ACL_U_RT_ENABLE'          => 'Può abilitare l’elenco dei topic recenti',
	'ACL_U_RT_ALT_LOCATION'    => 'Può mostrare l’elenco dei topic recenti nella posizione alternativa',
	'ACL_U_RT_SORT_START_TIME' => 'Può cambiare il metodo di ordinamento dei topic recenti',
	'ACL_U_RT_UNREAD_ONLY'     => 'Può visualizzare solo i topic non letti nell’elenco dei topic recenti',
));
