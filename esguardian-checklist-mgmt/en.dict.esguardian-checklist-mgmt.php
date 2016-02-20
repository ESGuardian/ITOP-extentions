<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	'Class:Organization/Attribute:scli_list' => 'IS Rules',
	'Class:Organization/Attribute:scli_list+' => 'Information Security Rules List',
	'Class:Group/Attribute:scli_list' => 'IS Rules',
	'Class:Group/Attribute:scli_list+' => 'Information Security Rules List',
	'Class:FunctionalCI/Tab:CheckListItems' => 'Checks',
	'Class:Organization/Tab:CheckListItems' => 'Checks',
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
	'Class:SecurityCheckListItemInstance/BlockHeader:completed' => 'Ñompleted checks',
));

//
// Class: InstanceOfOrganizationalSCLI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:InstanceOfOrganizationalSCLI' => 'Org. rule check',
	'Class:InstanceOfOrganizationalSCLI+' => 'Implementation of rule',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:Uncompleted' => 'Uncompleted checks',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:completed' => 'Ñompleted checks',
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
	'Class:InstanceOfFunctionalSCLI/BlockHeader:completed' => 'Ñompleted checks',
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
	'Menu:NewSecurityCheckList' =>'New Checklist',
	'Menu:NewSecurityCheckList+' =>'',
	'Menu:NewSecurityCheckListItem' =>'New Rule',
	'Menu:NewSecurityCheckListItem+' =>'',
));
?>