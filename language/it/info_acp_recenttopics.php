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
 * Some characters you may want to copy&paste:
 * ’ » “ ” …
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
	'RECENT_TOPICS'                    => 'Argomenti recenti',
	'RECENT_TOPICS_EXPLAIN'            => 'Qui è possibile modificare le impostazioni di Argomenti recenti.<br /><br />Singoli forum possono essere inclusi o esclusi modificando le rispettive impostazioni nel PCA.<br />Inoltre, tramite le relative impostazioni presenti in questa pagina, è possibile permettere agli utenti di modificare da sé alcuni aspetti dell’estensione',

	'RECENT_TOPICS_LIST'            => 'Mostra in “Argomenti recenti”',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Gli argomenti di questo forum saranno mostrati nell’elenco “Argomenti recenti”.',

	'RT_CONFIG'                        => 'Configurazione',
	'RT_ANTI_TOPICS'                => 'Argomenti esclusi',
	'RT_ANTI_TOPICS_EXP'            => 'Gli ID degli argomenti da escludere, separati da una virgola (es.: 7, 9)<br />Per non escudere alcun argomento, digitare 0.',
	'RT_MIN_TOPIC_LEVEL'            => 'Livello minimo argomenti',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Determina il livello minimo di argomenti da mostrare: saranno mostrati gli argomenti del livello specificato e superiori.<br />(0 = argomento semplice, 1 = importante, 2 = annuncio, 3 = annuncio globale)',
	'RT_NUMBER'                        => 'Argomenti recenti',
	'RT_NUMBER_EXP'                    => 'Numero di argomenti mostrati nella pagina principale.',
	'RT_PAGE_NUMBER'                => 'Pagine di argomenti recenti',
	'RT_PAGE_NUMBER_EXP'            => 'È possibile mostrare più pagine di argomenti recenti; per disabilitare questa funzione, digitare 1. Impostando il valore a 0, saranno create tante pagine quante ne servono per mostrare tutti gli argomenti del forum (non consigliato).',
	'RT_PARENTS'                    => 'Mostra forum genitore',
	'RT_PARENTS_EXP'                => 'Mostra il forum genitore nella riga dell’argomento dell’elenco dei topic recenti',
	'RT_SORT_START_TIME'            => 'Ordina per data d’apertura',
	'RT_SORT_START_TIME_EXP'        => 'Abilitare per mostrare gli argomenti in base alla loro data d’apertura e non per l’ultimo messaggio.',
	'RT_UNREAD_ONLY'                => 'Mostra solo non letti',
	'RT_UNREAD_ONLY_EXP'            => 'Abilita per mostrare solo gli argomenti non letti, recenti o meno; questa funzione usa le stesse impostazioni (esclusione di forum, topic eccetera) della modalità normale.<br />Nota: funziona solo per gli utenti registrati; gli ospiti vedranno l’elenco normale.',

	'RT_VIEW_ON'                    => 'Mostra gli argomenti recenti in:',

	'RT_LOCATION'                    => 'Display location',
	'RT_LOCATION_EXP'                => 'Select location to display recent topics. (prosilver)<br /> (pbWoW3 & pbTech have fixed display locations on the side)',
	'RT_TOP'                         => 'Show on top',
	'RT_BOTTOM'                      => 'Show on bottom',
	'RT_SIDE'                        => 'Show on side',
	)
);
