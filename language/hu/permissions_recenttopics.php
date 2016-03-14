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
    'ACL_U_RT_VIEW'            => 'Friss témák : kilátás (master)',
    'ACL_U_RT_ENABLE'          => 'Friss témák : engedélyezi vagy letiltja',
    'ACL_U_RT_ALT_LOCATION'    => 'Friss témák : alternatív megjelenítési helyét',
    'ACL_U_RT_SORT_START_TIME' => 'Friss témák : változás rendezési sorrend',
    'ACL_U_RT_UNREAD_ONLY'     => 'Friss témák : használja olvasott -only módban',
    )
);
