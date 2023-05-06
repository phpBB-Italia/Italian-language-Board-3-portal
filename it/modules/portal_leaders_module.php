<?php
/**
*
* @package Board3 Portal v2.3 - Leaders
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
	'NO_ADMINISTRATORS_P'	=> 'Nessun amministratore',
	'NO_MODERATORS_P'		=> 'Nessun moderatore',
	'NO_GROUPS_P'			=> 'Nessun gruppo',

	// ACP
	'ACP_PORTAL_LEADERS'		=> 'Impostazioni Staff',
	'ACP_PORTAL_LEADERS_EXP'	=> 'Qui puoi personalizzare il blocco staff',
	'PORTAL_LEADERS_EXT'		=> 'Moderatori estesi / Staff',
	'PORTAL_LEADERS_EXT_EXP'	=> 'Il blocco standard elenca tutti gli amministratori/mod, mentre il blocco esteso include tutti i gruppi non nascosti con una legenda.',
));
