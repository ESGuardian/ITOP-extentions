<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	'Class:ApplicationSolution/Attribute:roles_list' => 'Roles',
	'Class:BusinessProcess/Attribute:roles_list' => 'Roles',
	'Class:Person/Attribute:roles_list' => 'Roles',
	'Class:Ticket/Attribute:securityroles_list' => 'affected roles',
    'Class:Person/Tab:ConflictingRoles' => 'Conflicts',
    'Class:Ticket/Attribute:securitycis_list' => 'SCIs',
	'Class:Ticket/Attribute:securitycis_list+' => 'Security Configuration Items',
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
// Class: SecurityRoleTemplate
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SecurityRoleTemplate' => 'Security Role Template',
	'Class:SecurityRoleTemplate+' => 'Set of Security Roles which can be assigned to person',
	'Class:SecurityRoleTemplate/Attribute:roles_list' => 'Roles',
	'Class:SecurityRoleTemplate/Attribute:roles_list+' => '',
	'Class:SecurityRoleTemplate/Attribute:applyto_list' => 'Assigned to ...',
	'Class:SecurityRoleTemplate/Attribute:applyto_list+' => '',
	'Class:SecurityRoleTemplate/Tab:ConflictingRoles' => 'Conflicts',
    'Class:SecurityRoleTemplate/Tab:ConflictingRoles+' => '',
));


//
// Class: SecurityRole
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SecurityRole' => 'Security Role',
	'Class:SecurityRole+' => '',
	'Class:SecurityRole/Attribute:name' => 'Name',
	'Class:SecurityRole/Attribute:name+' => '',
	'Class:SecurityRole/Attribute:description' => 'Description',
	'Class:SecurityRole/Attribute:description+' => '',
	'Class:SecurityRole/Attribute:org_id' => 'Organization',
	'Class:SecurityRole/Attribute:org_id+' => '',
	'Class:SecurityRole/Attribute:org_name' => 'Organization Name',
	'Class:SecurityRole/Attribute:org_name+' => 'Common name',
	'Class:SecurityRole/Attribute:occupants_list' => 'Occupants',
	'Class:SecurityRole/Attribute:occupants_list+' => '',
	'Class:SecurityRole/Attribute:documents_list' => 'Documents',
	'Class:SecurityRole/Attribute:documents_list+' => '',
	'Class:SecurityRole/Attribute:conflictingroles_list' => 'Conflicting Roles',
	'Class:SecurityRole/Attribute:conflictingroles_list+' => '',
	'Class:SecurityRole/Attribute:tickets_list' => 'Tickets',
	'Class:SecurityRole/Attribute:tickets_list+' => '',
	'Class:SecurityRole/Attribute:finalclass' => 'Role Type',
	'Class:SecurityRole/Attribute:finalclass+' => '',
));

//
// Class: ApplicationRole
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ApplicationRole' => 'Application Role',
	'Class:ApplicationRole+' => '',
	'Class:ApplicationRole/Attribute:applicationsolution_id' => 'Application Solution',
	'Class:ApplicationRole/Attribute:applicationsolution_id+' => '',
	'Class:ApplicationRole/Attribute:applicationsolution_name' => 'Application Solution Name',
	'Class:ApplicationRole/Attribute:applicationsolution_name+' => '',
));

//
// Class: BusinessRole
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:BusinessRole' => 'Business Role',
	'Class:BusinessRole+' => '',
	'Class:BusinessRole/Attribute:businessprocess_id' => 'Business process',
	'Class:BusinessRole/Attribute:businessprocess_id+' => '',
	'Class:BusinessRole/Attribute:businessprocess_name' => 'Business process Name',
	'Class:BusinessRole/Attribute:businessprocess_name+' => '',
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
// Class: lnkSecurityRoleTemplateToSecurityRole
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSecurityRoleTemplateToSecurityRole' => 'Link:Security Role Template/Security Role',
	'Class:lnkSecurityRoleTemplateToSecurityRole+' => '',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_id' => 'Security Role Template',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_id+' => '',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_name' => 'Name',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_name+' => 'Security Role Template Name',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_id' => 'Security Role',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_id+' => '',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_name' => 'Name',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_name+' => 'Security Role Name',
));

//
// Class: lnkApplySRTemplateToPerson
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkApplySRTemplateToPerson' => 'Link:Security Role Template/Person',
	'Class:lnkApplySRTemplateToPerson+' => '',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_id' => 'Security Role Template',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_id+' => '',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_name' => 'Name',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_name+' => 'Security Role Template Name',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_id' => 'Person',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_id+' => '',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_name' => 'Surname',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_name+' => '',
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
// Class: lnkPersonToSecurityRole
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkPersonToSecurityRole' => 'Person/Security Role',
	'Class:lnkPersonToSecurityRole+' => '',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_id' => 'Security Role',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_id+' => '',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_name' => 'Security Role Name',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_name+' => '',
	'Class:lnkPersonToSecurityRole/Attribute:person_id' => 'Person',
	'Class:lnkPersonToSecurityRole/Attribute:person_id+' => '',
	'Class:lnkPersonToSecurityRole/Attribute:person_name' => 'Person Name',
	'Class:lnkPersonToSecurityRole/Attribute:person_name+' => '',
));

//
// Class: lnkSecurityRoleBidirectional
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSecurityRoleBidirectional' => 'Security Role/Security Role',
	'Class:lnkSecurityRoleBidirectional+' => '',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_id' => 'Left Security Role',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_id+' => '',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_name' => 'Left Security Role Name',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_name+' => '',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_id' => 'Right Security Role',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_id+' => '',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_name' => 'Right Security Role Name',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_name+' => '',
));

//
// Class: lnkDocumentToSecurityRole
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToSecurityRole' => 'Document/Security Role',
	'Class:lnkDocumentToSecurityRole+' => '',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_id' => 'Security Role',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_id+' => '',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_name' => 'Security Role Name',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_name+' => '',
	'Class:lnkDocumentToSecurityRole/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToSecurityRole/Attribute:document_id+' => '',
	'Class:lnkDocumentToSecurityRole/Attribute:document_name' => 'Document Name',
	'Class:lnkDocumentToSecurityRole/Attribute:document_name+' => '',
));

//
// Class: lnkSecurityRoleToTicket
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSecurityRoleToTicket' => 'Security Role/Ticket',
	'Class:lnkSecurityRoleToTicket+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_id' => 'Ticket',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_id+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_ref' => 'Ref',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_title' => 'Title',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_title+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_id' => 'Security Role id',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_id+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_name' => 'Security Role Name',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_name+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:impact' => 'Impact',
	'Class:lnkSecurityRoleToTicket/Attribute:impact+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code' => 'Impact Code',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:computed' => 'computed',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:computed+' => 'computed',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:manual' => 'manual',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:manual+' => 'manual',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:not_impacted' => 'not impacted',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:not_impacted+' => 'not impacted',
));

//
// Application Menu
//

Dict::Add('EN US', 'English', 'English', array(
	'Menu:NewSecurityCI' => 'Create SCI',
	'Menu:NewSecurityCI+' => 'Create Security Configuration Item',
	'Menu:SearchSecurityCIs' => 'Search SCIs',
	'Menu:SearchSecurityCIs+' => 'Search Security Configuration Items',
));
?>
