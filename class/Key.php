<?php
/**
 * Class representing Login key objects
 *
 * @copyright	Copyright Simon Wilkinson (Madfish) 2013
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Simon Wilkinson (Madfish) <simon@isengard.biz>
 * @package		login
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

class mod_login_Key extends icms_ipf_Object {
	/**
	 * Constructor
	 *
	 * @param mod_login_Key $handler Object handler
	 */
	public function __construct(&$handler) {
		parent::__construct($handler);

		$this->quickInitVar("key_id", XOBJ_DTYPE_INT, TRUE);
		$this->quickInitVar("uid", XOBJ_DTYPE_INT, TRUE);
		$this->quickInitVar("publickey", XOBJ_DTYPE_TXTAREA, TRUE);
		$this->quickInitVar("keystatus", XOBJ_DTYPE_INT, TRUE, FALSE, FALSE, 1);
		$this->setControl("uid", "user");
		$this->setControl('keystatus', 'yesno');
	}

	/**
	 * Overriding the icms_ipf_Object::getVar method to assign a custom method on some
	 * specific fields to handle the value before returning it
	 *
	 * @param str $key key of the field
	 * @param str $format format that is requested
	 * @return mixed value of the field that is requested
	 */
	public function getVar($key, $format = "s") {
		if ($format == "s" && in_array($key, array())) {
			return call_user_func(array ($this,	$key));
		}
		return parent::getVar($key, $format);
	}
}