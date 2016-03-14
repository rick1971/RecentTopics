<?php
/**
 *
 * @package Recent Topics Extension
 * Estonian translation by phpBBeesti.com 04/2015
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
    'RT_ENABLE'              => 'Näita "Hiljutised teemad" laiendust',
    'RT_ALT_LOCATION'        => 'Kasuta näitamiseks alternatiivset asukohta',
    'RT_ALT_LOCATION_EXP'    => 'Liiguta "Hiljutised teemad" teise asukohta (tavaliselt alla, kuid see oleneb stiilist mida kasutad).',
    'RT_SORT_START_TIME'     => 'Sorteeri teemad alustamis aja järgi',
    'RT_SORT_START_TIME_EXP' => 'Selle asemel, et sorteerida viimase postituse aja järgi, sorteeritakse need teema alustamis aja järgi.',
    'RT_UNREAD_ONLY'         => 'Kuva ainult lugemata teemad',
    )
);
