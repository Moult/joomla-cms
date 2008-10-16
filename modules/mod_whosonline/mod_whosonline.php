<?php
/**
* @version		$Id$
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the whosonline functions only once
require_once dirname(__FILE__).DS.'helper.php';

$showmode = $params->get( 'showmode', 0 );

if ($showmode == 0 || $showmode == 2) {
	$count 	= modWhosonlineHelper::getOnlineCount();
}

if ($showmode > 0) {
	$names 	= modWhosonlineHelper::getOnlineMemberNames();
}

require(JModuleHelper::getLayoutPath('mod_whosonline'));
