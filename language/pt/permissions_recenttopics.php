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
	'ACL_U_RT_VIEW'            => 'Tópicos recentes: Você pode ocultar a lista de tópicos recentes',
	'ACL_U_RT_ENABLE'          => 'Tópicos recentes: pode ativar a lista de tópicos recentes',
	'ACL_U_RT_LOCATION'        => 'tópicos recentes: Selecione a posição de exibição',
	'ACL_U_RT_SORT_START_TIME' => 'Tópicos recentes: Você pode alterar o método de classificação dos tópicos recentes',
	'ACL_U_RT_UNREAD_ONLY'     => 'Tópicos recentes: Você só pode visualizar a lista de tópicos recentes tópicos não lidos',
	)
);
