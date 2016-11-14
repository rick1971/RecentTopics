<?php
/**
 *
 * @package Recent Topics Extension
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
	'RT_ENABLE'              => 'Exibir tópicos recentes',
	'RT_LOCATION'            => 'Selecionar localização',
	'RT_LOCATION_EXP'        => 'Selecionar local para exibir tópicos recentes.',
	'RT_SORT_START_TIME'     => 'Ordenar tópicos recentes por tópico hora de início',
	'RT_SORT_START_TIME_EXP' => 'Em vez de classificá-los por último tempo de postagem',
	'RT_UNREAD_ONLY'         => 'Mostrar apenas tópicos não lidos nos tópicos recentes',
	'RT_TOP'                 => 'Mostrar no topo',
	'RT_BOTTOM'              => 'Mostrar no fundo',
	'RT_SIDE'                => 'Mostrar no lado direito',
	)
);
