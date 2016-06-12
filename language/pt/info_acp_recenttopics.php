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
	//PCA Fórum
	'RECENT_TOPICS_LIST'            => 'Veja "Tópicos recentes"',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'São os tópicos deste fórum que serão exibidos no índice de "Tópicos recentes"?',

	//PCA título
	'RECENT_TOPICS'                 => 'Fórum Topicos recentes',
	'RECENT_TOPICS_EXPLAIN'         => "Aqui você pode alterar as configurações de Topicos recentes. <br /> <br /> fórum individuais podem ser incluídos ou excluídos, alterando as respectivas definições no PCA. <br /> Além disso, através das definições nesta página, você pode permitir que os usuários editem os aspectos de auto certo ponto",
	'RT_CONFIG'                     => 'configuración',

	//configuração geral para usuários anônimos
	'RT_OVERRIDABLE'                => 'As instituições que os membros do painel têm prioridade',
	'RT_DISPLAY_INDEX'              => 'Mostrar na página de índice',
	'RT_LOCATION'                   => 'local da tela',
	'RT_LOCATION_EXP'               => 'Escolha um lugar para mostrar os tópicos mais recentes.',
	'RT_TOP'                        => 'Mostrar no topo',
	'RT_BOTTOM'                     => 'Mostrar no fundo',
	'RT_SIDE'                       => 'Mostrar no lado direito',
	'RT_SORT_START_TIME'            => 'Ordenar tópicos por a hora de início',
	'RT_SORT_START_TIME_EXP'        => 'Ativar para classificar os tópicos recentes sobre a hora de início do problema, em vez de o último respondeu.',
	'RT_UNREAD_ONLY'                => 'Mostrar apenas tópicos não lidos',
	'RT_UNREAD_ONLY_EXP'            => 'Esta opção só irá mostrar itens não lidos (se eles são "recente" ou não). Esta função utiliza as mesmas configurações (excluindo fóruns / tópicos etc.) do que o modo normal. Nota: isso só funciona para usuários registrados e identificados; os hóspedes podem obter a lista normal.',

	//configurações globais
	'RT_GLOBAL_SETTINGS'            => 'Configurações globais',
	'RT_NUMBER'                     => 'tópicos recentes',
	'RT_NUMBER_EXP'                 => 'Número de itens mostrados no índice.',
	'RT_PAGE_NUMBER'                => 'Tópicos recentes Páginas',
	'RT_PAGE_NUMBER_EXP'            => 'Você pode exibir tópicos mais recentes usando um pequeno paginação. Simplesmente digite 1 para desativar esse recurso. Se você digitar 0, não haverá muitas páginas que forem necessárias para mostrar todas as disciplinas.',
	'RT_MIN_TOPIC_LEVEL'            => 'Tema tipo nível mínimo',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Determina o tipo de nível mínimo do sujeito ao show. temas definir o nível e acima será exibido.',
	'RT_ANTI_TOPICS'                => 'Topicos excluídos',
	'RT_ANTI_TOPICS_EXP'            => 'Separados por "," (Por exemplo: 7,9) </ b> Se você não quiser excluir um tópico, basta digitar 0.',
	'RT_PARENTS'                    => 'Mostrar Fórum Pai',
	'RT_PARENTS_EXP'                => 'Mostrar fóruns pai na linha de assunto de questões recentes.',

	//extensões
	'RT_VIEW_ON'                    => 'Ver tópicos recentes:',

	)
);
