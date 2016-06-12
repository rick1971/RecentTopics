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
	'RT_LOCATION'            => 'local da tela',
	'RT_LOCATION_EXP'        => 'escolher um lugar para mostrar os tópicos mais recentes.',
	'RT_SORT_START_TIME'     => 'Organizar os tópicos mais recentes tempo inicial de emissão',
	'RT_SORT_START_TIME_EXP' => 'Os tópicos são organizados de acordo com sua respectiva data di abertura e não de acordo com a última mensagem',
	'RT_UNREAD_ONLY'         => 'Mostrar apenas itens não lidos em edições recentes',
	'RT_TOP'                 => 'Mostrar no topo',
	'RT_BOTTOM'              => 'Mostrar no fundo',
	'RT_SIDE'                => 'Mostrar no lado direito',
	)
);
