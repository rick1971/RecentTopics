<?php
/**
 *
 * @package Recent Topics Extension
 * Turkish translation by golelcintolga
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
	'RECENT_TOPICS'                => 'Son Konular',
	'RECENT_TOPICS_EXPLAIN'            => 'Bu sayfada Recent Topics eklentisi için özel ayalrarı değiştirebilirsiniz.<br /><br />Belirli forumlar YKP\'de düzenlenerek eklenebilir veya çıkarılabilir.<br />Ayrıca, kullanıcıların bazı ayarları kendilerine bırakabilmek için, kullanıcı izinlerini düzenlmeyi unutmayın.',

	'RECENT_TOPICS_LIST'            => '"Son konuları" göster',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Eğer etkinleştirilmiş ise, bu forum da "son konular" eklentisi görüntülenir.',

	'RT_CONFIG'                        => 'Ayarlar',
	'RT_ALT_LOCATION'                => 'Farklı yerlerde göster',
	'RT_ALT_LOCATION_EXP'            => '"Son konuları" farklı yerlerde gösterebilmek için kullanabilirsiniz.<br />Bütün stiller bunu desteklemeyebilir, prosilver\'da sayfanın altına taşınacaktır.',
	'RT_ANTI_TOPICS'                => 'Dışlanan konular',
	'RT_ANTI_TOPICS_EXP'            => 'Ayraç ", " (Örnek: 7, 9)<br />Sıfır "0" değeri bu özelliği devre dışı bırakır.',
	'RT_MIN_TOPIC_LEVEL'            => 'Konu türü',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Gösterilecek konu türünü belirler.<br />(0 = Normal, 1 = Sabit, 2 = Duyuru, 3 = Genel Duyuru)',
	'RT_NUMBER'                        => 'Son Konular',
	'RT_NUMBER_EXP'                    => 'Sayfada gösterilecek konu sayısı.',
	'RT_PAGE_NUMBER'                => 'Son konular sayfalama',
	'RT_PAGE_NUMBER_EXP'            => 'Daha fazla konu görüntülemek için sayfalama özelliğini kullanın. Bu özelliği kapatmak için "1" giriniz. Sıfır "0" gireseniz forumdaki tüm konular gösterilecektir (tavsiye edilmez).',
	'RT_PARENTS'                    => 'Ana forumu göster',
	'RT_PARENTS_EXP'                => 'Son Konular listesisinde konunun ait olduğu ana forumu gösterir.',
	'RT_SORT_START_TIME'            => 'Başlangıç tarihine göre sırala',
	'RT_SORT_START_TIME_EXP'        => 'Son Konuları gönderilen son mesajın tarihi yerine, konunun başlangıç tarihine göre sıralamak için etkinleştirin.',
	'RT_UNREAD_ONLY'                => 'Sadece okunmamış konuları göster',
	'RT_UNREAD_ONLY_EXP'            => 'Bu seçeneğin etkinleştirilmesi sadece okunmamış konuların görüntülenmesini sağlar. Konu türü ayrımı olmayacaktır.<br /><strong>NOT:</strong> Bu özellik giriş yapmış kullanıcılar için geçerlidir; Misafirler normal "Son Konular" listesini görecektir.',

	'RT_VIEW_ON'                     => 'Son Konuları göster:',
	'RT_TOP'                         => 'Show on top',
	'RT_BOTTOM'                      => 'Show on bottom',
	'RT_SIDE'                        => 'Show on side',
	)
);
