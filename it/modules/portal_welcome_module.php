<?php
/**
*
* @package Board3 Portal v2.3 - Welcome
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
	'PORTAL_WELCOME'		=> 'Benvenuto',

	// ACP
	'ACP_PORTAL_WELCOME_SETTINGS'			=> 'Impostazioni messaggio di benvenuto',
	'TOO_FEW_CHARS'							=> 'Il messaggio che hai inserito non è abbastanza lungo.',
	'ACP_PORTAL_WELCOME_PREVIEW'			=> 'Anteprima messaggio di benvenuto',
	'ACP_PORTAL_WELCOME_MESSAGE'			=> 'Messaggio di benvenuto',
	'ACP_PORTAL_WELCOME_MESSAGE_EXP'		=> 'E’ possibile modificare il messaggio di benvenuto nella casella di testo. BBCode, immagini e URL sono consentiti.',
));
