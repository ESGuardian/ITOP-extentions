<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'esguardian-security-mgmt/1.1.1',
	array(
		// Identification
		//
		'label' => 'Security Objects Configuration Management',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-tickets/2.2.0',
			'itop-config-mgmt/2.2.0',
			'itop-change-mgmt-itil/2.2.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.esguardian-security-mgmt.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
