<?php
/**
*
* @package Board3 Portal v2.3 - Links
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
	'PORTAL_LINKS'		=> 'Collegamenti',
	'LINKS_NO_LINKS'	=> 'Nessun collegamento',

	// ACP
	'ACP_PORTAL_LINKS'				=> 'Impostazioni Collegamenti',
	'ACP_PORTAL_LINKS_EXP'			=> 'Personalizza i collegamenti elencati nel blocco dei collegamenti',
	'ACP_PORTAL_LINK_TITLE'			=> 'Titolo',
	'ACP_PORTAL_LINK_TYPE'			=> 'Tipo di collegamento',
	'ACP_PORTAL_LINK_TYPE_EXP'		=> 'Se hai un link a una pagina del tuo forum, scegli "Link interno" per evitare disconnessioni indesiderate.',
	'ACP_PORTAL_LINK_INT'			=> 'Collegamento interno',
	'ACP_PORTAL_LINK_EXT'			=> 'Collegamento esterno',
	'ACP_PORTAL_LINK_ADD'			=> 'Aggiungi nuovo link',
	'ACP_PORTAL_LINK_URL'			=> 'URL Link',
	'ACP_PORTAL_LINK_URL_EXP'		=> 'Link esterni:<br />Tutti i link devono essere inseriti con un http://<br /><br />Link interni:<br />Inserisci solo il file php come URL del link, ad esempio index.php?style=4 .',
	'ACP_PORTAL_LINK_PERMISSION'	=> 'Permessi Link',
	'ACP_PORTAL_LINK_PERMISSION_EXP'=> 'Selezionare i gruppi che devono essere autorizzati a visualizzare il collegamento. Se desideri che tutti gli utenti possano visualizzare il collegamento, non selezionare nulla.<br />Seleziona/deseleziona più gruppi tenendo premuto <samp>CTRL</samp> e facendo clic.',
	'ACP_PORTAL_LINKS_NEW_WINDOW'	=> 'Apri collegamenti esterni in una nuova finestra/scheda',

	// Errors
	'NO_LINK_TITLE'					=> 'Devi inserire un titolo per questo link.',
	'NO_LINK_URL'					=> 'Devi inserire un URL per questo link.',
));
