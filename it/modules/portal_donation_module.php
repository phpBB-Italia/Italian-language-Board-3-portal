<?php
/**
*
* @package Board3 Portal v2.3 - Donation
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
	'DONATION' 		=> 'Donazioni PayPal',
	'DONATION_TEXT'	=> 'è un gruppo che fornisce servizi senza scopo di lucro. Le tue donazioni sono gradite, serviranno per coprire il costo del nostro server, nome di dominio, ecc.',
	'PAY_MSG'       => 'Si prega di utilizzare un punto decimale (non una virgola) come separatore, ad es. 3.50',
	'PAY_ITEM'		=> 'Donare!', // paypal item

	'AUD'						=> 'Dollari Australiani (AUD)',
	'CAD'						=> 'Dollari Canadesi (CAD)',
	'CZK'						=> 'Corona Ceca (CZK)',
	'DKK'						=> 'Corona Danese (DKK)',
	'HKD'						=> 'Dollari di Hong Kong (HKD)',
	'HUF'						=> 'Fiorino Ungherese (HUF)',
	'NZD'						=> 'Dollari Neozelandesi (NZD)',
	'NOK'						=> 'Corona Norvegese (NOK)',
	'PLN'						=> 'Zloty Polacco (PLN)',
	'GBP'						=> 'Sterline Britanniche (GBP)',
	'SGD'						=> 'Dollari di Singapore (SGD)',
	'SEK'						=> 'Corona Svedese (SEK)',
	'CHF'						=> 'Franchi Svizzeri (CHF)',
	'JPY'						=> 'Yen Giapponese (JPY)',
	'USD'						=> 'Dollari USA (USD)',
	'EUR'						=> 'Euro (EUR)',
	'MXN'						=> 'Pesos Messicani (MXN)',
	'ILS'						=> 'Nuovi Sicli Israeliani (ILS)',

	// ACP
	'ACP_PORTAL_PAYPAL_SETTINGS'			=> 'Impostazioni Paypal',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXP'		=> 'Qui puoi personalizzare il blocco Paypal.',
	'PORTAL_PAY_ACC'						=> 'Conto Paypal da utilizzare',
	'PORTAL_PAY_ACC_EXP'					=> 'Inserisci il tuo indirizzo e-mail Paypal es. xxx@xxx.com',
	'PORTAL_PAY_CUSTOM'						=> 'Aggiungi il nome utente alla donazione Paypal',
	'PORTAL_PAY_DEFAULT'					=> 'Valuta predefinita',
	'PORTAL_PAY_DEFAULT_EXP'				=> 'Valuta che verrà selezionata per impostazione predefinita nell’elenco a discesa delle valute.'
));
