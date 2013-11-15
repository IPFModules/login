<?php
/**
 * Common file of the module included on all pages of the module
 *
 * @copyright	Copyright Simon Wilkinson (Madfish) 2013
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Simon Wilkinson (Madfish) <simon@isengard.biz>
 * @package		login
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

if (!defined("LOGIN_DIRNAME")) define("LOGIN_DIRNAME", $modversion["dirname"] = basename(dirname(dirname(__FILE__))));
if (!defined("LOGIN_URL")) define("LOGIN_URL", ICMS_URL."/modules/".LOGIN_DIRNAME."/");
if (!defined("LOGIN_ROOT_PATH")) define("LOGIN_ROOT_PATH", ICMS_ROOT_PATH."/modules/".LOGIN_DIRNAME."/");
if (!defined("LOGIN_IMAGES_URL")) define("LOGIN_IMAGES_URL", LOGIN_URL."images/");
if (!defined("LOGIN_ADMIN_URL")) define("LOGIN_ADMIN_URL", LOGIN_URL."admin/");

// Include the common language file of the module
icms_loadLanguageFile("login", "common");