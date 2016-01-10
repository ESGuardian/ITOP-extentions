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
	'Class:Document/Attribute:scis_list' => 'SCIs',
	'Class:Document/Attribute:scis_list+' => 'Security Configuration Items',
	'Class:Organization/Attribute:scli_list' => 'IS Rules',
	'Class:Organization/Attribute:scli_list+' => 'Information Security Rules List',
	'Class:Group/Attribute:scli_list' => 'IS Rules',
	'Class:Group/Attribute:scli_list+' => 'Information Security Rules List',
	'Class:FunctionalCI/Tab:CheckListItems' => 'Checks',
	'Class:Organization/Tab:CheckListItems' => 'Checks',
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
// Class: SecurityCheckListItem
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SecurityCheckListItem' => 'Rule',
	'Class:SecurityCheckListItem+' => 'CheckList Item',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_id' => 'CheckList',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_id+' => '',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_name' => 'CheckList',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_name+' => '',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_id' => 'Equivalence',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_id+' => 'Set equivalence relationship between rules of different checklists',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_name' => 'Equivalence',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_name+' => 'Set equivalence relationship between rules of different checklists',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_description' => 'Equivalence description',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_description+' => '',
	'Class:SecurityCheckListItem/Attribute:scli_instance_list' => 'Checks',
	'Class:SecurityCheckListItem/Attribute:scli_instance_list+' => 'List of checks implemented for this rule',
	'Class:SecurityCheckListItem/Tab:scli_instance_list' => 'Status of checks',
	'Class:SecurityCheckListItem/BlockHeader:Unassigned' => 'Unassigned',
	'Class:SecurityCheckListItem/BlockHeader:Uncompleted' => 'Uncompleted checks exist',
	'Class:SecurityCheckListItem/BlockHeader:completed' => 'All completed',
));

//
// Class: OrganizationalSCLI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OrganizationalSCLI' => 'Org. rule',
	'Class:OrganizationalSCLI+' => 'Rule which must be implemented for organization',
	'Class:OrganizationalSCLI/Attribute:scope' => 'Scope',
	'Class:OrganizationalSCLI/Attribute:scope+' => 'Scope for this rule',
));

//
// Class: FunctionalSCLI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:FunctionalSCLI' => 'Tech. rule',
	'Class:FunctionalSCLI+' => 'Rule which must be implemented for CI',
	'Class:FunctionalSCLI/Attribute:scope' => 'Scope',
	'Class:FunctionalSCLI/Attribute:scope+' => 'Group of CIs - scope for this rule',
));

//
// Class: SCLIEquivalence
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SCLIEquivalence' => 'Rules equivalence',
	'Class:SCLIEquivalence+' => 'Set of equivalent rules',
	'Class:SCLIEquivalence/Attribute:scli_list' => 'Rules list',
	'Class:SCLIEquivalence/Attribute:scli_list+' => '',
));

//
// Class: SecurityCheckListItemInstance
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SecurityCheckListItemInstance' => 'Check',
	'Class:SecurityCheckListItemInstance+' => 'Implementation of rule',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklistitem_id' => 'Rule',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklistitem_id+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scli_name' => 'Checklist',
	'Class:SecurityCheckListItemInstance/Attribute:scli_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scli_description' => 'Rule description',
	'Class:SecurityCheckListItemInstance/Attribute:scli_description+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_name' => 'Equivalence',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_description' => 'Equivalence description',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_description+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_id' => 'Checklist',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_id+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_name' => 'Checklist',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:status' => 'Status',
	'Class:SecurityCheckListItemInstance/Attribute:status+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:done' => 'done',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:done+' => 'done',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:not_done' => 'not done',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:not_done+' => 'not done',
	'Class:SecurityCheckListItemInstance/BlockHeader:Uncompleted' => 'Uncompleted checks',
	'Class:SecurityCheckListItemInstance/BlockHeader:completed' => 'Сompleted checks',
));

//
// Class: InstanceOfOrganizationalSCLI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:InstanceOfOrganizationalSCLI' => 'Org. rule check',
	'Class:InstanceOfOrganizationalSCLI+' => 'Implementation of rule',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:Uncompleted' => 'Uncompleted checks',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:completed' => 'Сompleted checks',
));

//
// Class: InstanceOfFunctionalSCLI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:InstanceOfFunctionalSCLI' => 'Tech. rule check',
	'Class:InstanceOfFunctionalSCLI+' => 'Implementation of rule',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_id' => 'CI',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_id+' => 'CI affected by this check',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_name' => 'CI',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_name+' => 'CI affected by this check',
	'Class:InstanceOfFunctionalSCLI/BlockHeader:Uncompleted' => 'Uncompleted checks',
	'Class:InstanceOfFunctionalSCLI/BlockHeader:completed' => 'Сompleted checks',
));

//
// Class: SecurityCheckList
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SecurityCheckList' => 'Checklist',
	'Class:SecurityCheckList+' => 'List of information security rules',
	'Class:SecurityCheckList/Attribute:scli_list' => 'Rules',
	'Class:SecurityCheckList/Attribute:scli_list+' => 'Rules - checklist items',
	'Class:SecurityCheckList/Tab:GroupedCheckListItems' => 'Rules status',
));

//
// Class: lnkOrganizationToOrganizationalSCLI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkOrganizationToOrganizationalSCLI' => 'Link:Organization/Org. rule',
	'Class:lnkOrganizationToOrganizationalSCLI+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_id' => 'Org. rule',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_id+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_name' => 'Org. rule',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_name+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_id' => 'Organization',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_id+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_name' => 'Organization',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_name+' => '',
));

//
// Class: lnkGroupToFunctionalSCLI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkGroupToFunctionalSCLI' => 'Link:Group/Tech. rule',
	'Class:lnkGroupToFunctionalSCLI+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_id' => 'Tech. rule',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_id+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_name' => 'Tech. rule',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_name+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_id' => 'CIs group',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_id+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_name' => 'CIs group',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_name+' => '',
));

//
// Application Menu
//

Dict::Add('EN US', 'English', 'English', array(
	'Menu:SecurityConfigManagement' =>'Security configuration management',
	'Menu:SecurityConfigManagement+' =>'',
	'Menu:NewSecurityCheckList' =>'New Checklist',
	'Menu:NewSecurityCheckList+' =>'',
	'Menu:NewSecurityCheckListItem' =>'New Rule',
	'Menu:NewSecurityCheckListItem+' =>'',
	'Menu:NewBusinessRole' =>'New Business Role',
	'Menu:NewBusinessRole+' =>'Create new role in business process',
	'Menu:NewApplicationRole' =>'New Application Role',
	'Menu:NewApplicationRole+' =>'Create new role in application solution',
	'Menu:NewSecurityRoleTemplate' => 'New role template',
	'Menu:NewSecurityRoleTemplate+' => '',
	'Menu:SearchSecurityCIs' => 'Search SCIs',
	'Menu:SearchSecurityCIs+' => 'Search Security Configuration Items',
));
?>
