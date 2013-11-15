<?php
/**
 * English language constants commonly used in the module
 *
 * @copyright	Copyright Simon Wilkinson (Madfish) 2013
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Simon Wilkinson (Madfish) <simon@isengard.biz>
 * @package		login
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// key
define("_CO_LOGIN_KEY_UID", "User ID");
define("_CO_LOGIN_KEY_UID_DSC", "The account to which this key belongs.");
define("_CO_LOGIN_KEY_PUBLICKEY", "Public key");
define("_CO_LOGIN_KEY_PUBLICKEY_DSC", "The public key of this user, which serves as their ID.");
define("_CO_LOGIN_KEY_KEYSTATUS", "Key status");
define("_CO_LOGIN_KEY_KEYSTATUS_DSC", "Enable / disable (revoke) a key. If a user reports reports a compromised key you should revoke it. Revocation is permanent, the key cannot be used again.");
