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
	'ACL_U_RT_VIEW'            => 'Temas recientes: se puede ocultar la lista de temas recientes',
	'ACL_U_RT_ENABLE'          => 'Temas recientes: puede activar la lista de temas recientes',
	'ACL_U_RT_LOCATION'        => 'Temas recientes: Seleccione la posición de visualización',
	'ACL_U_RT_SORT_START_TIME' => 'Temas recientes: Puede cambiar el método de clasificación de temas recientes',
	'ACL_U_RT_UNREAD_ONLY'     => 'Temas recientes: Solo puede ver la lista de los últimos temas temas no leidos',
	)
);
