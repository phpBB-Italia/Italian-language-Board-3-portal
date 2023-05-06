<?php
/**
*
* @package Board3 Portal v2.3 - Recent
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
* @Italian Language By Alex75 https://phpbb-italia.it
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'PORTAL_RECENT'				=> 'Recenti',
	'PORTAL_RECENT_TOPIC'		=> 'Argomenti recenti',
	'PORTAL_RECENT_ANN'			=> 'Annunci recenti',
	'PORTAL_RECENT_HOT_TOPIC'	=> 'Argomenti popolari recenti',

	// ACP
	'ACP_PORTAL_RECENT_SETTINGS'			=> 'Impostazioni argomenti recenti',
	'ACP_PORTAL_RECENT_SETTINGS_EXP'	=> 'Qui puoi personalizzare il blocco degli argomenti recenti.',
	'PORTAL_MAX_TOPIC'						=> 'Limite di annunci recenti/temi caldi',
	'PORTAL_MAX_TOPIC_EXP'				=> '0 significa infinito',
	'PORTAL_RECENT_TITLE_LIMIT'				=> 'Limite di caratteri per ogni argomento recente',
	'PORTAL_RECENT_TITLE_LIMIT_EXP'		=> '0 significa infinito',
	'PORTAL_RECENT_FORUM'					=> 'Forum di argomenti recenti',
	'PORTAL_RECENT_FORUM_EXP'			=> 'Forum da cui estrarre gli argomenti, lascia vuoto per estrarre da tutti i forum. Se "Escludi forum" è impostato su "Sì", seleziona i forum che desideri escludere.<br />Se "Escludi forum" è impostato su "No" seleziona i forum che desideri visualizzare.<br />Seleziona/Deseleziona più forum tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'PORTAL_EXCLUDE_FORUM'					=> 'Escludi forum',
	'PORTAL_EXCLUDE_FORUM_EXP'			=> 'Selezionare "Sì" se si desidera escludere i forum selezionati dal blocco degli argomenti recenti e "No" se si desidera visualizzare solo i forum selezionati nel blocco degli argomenti recenti.',
));
