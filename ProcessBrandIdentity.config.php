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
				'name' => 'motto',
				'type' => 'text',
				'label' => $this->_('Motto'),
				'required' => true,
				'value' => $this->_('Nulla At Accumsan Justo'),
			),
			array
      (
				'name' => 'tagline',
				'type' => 'text',
				'label' => $this->_('Tagline'),
				'required' => true,
				'value' => $this->_('Maecenas facilisis eros ut risus tempor, sed suscipit leo efficitur.'),
			),
			array
      (
				'name' => 'mission',
				'type' => 'text',
				'label' => $this->_('Mission Statement'),
				'required' => true,
				'value' => $this->_('Dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est.'),
			),
			array
      (
				'name' => 'brief_description',
				'type' => 'text',
				'label' => $this->_('Brief Description'),
				'required' => true,
				'value' => $this->_('Dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est.'),
			),
			array
      (
				'name' => 'email',
				'type' => 'text',
				'label' => $this->_('Email'),
				'required' => true,
				'value' => $this->_('Lorem@Ipsum.com'),
			),
			array
      (
				'name' => 'phone',
				'type' => 'text',
				'label' => $this->_('Phone'),
				'required' => true,
				'value' => $this->_('+1 234 567 8901'),
			),
			array
      (
				'name' => 'address',
				'type' => 'text',
				'label' => $this->_('Address'),
				'required' => true,
				'value' => $this->_('1234 Main St'),
			),
			array
      (
				'name' => 'city',
				'type' => 'text',
				'label' => $this->_('City'),
				'required' => true,
				'value' => $this->_('Nowhere'),
			),
			array
      (
				'name' => 'state',
				'type' => 'text',
				'label' => $this->_('State'),
				'required' => true,
				'value' => $this->_('NY'),
			),
			array
      (
				'name' => 'zip',
				'type' => 'text',
				'label' => $this->_('Zip'),
				'required' => true,
				'value' => $this->_('12345'),
			),
			array
      (
				'name' => 'latitude',
				'type' => 'text',
				'label' => $this->_('Latitude'),
				'required' => true,
				'value' => $this->_('40.5730834'),
			),
			array
      (
				'name' => 'longitude',
				'type' => 'text',
				'label' => $this->_('Longitude'),
				'required' => true,
				'value' => $this->_('-122.4018829'),
			),
			array
      (
				'name' => 'facebook',
				'type' => 'text',
				'label' => $this->_('Facebook'),
				'required' => true,
				'value' => $this->_('https://www.facebook.com/'),
			),
			array
      (
				'name' => 'twitter',
				'type' => 'text',
				'label' => $this->_('Twitter'),
				'required' => true,
				'value' => $this->_('https://twitter.com/'),
			),
			array
      (
				'name' => 'instagram',
				'type' => 'text',
				'label' => $this->_('Instagram'),
				'required' => true,
				'value' => $this->_('https://www.instagram.com/'),
			),
			array
      (
				'name' => 'linkedin',
				'type' => 'text',
				'label' => $this->_('Linkedin'),
				'required' => true,
				'value' => $this->_('https://www.linkedin.com/in/'),
			)
		));
	}
}
