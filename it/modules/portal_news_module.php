<?php
/**
*
* @package Board3 Portal v2.3 - News
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
	'LATEST_NEWS'			=> 'Ultime notizie',
	'READ_FULL'				=> 'Leggi tutto',
	'NO_NEWS'				=> 'Nessuna notizia',
	'POSTED_BY'				=> 'Autore',
	'COMMENTS'				=> 'Commenti',
	'VIEW_COMMENTS'			=> 'Vedi commenti',
	'PORTAL_POST_REPLY'		=> 'Scrivi commenti',
	'TOPIC_VIEWS'			=> 'Visualizzazioni',
	'JUMP_NEWEST'			=> 'Vai al post più recente',
	'JUMP_FIRST'			=> 'Vai al primo post',
	'JUMP_TO_POST'			=> 'Vai al post',

	// ACP
	'ACP_PORTAL_NEWS_SETTINGS'			=> 'Impostazioni notizie',
	'ACP_PORTAL_NEWS_SETTINGS_EXP'	=> 'Qui puoi personalizzare il blocco delle notizie.',
	'PORTAL_NEWS_STYLE'					=> 'Stile blocco notizie compatto',
	'PORTAL_NEWS_STYLE_EXP'			=> '"Sì" significa utilizzare lo stile compatto per le notizie. "No" significa utilizzare lo stile grande (visualizzazione testo).',
	'PORTAL_SHOW_ALL_NEWS'				=> 'Mostra tutti gli articoli in questo forum',
	'PORTAL_SHOW_ALL_NEWS_EXP'		=> 'Includi importanti.',
	'PORTAL_NUMBER_OF_NEWS'				=> 'Numero di articoli di notizie sul portale',
	'PORTAL_NUMBER_OF_NEWS_EXP'		=> '0 significa infinito',
	'PORTAL_NEWS_LENGTH'				=> 'Lunghezza massima dell’articolo nelle notizie',
	'PORTAL_NEWS_LENGTH_EXP'		=> '0 significa infinito',
	'PORTAL_NEWS_FORUM' 				=> 'Forum di notizie',
	'PORTAL_NEWS_FORUM_EXP' 		=> 'Forum da cui estraiamo gli articoli, lascia vuoto per estrarre da tutti i forum. Se "Escludi forum" è impostato su "Sì", seleziona i forum che desideri escludere.<br />Se "Escludi forum" è impostato su "No" seleziona i forum che desideri visualizzare.<br />Seleziona/Deseleziona più forum tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'PORTAL_NEWS_EXCLUDE'				=> 'Escludi i forum',
	'PORTAL_NEWS_EXCLUDE_EXP'		=> 'Sselezionare "Sì" se si desidera escludere i forum selezionati dal blocco delle notizie e "No" se si desidera visualizzare solo i forum selezionati nel blocco delle notizie.',
	'PORTAL_NEWS_PERMISSIONS'			=> 'Abilita/disabilita le autorizzazioni',
	'PORTAL_NEWS_PERMISSIONS_EXP'	=> 'Prendi in considerazione i permessi di visualizzazione del forum quando visualizzi le notizie',
	'PORTAL_NEWS_SHOW_LAST'				=> 'Ordina in base ai post più recenti',
	'PORTAL_NEWS_SHOW_LAST_EXP'		=> 'Quando attivato, il più recente verrà ordinato in base ai post più recenti. Quando disattivato, le notizie verranno ordinate in base all’argomento più recente.',
	'PORTAL_NEWS_ARCHIVE'				=> 'Abilita il sistema di archiviazione delle notizie',
	'PORTAL_NEWS_ARCHIVE_EXP'		=> 'Se abilitato il sistema di archivio news, verranno visualizzati i numeri di pagina.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Visualizza il numero di risposte e visualizzazioni',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Questa impostazione riguarda il blocco compatto.<br />Se Sì, il numero di risposte e visualizzazioni viene mostrato in 2 colonne aggiuntive. Se No, le risposte e le visualizzazioni verranno mostrate accanto al nome del forum. Seleziona No se hai problemi con la visualizzazione delle colonne extra a causa della larghezza extra richiesta.',
));
