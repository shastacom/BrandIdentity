<?php

/**
 * ProcessBrandIdentity.info.php
 *
 */

$info = array(

	// Your module's title
	'title' => 'Brand Identity',

	// A 1 sentence description of what your module does
	'summary' => 'A ProcessWire module for setting the brand name for a website.',

	// Module version number: use 1 for 0.0.1 or 100 for 1.0.0, and so on
	'version' => 1,

	// Name of person who created this module (change to your name)
	'author' => 'Shasta.com > modified from the ProcessHello module by Ryan Cramer',

	// Icon to accompany this module (optional), uses font-awesome icon names, minus the "fa-" part
	'icon' => 'thumbs-up',

	// URL to more info: change to your full modules.processwire.com URL (if available), or something else if you prefer
	'href' => 'http://modules.processwire.com/',

	// name of permission required of users to execute this Process (optional)
	'permission' => 'brandidentity',

	// permissions that you want automatically installed/uninstalled with this module (name => description)
	'permissions' => array(
		'brandidentity' => 'Run the Brand Identity module'
	),

	// page that you want created to execute this module
	'page' => array(
		'name' => 'brandidentity',
		'parent' => 'setup',
		'title' => 'Brand Identity'
	),

	// optional extra navigation that appears in admin
	// if you change this, you'll need to a Modules > Refresh to see changes
	'nav' => array(
		array(
			'url' => '',
			'label' => 'Brand Identity',
			'icon' => 'smile-o',
		)
	)

	// for more options that you may specify here, see the file: /wire/core/Process.php
	// and the file: /wire/core/Module.php

);
