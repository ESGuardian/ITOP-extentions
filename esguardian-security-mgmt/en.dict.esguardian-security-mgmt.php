<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
    'Class:Ticket/Attribute:securitycis_list' => 'SCIs',
	'Class:Ticket/Attribute:securitycis_list+' => 'Security Configuration Items',
	'Class:Document/Attribute:scis_list' => 'SCIs',
	'Class:Document/Attribute:scis_list+' => 'Security Configuration Items',
));

//
// Class: SecurityCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SecurityCI' => 'SCI',
	'Class:SecurityCI+' => 'Security Configuration Item',
	'Class:SecurityCI/Attribute:name' => 'Name',
	'Class:SecurityCI/Attribute:name+' => '',
	'Class:SecurityCI/Attribute:description' => 'Description',
	'Class:SecurityCI/Attribute:description+' => '',
	'Class:SecurityCI/Attribute:org_id' => 'Organization',
	'Class:SecurityCI/Attribute:org_id+' => '',
	'Class:SecurityCI/Attribute:org_name' => 'Name',
	'Class:SecurityCI/Attribute:org_name+' => 'Organization Name',
	'Class:SecurityCI/Attribute:managers_list' => 'Managers',
	'Class:SecurityCI/Attribute:managers_list+' => 'Managers of this SCI',
	'Class:SecurityCI/Attribute:documents_list' => 'Documents',
	'Class:SecurityCI/Attribute:documents_list+' => '',
	'Class:SecurityCI/Attribute:tickets_list' => 'Tickets',
	'Class:SecurityCI/Attribute:tickets_list+' => 'Tickets related to this SCI',
	'Class:SecurityCI/Attribute:finalclass' => 'SCI Class',
	'Class:SecurityCI/Attribute:finalclass+' => '',
	'Class:SecurityCI/Tab:OpenedTickets' => 'Открытые задачи',
));

//
// Class: lnkPersonAsManagerOfSecurityCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkPersonAsManagerOfSecurityCI' => 'Link:Person as Manager/SCI',
	'Class:lnkPersonAsManagerOfSecurityCI+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_id' => 'SCI',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_id+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_name' => 'SCI',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_name+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_id' => 'Person',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_id+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_name' => 'Surname',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_name+' => '',
));

//
// Class: lnkDocumentToSecurityCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToSecurityCI' => 'Link:Document/SCI',
	'Class:lnkDocumentToSecurityCI+' => '',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_id' => 'SCI',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_id+' => '',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_name' => 'Name',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_name+' => 'SCI name',
	'Class:lnkDocumentToSecurityCI/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToSecurityCI/Attribute:document_id+' => '',
	'Class:lnkDocumentToSecurityCI/Attribute:document_name' => 'Title',
	'Class:lnkDocumentToSecurityCI/Attribute:document_name+' => 'Document Title',
));

//
// Class: lnkSecurityCIToTicket
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSecurityCIToTicket' => 'Link:SCI/Ticket',
	'Class:lnkSecurityCIToTicket+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_id' => 'Ticket',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_id+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_ref' => 'Number',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_title' => 'Title',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_title+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_id' => 'SCI',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_id+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_name' => 'Name',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_name+' => 'SCI Name',
	'Class:lnkSecurityCIToTicket/Attribute:impact' => 'Impact',
	'Class:lnkSecurityCIToTicket/Attribute:impact+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code' => 'Impact Code',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:computed' => 'computed',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:computed+' => 'computed',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:manual' => 'manual',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:manual+' => 'manual',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:not_impacted' => 'not impacted',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:not_impacted+' => 'not impacted',
));


//
// Application Menu
//

Dict::Add('EN US', 'English', 'English', array(
	'Menu:SecurityConfigManagement' =>'Security configuration management',
	'Menu:SecurityConfigManagement+' =>'',
	'Menu:SearchSecurityCIs' => 'Search SCIs',
	'Menu:SearchSecurityCIs+' => 'Search Security Configuration Items',
));
?>
