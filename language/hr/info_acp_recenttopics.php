<?php
/**
 *
 * @package Recent Topics Extension
 * Croatian translation by Ančica Sečan Matijaščić (http://ancica.sunceko.net)
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'=>'Aktualne teme',
	'RECENT_TOPICS_LIST'=>'Prikaži na "Aktualnim temama"',
	'RECENT_TOPICS_LIST_EXPLAIN'=>'Ukoliko izabereš “Da”, teme postane u [ovaj] forum bit će prikazane na listi aktualnih tema.',
	'RT_CONFIG'=>'Postavke',
	'RT_ANTI_TOPICS'=>'Izuzete teme',
	'RT_ANTI_TOPICS_EXP'=>'IDovi tema koje će biti izuzete, odvojeni [sa] ", " (npr: 7, 9)<br /> [0=niti jedna tema neće biti izuzeta].',
	'RT_MIN_TOPIC_LEVEL'=>'Minimalna razina tipa tema',
	'RT_MIN_TOPIC_LEVEL_EXP'=>'Određuje minimalnu razinu tipa tema koje će biti prikazane na popisu aktualnih tema [bit će prikazane (samo) teme postavljene razine i više razine tipa tema].<br />[0=Normalno, 1=Važno, 2=Obavijest te (je) 3=Globalno].',
	'RT_NUMBER'=>'Aktualne teme',
	'RT_NUMBER_EXP'=>'Maksimalan broj aktualnih tema koje će biti prikazane na popisu aktualnih tema.',
	'RT_PAGE_NUMBER'=>'Stranice aktualnih tema',
	'RT_PAGE_NUMBER_EXP'=>'Ukoliko želiš da sve [aktualne] teme budu prikazane na neograničenom broju stranica [(a) što nije preporučljivo] upiši 0 [1=onemogućeno].<br /><em>Ukoliko pod "Aktualne teme" postaviš vrijednost na npr. 5, (a) pod "Stranice aktualnih tema" postaviš vrijednost na 0 te je na forumu postano npr. 10 [aktualnih] tema, iste će biti prikazane, na popisu aktualnih tema, 5 po 5 [na prvoj stranici, popisa aktualnih tema, 5 te na drugoj stranici, popisa aktualnih tema, 5].<br />Ukoliko pod "Aktualne teme" postaviš vrijednost na npr. 5, (a) pod "Stranice aktualnih tema" postaviš vrijednost na 1 te je na forumu postano npr. 10 [aktualnih] tema, na popisu aktualnih tema, bit će prikazano [samo] 5 tema [na prvoj, jednoj jedinoj, stranici, popisa aktualnih tema].</em>',
	'RT_PARENTS'=>'Prikaži krovne forume',
	'RT_PARENTS_EXP'=>'Ukoliko izabereš “Da”, krovni forum [svake teme] bit će prikazan u retku s detaljima aktualne teme [(a) koja je postana u njemu].',
	'RT_SORT_START_TIME'=>'Poredaj po vremenu započinjanja teme',
	'RT_SORT_START_TIME_EXP'=>'Ukoliko izabereš “Da”, teme će biti poredane po vremenu započinjanja teme [datumu i satu postanja prvog posta] umjesto po vremenu [datumu i satu] postanja zadnjeg posta.',
	'RT_UNREADONLY'=>'Prikaži samo nepročitane teme',
	'RT_UNREADONLY_EXP'=>'Ukoliko izabereš “Da”, bit će prikazane [samo] nepročitane teme - neovisno o tome jesu li ili nisu aktualne [(ova) funkcija koristi iste postavke kao normalan način rada (izuzimanje  foruma/tema i sl.) i odnosi se samo na prijavljene korisnike/ce što će reći da će samo njima biti prikazane (samo) nepročitane teme dok će gostima biti prikazane sve (aktualne) teme].',
	'RT_VIEW_ON'=>'Prikaži "Aktualne teme" na:',
));
