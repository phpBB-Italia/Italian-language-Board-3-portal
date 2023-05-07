<?php
/**
*
* @package Board3 Portal v2.3 - Calendar
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
	'PORTAL_CALENDAR'			=> 'Calendario',
	'VIEW_NEXT_MONTH'		=> 'Prossimo mese',
	'VIEW_PREVIOUS_MONTH'	=> 'Mese scorso',
	'EVENT_START'			=> 'Da',
	'EVENT_END'				=> 'A',
	'EVENT_TIME'			=> 'data',
	'EVENT_ALL_DAY'			=> 'Eventi di tutti i giorni',
	'CURRENT_EVENTS'		=> 'Eventi attuali',
	'NO_CUR_EVENTS'			=> 'Nessun Evento attuale',
	'UPCOMING_EVENTS'		=> 'Prossimi eventi',
	'NO_UPCOMING_EVENTS'	=> 'Nessun Prossimo evento',

	'mini_cal'	=> array(
		'day'	=> array(
			'1'	=> 'Do',
			'2'	=> 'Lu',
			'3'	=> 'Ma',
			'4'	=> 'Me',
			'5'	=> 'Gi',
			'6'	=> 'Ve',
			'7'	=> 'Sa',
		),

		'month'	=> array(
			'1'	=> 'Gen.',
			'2'	=> 'Feb.',
			'3'	=> 'Mar.',
			'4'	=> 'Apr.',
			'5'	=> 'Mag',
			'6'	=> 'Giu.',
			'7'	=> 'Lug.',
			'8'	=> 'Ago.',
			'9'	=> 'Set.',
			'10'=> 'Ott.',
			'11'=> 'Nov.',
			'12'=> 'Dic.',
		),

		'long_month'=> array(
			'1'	=> 'Gennaio',
			'2'	=> 'Febbraio',
			'3'	=> 'Marzo',
			'4'	=> 'Aprile',
			'5'	=> 'Maggio',
			'6'	=> 'Giugno',
			'7'	=> 'Luglio',
			'8'	=> 'Agosto',
			'9'	=> 'Settembre',
			'10'=> 'Ottobre',
			'11'=> 'Novembre',
			'12'=> 'Dicembre',
		),
	),

	// ACP
	'ACP_PORTAL_CALENDAR'					=> 'Impostazioni Calendario',
	'ACP_PORTAL_CALENDAR_EXP'				=> 'Qui puoi personalizzare il blocco del calendario.',
	'ACP_PORTAL_EVENTS'						=> 'Eventi Calendario',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> 'Colore giorno attivo',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'	=> 'HEX o nome dei colori sono consentiti come ad esempio: #FFFFFF oppure white.',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> 'Colore per la domenica',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'	=> 'HEX o nome dei colori sono consentiti come ad esempio: #FFFFFF oppure white.',
	'PORTAL_LONG_MONTH'						=> 'Mostra i nomi completi dei mesi',
	'PORTAL_LONG_MONTH_EXP'				=> 'Se disabilitato, i mesi verranno abbreviati, ad es. Ago. invece di Agosto.',
	'PORTAL_SUNDAY_FIRST'					=> 'Primo giorno della settimana',
	'PORTAL_SUNDAY_FIRST_EXP'			=> 'Se disabilitato il calendario mostrerà Lu. --> Do., altrimenti Do. --> Sa.',
	'PORTAL_DISPLAY_EVENTS'					=> 'Visualizza eventi',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> 'Visualizza gli eventi che sono stati creati nel blocco del calendario',
	'PORTAL_EVENTS_MANAGE'					=> 'Gestisci eventi',
	'NO_EVENT_TITLE'						=> 'Non hai specificato un titolo per l’evento.',
	'NO_EVENT_START'						=> 'Non hai specificato un’ora di inizio per l’evento.',
	'ADD_EVENT'								=> 'Aggiungi nuovo evento',
	'EVENT_UPDATED'							=> 'Evento aggiornato con successo.',
	'EVENT_ADDED'							=> 'Evento aggiunto con successo.',
	'NO_EVENT'								=> 'Nessun evento specificato.',
	'EVENT_TITLE'							=> 'Titolo dell’evento',
	'EVENT_DESC'							=> 'Descrizione dell’evento',
	'EVENT_LINK'							=> 'Collegamento all’evento',
	'EVENT_LINK_EXP'						=> 'Immettere il collegamento a un argomento o sito Web con l’annuncio o l’argomento di discussione dell’evento.',
	'NO_EVENTS'								=> 'Nessun evento',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> 'L’ora di inizio inserita non è corretta. Si prega di seguire attentamente le istruzioni.',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> 'L’ora di fine inserita non è corretta. Si prega di seguire attentamente le istruzioni.',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> 'L’ora di inizio dell’evento deve essere futura.',
	'ACP_PORTAL_EVENT_START_DATE'			=> 'Data di inizio dell’evento',
	'ACP_PORTAL_EVENT_START_DATE_EXP'		=> 'Inserisci la data e l’ora di inizio dell’evento. La data deve essere in un formato simile: MM/GG/AAAA 3:00 PM',
	'ACP_PORTAL_EVENT_END_DATE'			=> 'Data di fine dell’evento',
	'ACP_PORTAL_EVENT_END_DATE_EXP'			=> 'Inserisci la data e l’ora di fine dell’evento. La data deve essere in un formato simile: MM/GG/AAAA 3:00 PM',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> 'La fine dell’evento deve essere successiva all’inizio dell’evento.',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> 'Autorizzazioni eventi',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> 'Selezionare i gruppi che devono essere autorizzati a visualizzare l’evento. Se desideri che tutti gli utenti possano visualizzare l’evento, non selezionare nulla.<br />Seleziona/deseleziona più gruppi tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> 'Apri i collegamenti agli eventi esterni in una nuova finestra',

	// Logs
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Evento aggiornato</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Evento aggiunto</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Evento rimosso</strong><br />&raquo; %s',
));
