<?php
/**
 * Footer page included at the end of each page on user side of the mdoule
 *
 * @copyright	Copyright Simon Wilkinson (Madfish) 2013
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Simon Wilkinson (Madfish) <simon@isengard.biz>
 * @package		login
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

$icmsTpl->assign("login_adminpage", "<a href='" . ICMS_URL . "/modules/" . icms::$module->getVar("dirname") . "/admin/index.php'>" ._MD_LOGIN_ADMIN_PAGE . "</a>");
$icmsTpl->assign("login_is_admin", icms_userIsAdmin(LOGIN_DIRNAME));
$icmsTpl->assign('login_url', LOGIN_URL);
$icmsTpl->assign('login_images_url', LOGIN_IMAGES_URL);

$xoTheme->addStylesheet(LOGIN_URL . 'module' . ((defined("_ADM_USE_RTL") && _ADM_USE_RTL) ? '_rtl' : '') . '.css');

include_once ICMS_ROOT_PATH . '/footer.php';