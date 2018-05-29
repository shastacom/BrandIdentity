<?php

/**
 * Brand Identity Module
 *
 * A starting point skeleton from which to build your own Process module.
 * Process modules are used primarily for building admin applications and tools.
 * This module also creates a page in the ProcessWire admin to run itself from.
 *
 * Copyright by Shasta.com
 *
 * ProcessWire 2.x
 * Copyright (C) 2014 by Ryan Cramer
 * Licensed under GNU/GPL v2, see LICENSE.TXT
 *
 * http://processwire.com
 *
 */

class ProcessBrandIdentity extends Process {

	/**
	 * This is an optional initialization function called before any execute functions.
	 *
	 * If you don't need to do any initialization common to every execution of this module,
	 * you can simply remove this init() method.
	 *
	 */
	public function init() {
		parent::init(); // always remember to call the parent init
	}

	/**
	 * This function is executed when a page with your Process assigned is accessed.
 	 *
	 * This can be seen as your main or index function. You'll probably want to replace
	 * everything in this function.
	 *
	 */
	public function ___execute() {

		// generate some navigation

		$out = 	"
			<h2>$this->brand_name</h2>
			<dl class='nav'>
				<dt>Set the brand name in the module's setting.</dt>
				<dd>Modules > Site > Brand Identity > Settings</dd>
				<dt>Set guest permission to run the module.</dt>
				<dd>Access > Roles > guest > Permissions > brandidentity</dd>
			</dl>
			";

		return $out;
	}

	/**
	 * Called only when your module is installed
	 *
	 * If you don't need anything here, you can simply remove this method.
	 *
	 */
	public function ___install() {
		parent::___install(); // always remember to call parent method
	}

	/**
	 * Called only when your module is uninstalled
	 *
	 * This should return the site to the same state it was in before the module was installed.
	 *
	 * If you don't need anything here, you can simply remove this method.
	 *
	 */
	public function ___uninstall() {
		parent::___uninstall(); // always remember to call parent method
	}

}
