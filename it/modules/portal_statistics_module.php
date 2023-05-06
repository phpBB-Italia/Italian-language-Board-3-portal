<?php
/**
*
* @package Board3 Portal v2.3 - Statistics
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
	'ST_TOP'		=> 'Totals',
	'ST_TOP_ANNS'	=> 'Totali Annunci:',
	'ST_TOP_STICKYS'=> 'Totale Argomenti importanti:',
	'ST_TOT_ATTACH'	=> 'Totale Allegati:',
	'TOPICS_PER_DAY_OTHER'	=> 'Argomenti al giorno: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Argomenti al giorno: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Messaggi al giorno: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Messaggi al giorno: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Utenti al giorno: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Utenti al giorno: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Argomenti per utente: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Argomenti per utente: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Messaggi per utente: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Messaggi per utente: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Messaggi per argomento: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Messaggi per argomento: <strong>0</strong>',
));
