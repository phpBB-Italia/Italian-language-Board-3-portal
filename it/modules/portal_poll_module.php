<?php
/**
*
* @package Board3 Portal v2.3 - Poll
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
	'PORTAL_POLL'			=> 'Sondaggio',
	'LATEST_POLLS'			=> 'Ultimi sondaggi',
	'NO_OPTIONS'			=> 'Questo sondaggio non ha opzioni disponibili.',
	'NO_POLL'				=> 'Nessun sondaggio disponibile',
	'RETURN_PORTAL'			=> '%sRitorna al portale%s',

	// ACP
	'ACP_PORTAL_POLLS_SETTINGS'			=> 'Impostazioni Sondaggio',
	'ACP_PORTAL_POLLS_SETTINGS_EXP'	=> 'Qui puoi personalizzare il blocco del sondaggio.',
	'PORTAL_POLL_TOPIC_ID'				=> 'Forum di sondaggi',
	'PORTAL_POLL_TOPIC_ID_EXP'		=> 'Il/i forum da cui dovrebbero essere visualizzati i sondaggi. Se "Escludi forum" è impostato su "Sì", seleziona i forum che desideri escludere.<br />Se "Escludi forum" è impostato su "No" seleziona i forum che desideri visualizzare.<br />Seleziona/Deseleziona più forum tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'PORTAL_POLL_EXCLUDE_ID'			=> 'Escludi i Forum',
	'PORTAL_POLL_EXCLUDE_ID_EXP'	=> 'Seleziona "Sì" se desideri escludere i forum selezionati dal blocco dei sondaggi e "No" se desideri visualizzare solo i sondaggi dei forum selezionati nel blocco dei sondaggi.',
	'PORTAL_POLL_LIMIT'					=> 'Limite di visualizzazione Sondaggi',
	'PORTAL_POLL_LIMIT_EXP'			=> 'Il numero di sondaggi che desideri visualizzare sulla pagina del portale.',
	'PORTAL_POLL_ALLOW_VOTE'			=> 'Consenti il voto',
	'PORTAL_POLL_ALLOW_VOTE_EXP'	=> 'Consenti agli utenti con le autorizzazioni necessarie di votare dalla pagina del portale.',
	'PORTAL_POLL_HIDE'					=> 'Nascondi i sondaggi scaduti?',
));
