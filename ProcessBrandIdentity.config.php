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
			),
			array
      (
				'name' => 'brand_mission',
				'type' => 'text',
				'label' => $this->_('Mission Statement'),
				'required' => true,
				'value' => $this->_('Dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est.'),
			),
			array
      (
				'name' => 'company_email',
				'type' => 'text',
				'label' => $this->_('Company Email'),
				'required' => true,
				'value' => $this->_('Lorem@Ipsum.com'),
			),
			array
      (
				'name' => 'company_phone',
				'type' => 'text',
				'label' => $this->_('Company Phone'),
				'required' => true,
				'value' => $this->_('+1 234 567 8901'),
			),
			array
      (
				'name' => 'company_address',
				'type' => 'text',
				'label' => $this->_('Company Address'),
				'required' => true,
				'value' => $this->_('1234 Main St'),
			),
			array
      (
				'name' => 'company_city',
				'type' => 'text',
				'label' => $this->_('Company City'),
				'required' => true,
				'value' => $this->_('Nowhere'),
			),
			array
      (
				'name' => 'company_state',
				'type' => 'text',
				'label' => $this->_('Company State'),
				'required' => true,
				'value' => $this->_('NY'),
			),
			array
      (
				'name' => 'company_zip',
				'type' => 'text',
				'label' => $this->_('Company Zip'),
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
			)
		));
	}
}
