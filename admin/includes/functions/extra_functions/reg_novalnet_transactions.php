<?php
/**
 * Novalnet payment module
 *
 * This file is used for register of Novalnet orders
 *
 * @author     Novalnet AG
 * @copyright  Copyright (c) Novalnet
 * @license    https://www.novalnet.de/payment-plugins/kostenlos/lizenz
 * @link       https://www.novalnet.de
 *
 * Script : reg_novalnet_transactions.php
 */


if (!defined('IS_ADMIN_FLAG')) {
   die('Illegal Access');
 }

if (function_exists('zen_register_admin_page')) {
   if (!zen_page_key_exists('customersNovalnetTransactions')) {
        zen_register_admin_page('customersNovalnetTransactions', 'BOX_CUSTOMERS_NOVALNET_TRANSACTIONS', 'FILENAME_NOVALNET_TRANSACTIONS','' , 'customers', 'Y', 400);
      }
}
