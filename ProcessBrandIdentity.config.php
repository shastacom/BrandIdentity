<?php

/**
 * Configure the Brand Identity module
 *
 * This type of configuration method requires ProcessWire 2.5.5 or newer.
 * For backwards compatibility with older versions of PW, you'll want to
 * instead want to look into the getModuleConfigInputfields() method, which
 * is specified with the .module file. So we are assuming you only need to
 * support PW 2.5.5 or newer here.
 *
 * For more about configuration methods, see here:
 * http://processwire.com/blog/posts/new-module-configuration-options/
 *
 *
 */

class ProcessBrandIdentityConfig extends ModuleConfig
{
	public function __construct()
  {
		$this -> add( array
    (
			array
      (
				'name' => 'brand_name',
				'type' => 'text',
				'label' => $this->_('Brand Identity'),
				'description' => $this->_('Brand Name'),
				'required' => true,
				'value' => $this->_('Lorem Ipsum'),
			),
			array
      (
				'name' => 'brand_motto',
				'type' => 'text',
				'label' => $this->_('Brand Motto'),
				'required' => true,
				'value' => $this->_('Nulla At Accumsan Justo'),
			),
			array
      (
				'name' => 'brand_tagline',
				'type' => 'text',
				'label' => $this->_('Tagline'),
				'required' => true,
				'value' => $this->_('Maecenas facilisis eros ut risus tempor, sed suscipit leo efficitur.'),
			)
		));
	}
}
