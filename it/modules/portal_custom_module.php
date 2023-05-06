<?php
/**
*
* @package Board3 Portal v2.3 - Custom
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
	'PORTAL_CUSTOM'		=> 'Custom Block',

	// ACP
	'ACP_PORTAL_CUSTOM_SETTINGS'			=> 'Impostazioni blocco personalizzato',
	'ACP_PORTAL_CUSTOM_SETTINGS_EXP'		=> 'Qui puoi modificare il tuo blocco personalizzato',
	'TOO_FEW_CHARS'							=> 'Il codice che hai inserito non è abbastanza lungo.',
	'ACP_PORTAL_CUSTOM_PREVIEW'				=> 'Anteprima',
	'ACP_PORTAL_CUSTOM_CODE'				=> 'Codice blocco personalizzato',
	'ACP_PORTAL_CUSTOM_CODE_EXP'			=> 'Modifica qui il codice per il piccolo blocco personalizzato (HTML o BBCode).',
	'ACP_PORTAL_CUSTOM_PERMISSION'			=> 'Autorizzazioni blocco personalizzate',
	'ACP_PORTAL_CUSTOM_PERMISSION_EXP'		=> 'Seleziona i gruppi che dovrebbero essere in grado di visualizzare il blocco personalizzato. Se desideri che tutti gli utenti siano in grado di visualizzare il blocco personalizzato, non selezionare nulla.<br />Seleziona/deseleziona più gruppi tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'ACP_PORTAL_CUSTOM_BBCODE'				=> 'Attiva i BBCode per il blocco personalizzato',
	'ACP_PORTAL_CUSTOM_BBCODE_EXP'			=> 'Un BBCode potrebbe essere utilizzato in questa casella. Se il BBCode non è attivato, l’HTML verrà analizzato.',
));
