<?php
/**
*
* @package Board3 Portal v2.3 - Announcements
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
	'LATEST_ANNOUNCEMENTS'		=> 'Ultimi annunci globali',
	'GLOBAL_ANNOUNCEMENTS'		=> 'Annunci globali',
	'GLOBAL_ANNOUNCEMENT'		=> 'Annuncio globale',
	'VIEW_LATEST_ANNOUNCEMENT'  => '1 annuncio',
	'VIEW_LATEST_ANNOUNCEMENTS' => '%d annunci',
	'READ_FULL'					=> 'Leggi tutto',
	'NO_ANNOUNCEMENTS'			=> 'Nessun annuncio globale',
	'POSTED_BY'					=> 'Poster',
	'COMMENTS'					=> 'Commenti',
	'VIEW_COMMENTS'				=> 'Visualizza Commenti',
	'PORTAL_POST_REPLY'			=> 'Scrivi commenti',
	'TOPIC_VIEWS'				=> 'Visualizzazioni',
	'JUMP_NEWEST'				=> 'Vai al Messaggio più recente',
	'JUMP_FIRST'				=> 'Vai al primo Messaggio',
	'JUMP_TO_POST'				=> 'Vai al Messaggio',

	// ACP
	'ACP_PORTAL_ANNOUNCE_SETTINGS'				=> 'Impostazioni annunci globali',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXP'		=> 'Qui puoi personalizzare il blocco degli annunci globali.',
	'PORTAL_ANNOUNCEMENTS'						=> 'Display global announcements',
	'PORTAL_ANNOUNCEMENTS_EXP'				=> 'Visualizza questo blocco sul portale.',
	'PORTAL_ANNOUNCEMENTS_STYLE'				=> 'Stile compatto, blocco degli annunci globali',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXP'		=> '"Sì" significa utilizzare lo stile compatto per gli annunci globali. "No" significa utilizzare lo stile grande (visualizzazione testo).',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'			=> 'Numero di annunci sul portale',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXP'	=> '0 significa infinito',
	'PORTAL_ANNOUNCEMENTS_DAY'					=> 'Numero di giorni di visualizzazione annuncio',
	'PORTAL_ANNOUNCEMENTS_DAY_EXP'			=> '0 significa infinito',
	'PORTAL_ANNOUNCEMENTS_LENGTH'				=> 'Dimensione/lunghezza massima degli annunci globali',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXP'		=> '0 significa infinito',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'			=> 'Forum di annunci',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXP'	=> 'Forums da cui recuperare gli annunci. Lascia questo campo vuoto per recuperare gli annunci da tutti i forum. Se "Escludi forum" è impostato su "Sì", seleziona i forum che desideri escludere.<br />Se "Escludi forum" è impostato su "No" seleziona i forum che desideri visualizzare.<br />Seleziona/Deseleziona più forum tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE'		=> 'Escludi i forum',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE_EXP'=> 'Selezionare "Sì" se si desidera escludere i forum selezionati dal blocco degli annunci e "No" se si desidera visualizzare solo i forum selezionati nel blocco degli annunci.',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS'			=> 'Abilita/disabilita permessi',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS_EXP'	=> 'Quando si visualizzano gli annunci, considerare i permessi di visualizzazione del forum di un utente.',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE'				=> 'Abilita il sistema di archiviazione degli annunci',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE_EXP'		=> 'Se abilitato verranno visualizzati i numeri di pagina, nell’archivio degli annunci.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Visualizza il numero di risposte e visualizzazioni',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Questa impostazione riguarda il blocco compatto.<br />Se Sì, il numero di risposte e visualizzazioni viene mostrato in 2 colonne aggiuntive. Se No, le risposte e le visualizzazioni verranno mostrate accanto al nome del forum. Seleziona No se hai problemi con la visualizzazione delle colonne extra a causa della larghezza extra richiesta.',
));
