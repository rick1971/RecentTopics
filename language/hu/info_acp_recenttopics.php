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

if (!defined('IN_PHPBB')) {
    exit;
}
if (empty($lang) || !is_array($lang)) {
    $lang = array();
}

$lang = array_merge(
    $lang, array(
    'RECENT_TOPICS'                    => 'Friss témák',
    'RECENT_TOPICS_LIST'            => 'Jelenítse meg a "Friss témák"-ban',
    'RECENT_TOPICS_LIST_EXPLAIN'    => 'Engedélyezi az ebben a fórumban lévő témák megjelenítését a "Friss témák" kiterjesztésben.',

    'RT_CONFIG'                        => 'Konfiguráció',
    'RT_ANTI_TOPICS'                => 'Kizárt témák',
    'RT_ANTI_TOPICS_EXP'            => 'A kizárandó témák azonosítói ", "-vel elválasztva (pl.: 7, 9)<br />Ha nem akarsz témát kizárni, írj be 0-t.',
    'RT_MIN_TOPIC_LEVEL'            => 'Minimális tématípus-szint',
    'RT_MIN_TOPIC_LEVEL_EXP'        => 'A megjelenítendő tématípusok minimális szintjét határozza meg. Csak a megadott és annál magasabb szintű témák jelennek meg.<br />(0 = normál, 1 = kiemelt, 2 = közlemény, 3 = globális közlemény)',
    'RT_NUMBER'                        => 'Friss téma',
    'RT_NUMBER_EXP'                    => 'A megjelenítendő témák száma.',
    'RT_PAGE_NUMBER'                => 'Friss témák oldalai',
    'RT_PAGE_NUMBER_EXP'            => 'Oldalakra bontással több friss témát jeleníthetsz meg. E funkció letiltásához írj be 1-et. Ha 0-t írsz be, annyi oldal lesz, amennyi az összes téma megjelenítéséhez szükséges (nem ajánlott).',
    'RT_PARENTS'                    => 'Szülőfórum megjelenítése',
    'RT_PARENTS_EXP'                => 'Jelenítse meg a szülőfórumot a friss témák témasoraiban.',
    'RT_SORT_START_TIME'            => 'Rendezés a téma indításának időpontja szerint',
    'RT_SORT_START_TIME_EXP'        => 'A topik indításának időpontja szerinti rendezés az utolsó hozzászólás időpontja helyett.',
    'RT_UNREADONLY'                    => 'Csak az olvasatlan témák megjelenítése',
    'RT_UNREADONLY_EXP'                => 'Csak az olvasatlan témákat jelenítse meg, függetlenül attól, "frissek"-e. Ez a funkció ugyanazokat a beállításokat használja (fórumok/témák kizárása, stb.), mint a normál mód. Megjegyzés: ez csak a bejelentkezett felhasználóknak működik, a vendégek a normál listát kapják.',

    'RT_VIEW_ON'                    => 'Friss témák megjelenítése itt:',
    )
);
