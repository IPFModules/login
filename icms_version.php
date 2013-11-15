<?php
/**
 * Login version infomation
 *
 * This file holds the configuration information of this module
 *
 * @copyright	Copyright Simon Wilkinson (Madfish) 2013
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Simon Wilkinson (Madfish) <simon@isengard.biz>
 * @package		login
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

/**  General Information  */
$modversion = array(
	"name"						=> _MI_LOGIN_MD_NAME,
	"version"					=> 1.0,
	"description"				=> _MI_LOGIN_MD_DESC,
	"author"					=> "Simon Wilkinson (Madfish)",
	"credits"					=> "The secure QR login concept was developed by Steve Gibson at grc.com",
	"help"						=> "",
	"license"					=> "GNU General Public License (GPL)",
	"official"					=> 0,
	"dirname"					=> basename(dirname(__FILE__)),
	"modname"					=> "login",

/**  Images information  */
	"iconsmall"					=> "images/icon_small.png",
	"iconbig"					=> "images/icon_big.png",
	"image"						=> "images/icon_big.png", /* for backward compatibility */

/**  Development information */
	"status_version"			=> "1.0",
	"status"					=> "Beta",
	"date"						=> "Unreleased",
	"author_word"				=> "",
	"warning"					=> _CO_ICMS_WARNING_BETA,

/** Contributors */
	"developer_website_url"		=> "http://www.isengard.biz",
	"developer_website_name"	=> "Isengard.biz",
	"developer_email"			=> "simon@isengard.biz",

/** Administrative information */
	"hasAdmin"					=> 1,
	"adminindex"				=> "admin/index.php",
	"adminmenu"					=> "admin/menu.php",

/** Install and update informations */
	"onInstall"					=> "include/onupdate.inc.php",
	"onUpdate"					=> "include/onupdate.inc.php",

/** Search information */
	"hasSearch"					=> 0,

/** Menu information */
	"hasMain"					=> 0,

/** Comments information */
	"hasComments"				=> 0);

/** other possible types: testers, translators, documenters and other */
$modversion['people']['developers'][] = "Simon Wilkinson (Madfish)";

/** Manual */
$modversion['manual']['wiki'][] = "<a href='http://wiki.impresscms.org/index.php?title=Login' target='_blank'>English</a>";

/** Database information */
$modversion['object_items'][1] = 'key';

$modversion["tables"] = icms_getTablesArray($modversion['dirname'], $modversion['object_items']);

/** Templates information */
$modversion['templates'] = array(
	array("file" => "login_admin_key.html", "description" => "Key admin index"),
	array("file" => "login_key.html", "description" => "Key index"),
	array("file" => "login_requirements.html", "description" => "SQRL block"),
	array('file' => 'login_header.html', 'description' => 'Module header'),
	array('file' => 'login_footer.html', 'description' => 'Module footer'));

/** Blocks information */
$modversion['blocks'][1] = array(
	'file' => 'sqrl_block.php',
	'name' => _MI_LOGIN_SQRL_BLOCK,
	'description' => _MI_LOGIN_SQRL_BLOCK_DSC,
	'show_func' => 'sqrl_show',
	'edit_func' => 'sqrl_edit',
	'options' => '',
	'template' => 'sqrl.html');

/** Preferences information */

