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
	'RT_ENABLE'              => 'Visualizar los temas recientes',
	'RT_LOCATION'            => 'ubicación de la pantalla',
	'RT_LOCATION_EXP'        => 'Elegir un lugar para mostrar los últimos temas.',
	'RT_SORT_START_TIME'     => 'Ordenar los últimos temas de tiempo inicial del tema',
	'RT_SORT_START_TIME_EXP' => 'Los temas están ordenados de acuerdo con su respectiva di\'apertura fecha y no de acuerdo a la del último mensaje',
	'RT_UNREAD_ONLY'         => 'mostrar sólo los temas no leídos en los últimos temas',
	'RT_TOP'                 => 'Mostrar en la parte superior',
	'RT_BOTTOM'              => 'Mostrar en el fondo',
	'RT_SIDE'                => 'Mostrar en el lado derecho',
	)
);
