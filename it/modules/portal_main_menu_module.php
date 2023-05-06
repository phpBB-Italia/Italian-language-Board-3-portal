<?php
/**
*
* @package Board3 Portal v2.3 - Main Menu
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
	'M_MENU' 	=> 'Menu',
	'M_CONTENT'	=> 'Contenuti',
	'M_ACP'		=> 'PCA',
	'M_HELP'	=> 'Help',
	'M_BBCODE'	=> 'BBCode FAQ',
	'M_TERMS'	=> 'Condizioni d’uso',
	'M_PRV'		=> 'Trattamento dati personali',
	'M_SEARCH'	=> 'Cerca',
	'MENU_NO_LINKS'	=> 'Nessun link',

	// ACP
	'ACP_PORTAL_MENU'				=> 'Impostazioni Menù',
	'ACP_PORTAL_MENU_LINK_SETTINGS'	=> 'Link Menu',
	'ACP_PORTAL_MENU_EXP'			=> 'Gestisci il tuo menu principale',
	'ACP_PORTAL_MENU_MANAGE'		=> 'Gestisci menù',
	'ACP_PORTAL_MENU_MANAGE_EXP'	=> 'Puoi gestire i link del tuo menu principale qui.',
	'ACP_PORTAL_MENU_CAT'			=> 'Categoria',
	'ACP_PORTAL_MENU_IS_CAT'		=> 'Puoi gestire i link del tuo menu principale qui.',
	'ACP_PORTAL_MENU_INT'			=> 'Link interni',
	'ACP_PORTAL_MENU_EXT'			=> 'Link esterni',
	'ACP_PORTAL_MENU_TITLE'			=> 'Title',
	'ACP_PORTAL_MENU_URL'			=> 'Link URL',
	'ACP_PORTAL_MENU_ADD'			=> 'Aggiungi nuovo link',
	'ACP_PORTAL_MENU_TYPE'			=> 'Tipo di Link',
	'ACP_PORTAL_MENU_TYPE_EXP'		=> 'Se hai un link a una pagina della tua bacheca, scegli "Link interno" per evitare disconnessioni indesiderate.',
	'ACP_PORTAL_MENU_CREATE_CAT'	=> 'Devi prima creare una categoria.',
	'ACP_PORTAL_MENU_URL_EXP'		=> 'Link esterni:<br />Tutti i link devono essere inseriti con un http://<br /><br />Link interni:<br />Inserisci solo il file php come URL del link, ad esempio index.php?style=4 .',
	'ACP_PORTAL_MENU_PERMISSION'	=> 'Autorizzazioni Link',
	'ACP_PORTAL_MENU_PERMISSION_EXP'=> 'Selezionare i gruppi che devono essere autorizzati a visualizzare i link. Se desideri che tutti gli utenti possano visualizzare il collegamento, non selezionare nulla.<br />Seleziona/deseleziona più gruppi tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'ACP_PORTAL_MENU_EXT_NEW_WINDOW'=> 'Apri collegamenti esterni in una nuova finestra',

	// Errors
	'NO_LINK_TITLE'					=> 'Devi inserire un titolo per questo link.',
	'NO_LINK_URL'					=> 'Devi inserire un URL di collegamento.',
));
