<?php
/**
*
* @package Board3 Portal v2.3
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
	// Portal Modules
	'ACP_PORTAL_MODULES_EXP'		=> 'Puoi gestire i tuoi moduli del portale qui. Se disattivi tutti i moduli, disattiva anche il Portale.',

	'MODULE_POS_TOP'				=> 'Superiore',
	'MODULE_POS_LEFT'				=> 'Colonna Sinistra',
	'MODULE_POS_RIGHT'				=> 'Colonna Destra',
	'MODULE_POS_CENTER'				=> 'Colonna Centrale',
	'MODULE_POS_BOTTOM'				=> 'Inferiore',
	'ADD_MODULE'					=> 'Aggiungi modulo',
	'CHOOSE_MODULE'					=> 'Scegli modulo',
	'CHOOSE_MODULE_EXP'				=> 'Scegli un modulo dall’elenco a discesa',
	'SUCCESS_ADD'					=> 'Il modulo è stato aggiunto con successo.',
	'SUCCESS_DELETE'				=> 'Il modulo è stato rimosso con successo.',
	'NO_MODULES'					=> 'Nessun modulo è stato rilevato.',
	'MOVE_RIGHT'					=> 'Sposta a destra',
	'MOVE_LEFT'						=> 'Sposta a sinistra',
	'B3P_FILE_NOT_FOUND'			=> 'Impossibile trovare il file richiesto',
	'UNABLE_TO_MOVE'				=> 'Non è possibile spostare il blocco nella colonna selezionata.',
	'UNABLE_TO_MOVE_ROW'			=> 'Non è possibile spostare il blocco sulla riga selezionata.',
	'UNABLE_TO_ADD_MODULE'			=> 'Non è possibile aggiungere il modulo alla colonna selezionata.',
	'DELETE_MODULE_CONFIRM'			=> 'Sei sicuro di voler eliminare il modulo "%1$s"?',
	'MODULE_RESET_SUCCESS'			=> 'Impostazioni del modulo ripristinate correttamente.',
	'MODULE_RESET_CONFIRM'			=> 'Sei sicuro di voler ripristinare le impostazioni del modulo "%1$s"?',
	'MODULE_NOT_EXISTS'				=> 'Il modulo selezionato non esiste.',

	'MODULE_OPTIONS'			=> 'Opzioni Modulo',
	'MODULE_NAME'				=> 'Nome Modulo',
	'MODULE_NAME_EXP'			=> 'Immettere il nome del modulo che sarà visualizzato nella configurazione del modulo.',
	'MODULE_IMAGE'				=> 'Immagine Modulo',
	'MODULE_IMAGE_EXP'			=> 'Immettere il nome del file immagine del modulo. Le immagini devono essere inserite, nella cartella styles/all/theme/images//portal/.',
	'MODULE_PERMISSIONS'		=> 'Permessi Modulo',
	'MODULE_PERMISSIONS_EXP'	=> 'Seleziona i gruppi che dovrebbero essere autorizzati a visualizzare il modulo. Se desideri che tutti gli utenti possano visualizzare il modulo, non selezionare nulla.<br />Seleziona/deseleziona più gruppi tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'MODULE_IMAGE_WIDTH'		=> 'Larghezza immagine del modulo',
	'MODULE_IMAGE_WIDTH_EXP'	=> 'Inserisci la larghezza dell’immagine del modulo in pixel.<br>Se non desideri un’immagine del modulo, inserisci <strong>0</strong> come valore.',
	'MODULE_IMAGE_HEIGHT'		=> 'Altezza immagine del modulo',
	'MODULE_IMAGE_HEIGHT_EXP'	=> 'Immettere l’altezza dell’immagine del modulo in pixel.',
	'MODULE_RESET'				=> 'Ripristina la configurazione del modulo',
	'MODULE_RESET_EXP'			=> 'Questo ripristinerà tutte le impostazioni ai valori predefiniti!<br>Per motivi tecnici, Font Awesome Icons dovrà essere nuovamente impostato manualmente dopo il ripristino!<br>Le icone possono essere selezionate da <a href="https://github.com/board3/Board3-Portal/wiki#empfohlene-fa-icons--recommended-fa-icons" target="_blank" rel="noopener noreferrer"><strong>elenco delle icone FA consigliate</strong>< /a>.',
	'MODULE_STATUS'				=> 'Abilita modulo',
	'MODULE_ADD_ONCE'			=> 'Questo modulo può essere aggiunto solo una volta.',
	'MODULE_IMAGE_ERROR'		=> 'Si è verificato un errore durante il controllo dell’immagine del modulo:',
	'UNKNOWN_MODULE_METHOD'		=> 'Impossibile risolvere il metodo del modulo %1$s.',

	// general
	'ACP_PORTAL_CONFIG_INFO'				=> 'Impostazioni generali',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Amministrazione Portale',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Grazie per aver scelto il portale Board3! Qui puoi gestire la tua pagina del portale. Le opzioni seguenti consentono di personalizzare le varie impostazioni generali.',
	'ACP_PORTAL_SHOW_ALL'					=> 'Mostra il portale su tutte le pagine',
	'ACP_PORTAL_SHOW_ALL_EXP'				=> 'Visualizza il portale su tutte le pagine',
	'PORTAL_ENABLE'							=> 'Abilita Portale',
	'PORTAL_ENABLE_EXP'						=> 'Attiva o disattiva l’intero portale',
	'PORTAL_LEFT_COLUMN'					=> 'Abilita la colonna di sinistra',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Seleziona no, se desideri disattivare la colonna di sinistra',
	'PORTAL_RIGHT_COLUMN'					=> 'Abilita la colonna di destra',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Seleziona no, se desideri disattivare la colonna di destra',
	'PORTAL_DISPLAY_JUMPBOX'				=> 'Mostra jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> 'Visualizza la jumpbox sul portale. La jumpbox verrà visualizzata solo se abilitata anche in Configurazione server/processi/Abilita visualizzazione jumpbox.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Impostazioni della larghezza della colonna sinistra e destra',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Larghezza della colonna di sinistra',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Cambia la larghezza della colonna di sinistra in pixel; il valore consigliato è 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Larghezza della colonna di destra',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Cambia la larghezza della colonna di destra in pixel; il valore consigliato è 180',
	'PORTAL_SHOW_ALL_SIDE'					=> 'Colonna da visualizzare su tutte le pagine',
	'PORTAL_SHOW_ALL_SIDE_EXP'				=> 'Scegli quale colonna deve essere mostrata su tutte le pagine.',
	'PORTAL_SHOW_ALL_LEFT'					=> 'Sinistra',
	'PORTAL_SHOW_ALL_RIGHT'					=> 'Destra',

	'LINK_ADDED'							=> 'Il collegamento è stato aggiunto con successo',
	'LINK_UPDATED'							=> 'Il collegamento è stato aggiornato con successo',

	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Aggiunta del set base, dei moduli',
	'PORTAL_BASIC_UNINSTALL'		=> 'Rimozione di moduli dal database',

	// Font Awesome
	'ACP_FA'				=> 'Stili Font Awesome',
	'ACP_FA_EXP'			=> 'Qui puoi definire quali stili devono utilizzare le icone Font Awesome.',
	'MODULE_FA'				=> 'Icona Font Awesome',
	'MODULE_FA_EXP'			=> 'Qui puoi selezionare un <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"><strong>Font Awesome</strong></a> icona. Questo verrà utilizzato quando lo stile selezionato utilizza le icone Font Awesome.',
	'MODULE_FA_SIZE'		=> 'dimensione icona Font Awesome',
	'MODULE_FA_SIZE_EXP'	=> 'Qui puoi modificare la dimensione dell’icona Font Awesome in pixel.',
));
