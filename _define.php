<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of translater, a plugin for Dotclear 2.
# 
# Copyright (c) 2009-2016 Jean-Christian Denis and contributors
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')){return;}

$this->registerModule(
	/* Name */			"translater",
	/* Description*/		"Translate your Dotclear plugins and themes",
	/* Author */		"JC Denis",
	/* Version */		'2016.08.20',
	/* Properties */
	array(
		'permissions' => 'usage,contentadmin,admin',
		'type' => 'plugin',
		'dc_min' => '2.6',
		'support' => 'http://forum.dotclear.org/viewtopic.php?id=39220',
		'details' => 'http://plugins.dotaddict.org/dc2/details/translater'
		)
);