<?php
/**
* This script is used for German language content
*
* @author Novalnet AG
* @copyright Copyright (c) Novalnet
* @license https://www.novalnet.de/payment-plugins/kostenlos/lizenz
* @link https://www.novalnet.de
*
* This free contribution made by request.
*
* If you have found this script useful a small
* recommendation as well as a comment on merchant
*
* Script : novalnet_postfinance_card.php
*/
include_once(dirname(__FILE__).'/novalnet.php');
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_TEXT_TITLE', 'PostFinance Card');
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_TEXT_DESCRIPTION', '<br> Sie werden zu PostFinance weitergeleitet. Um eine erfolgreiche Zahlung zu gewährleisten, darf die Seite nicht geschlossen oder neu geladen werden, bis die Bezahlung abgeschlossen ist<br/>');
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_PUBLIC_TITLE', 'PostFinance Card ');
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_LOGO', (defined('MODULE_PAYMENT_NOVALNET_PAYMENT_LOGO_DISPLAY') && MODULE_PAYMENT_NOVALNET_PAYMENT_LOGO_DISPLAY == 'True') ? zen_image(DIR_WS_IMAGES . 'icons/novalnet/novalnet_postfinance_card.png', 'PostFinance Card') : '');

define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_STATUS_TITLE', MODULE_PAYMENT_NOVALNET_STATUS_TITLE);
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_STATUS_DESC', MODULE_PAYMENT_NOVALNET_STATUS_DESC);

define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_TEST_MODE_TITLE', MODULE_PAYMENT_NOVALNET_TEST_MODE_TITLE);
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_TEST_MODE_DESC', MODULE_PAYMENT_NOVALNET_TEST_MODE_DESC);

define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_CUSTOMER_INFO_TITLE', MODULE_PAYMENT_NOVALNET_CUSTOMER_INFO_TITLE);
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_CUSTOMER_INFO_DESC', MODULE_PAYMENT_NOVALNET_CUSTOMER_INFO_DESC);

define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_SORT_ORDER_TITLE', MODULE_PAYMENT_NOVALNET_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_SORT_ORDER_DESC', MODULE_PAYMENT_NOVALNET_SORT_ORDER_DESC);

define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_ORDER_STATUS_ID_TITLE', MODULE_PAYMENT_NOVALNET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_ORDER_STATUS_ID_DESC',MODULE_PAYMENT_NOVALNET_ORDER_STATUS_DESC);

define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_ZONE_TITLE', MODULE_PAYMENT_NOVALNET_PAYMENT_ZONE_TITLE);
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_ZONE_DESC', MODULE_PAYMENT_NOVALNET_PAYMENT_ZONE_DESC);

define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_PENDING_ORDER_STATUS_ID_TITLE', 'Status für Bestellungen mit ausstehender Zahlung');
define('MODULE_PAYMENT_NOVALNET_POSTFINANCE_CARD_PENDING_ORDER_STATUS_ID_DESC', 'Wählen Sie, welcher Status für Bestellungen mit ausstehender Zahlung verwendet wird.');

?>
