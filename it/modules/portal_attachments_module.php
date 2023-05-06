<?php
/**
*
* @package Board3 Portal v2.3 - Attachments
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
	'DOWNLOADS'				=> 'Download',
	'NO_ATTACHMENTS'		=> 'Nessun allegato',
	'PORTAL_ATTACHMENTS'	=> 'Allegati',

	// ACP
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'			=> 'Impostazioni degli allegati',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXP'	=> 'Qui puoi personalizzare il blocco degli allegati.',
	'PORTAL_ATTACHMENTS_NUMBER'							=> 'Limite di allegati visualizzati',
	'PORTAL_ATTACHMENTS_NUMBER_EXP'					=> '0 significa infinito',
	'PORTAL_ATTACHMENTS_FORUM_IDS'						=> 'Forum allegati',
	'PORTAL_ATTACHMENTS_FORUM_IDS_EXP'				=> 'Il/i forum da cui devono essere visualizzati gli allegati. Se "Escludi forum" è impostato su "Sì", seleziona i forum che desideri escludere.<br />Se "Escludi forum" è impostato su "No" seleziona i forum che desideri visualizzare.<br />Seleziona/Deseleziona più forum tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE'					=> 'Escludi i forum',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE_EXP'			=> 'Selezionare "Sì" se si desidera escludere i forum selezionati dal blocco degli allegati e "No" se si desidera visualizzare solo gli allegati dei forum selezionati nel blocco degli allegati.',
	'PORTAL_ATTACHMENTS_MAX_LENGTH'						=> 'Limite di caratteri per ogni allegato',
	'PORTAL_ATTACHMENTS_MAX_LENGTH_EXP'				=> '0 significa infinito',
	'PORTAL_ATTACHMENTS_FILETYPE' 						=> 'Tipi di file',
	'PORTAL_ATTACHMENTS_FILETYPE_EXP' 				=> 'Se "Escludi tipi di file" è impostato su "Sì", seleziona i tipi di file che desideri escludere.<br />Se "Escludi tipi di file" è impostato su "No", seleziona i tipi di file che desideri visualizzare.<br />Seleziona/Deseleziona più tipi di file tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'PORTAL_ATTACHMENTS_EXCLUDE'						=> 'Escludi tipi di file',
	'PORTAL_ATTACHMENTS_EXCLUDE_EXP'				=> 'Selezionare "Sì" se si desidera escludere i tipi di file selezionati dal blocco degli allegati e "No" se si desidera visualizzare solo i tipi di file selezionati nel blocco degli allegati.',
));
