<?php
/**
*
* @package Board3 Portal v2.3 - Birthday List
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
	'BIRTHDAYS_AHEAD'              => 'Nei prossimi %s giorni',
	'NO_BIRTHDAYS_AHEAD'        => 'Nessun membro compie gli anni entro questo periodo di tempo.',

	// ACP
	'ACP_PORTAL_BIRTHDAYS_SETTINGS'			=> 'Impostazioni compleanni',
	'ACP_PORTAL_BIRTHDAYS_SETTINGS_EXP'	=> 'Qui puoi personalizzare il blocco del compleanno.',
	'PORTAL_BIRTHDAYS'						=> 'Blocco dei compleanni',
	'PORTAL_BIRTHDAYS_AHEAD'				=> 'Compleanni prossimi giorni',
	'PORTAL_BIRTHDAYS_AHEAD_EXP'		=> 'Quanti giorni devono essere previsti per i futuri compleanni.<br />"0" disabiliterà l’elenco dei prossimi compleanni.',
));
