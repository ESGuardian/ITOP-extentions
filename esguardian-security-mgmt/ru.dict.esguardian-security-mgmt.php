<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


//
// Attribute:roles_list
//
Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:ApplicationSolution/Attribute:roles_list' => 'Роли',
	'Class:BusinessProcess/Attribute:roles_list' => 'Роли',
	'Class:Person/Attribute:roles_list' => 'Роли',
	'Class:Ticket/Attribute:securityroles_list' => 'Влияет на роли',
    'Class:Person/Tab:ConflictingRoles' => 'Конфликты',
));


//
// Class: SecurityRole
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityRole' => 'Роль',
	'Class:SecurityRole+' => 'Роль пользователя в системе',
	'Class:SecurityRole/Attribute:name' => 'Название',
	'Class:SecurityRole/Attribute:name+' => 'Название роли',
	'Class:SecurityRole/Attribute:description' => 'Описание',
	'Class:SecurityRole/Attribute:description+' => '',
	'Class:SecurityRole/Attribute:org_id' => 'Организация',
	'Class:SecurityRole/Attribute:org_id+' => '',
	'Class:SecurityRole/Attribute:org_name' => 'Название',
	'Class:SecurityRole/Attribute:org_name+' => 'Название организации',
	'Class:SecurityRole/Attribute:occupants_list' => 'Оккупанты',
	'Class:SecurityRole/Attribute:occupants_list+' => '',
	'Class:SecurityRole/Attribute:documents_list' => 'Документы',
	'Class:SecurityRole/Attribute:documents_list+' => '',
	'Class:SecurityRole/Attribute:conflictingroles_list' => 'Несовместимые роли',
	'Class:SecurityRole/Attribute:conflictingroles_list+' => '',
	'Class:SecurityRole/Attribute:tickets_list' => 'Задачи',
	'Class:SecurityRole/Attribute:tickets_list+' => '',
	'Class:SecurityRole/Attribute:finalclass' => 'Тип роли',
	'Class:SecurityRole/Attribute:finalclass+' => '',
	'Class:SecurityRole/Tab:OpenedTickets' => 'Открытые задачи',
));

//
// Class: ApplicationRole
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:ApplicationRole' => 'Прикладная роль',
	'Class:ApplicationRole+' => '',
	'Class:ApplicationRole/Attribute:applicationsolution_id' => 'Прикладное решение',
	'Class:ApplicationRole/Attribute:applicationsolution_id+' => '',
	'Class:ApplicationRole/Attribute:applicationsolution_name' => 'Название',
	'Class:ApplicationRole/Attribute:applicationsolution_name+' => '',
));

//
// Class: BusinessRole
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:BusinessRole' => 'Бизнесс-роль',
	'Class:BusinessRole+' => '',
	'Class:BusinessRole/Attribute:businessprocess_id' => 'Бизнесс-процесс',
	'Class:BusinessRole/Attribute:businessprocess_id+' => '',
	'Class:BusinessRole/Attribute:businessprocess_name' => 'Название',
	'Class:BusinessRole/Attribute:businessprocess_name+' => '',
));

//
// Class: lnkPersonToSecurityRole
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkPersonToSecurityRole' => 'Связь человека с ролью',
	'Class:lnkPersonToSecurityRole+' => '',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_id' => 'Роль',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_id+' => '',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_name' => 'Название',
	'Class:lnkPersonToSecurityRole/Attribute:securityrole_name+' => 'Название роли',
	'Class:lnkPersonToSecurityRole/Attribute:person_id' => 'Человек',
	'Class:lnkPersonToSecurityRole/Attribute:person_id+' => '',
	'Class:lnkPersonToSecurityRole/Attribute:person_name' => 'Фамилия',
	'Class:lnkPersonToSecurityRole/Attribute:person_name+' => '',
));

//
// Class: lnkSecurityRoleBidirectional
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkSecurityRoleBidirectional' => 'Несовместимые роли',
	'Class:lnkSecurityRoleBidirectional+' => '',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_id' => 'Несовместимая роль',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_id+' => '',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_name' => 'Название',
	'Class:lnkSecurityRoleBidirectional/Attribute:left_securityrole_name+' => 'Название роли',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_id' => 'Несовместимая роль',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_id+' => '',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_name' => 'Название',
	'Class:lnkSecurityRoleBidirectional/Attribute:right_securityrole_name+' => 'Название роли',
));

//
// Class: lnkDocumentToSecurityRole
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkDocumentToSecurityRole' => 'Связь роли с документом',
	'Class:lnkDocumentToSecurityRole+' => '',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_id' => 'Роль',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_id+' => '',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_name' => 'Название',
	'Class:lnkDocumentToSecurityRole/Attribute:securityrole_name+' => 'Название роли',
	'Class:lnkDocumentToSecurityRole/Attribute:document_id' => 'Документ',
	'Class:lnkDocumentToSecurityRole/Attribute:document_id+' => '',
	'Class:lnkDocumentToSecurityRole/Attribute:document_name' => 'Название',
	'Class:lnkDocumentToSecurityRole/Attribute:document_name+' => '',
));

//
// Class: lnkSecurityRoleToTicket
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkSecurityRoleToTicket' => 'Связь задачи с ролью',
	'Class:lnkSecurityRoleToTicket+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_id' => 'Задача',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_id+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_ref' => 'Номер',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_title' => 'Название',
	'Class:lnkSecurityRoleToTicket/Attribute:ticket_title+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_id' => 'Роль',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_id+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_name' => 'Название',
	'Class:lnkSecurityRoleToTicket/Attribute:securityrole_name+' => 'Название роли',
	'Class:lnkSecurityRoleToTicket/Attribute:impact' => 'impact',
	'Class:lnkSecurityRoleToTicket/Attribute:impact+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code' => 'Влияние',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code+' => '',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:computed' => 'Автоматически',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:computed+' => 'Автоматически',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:manual' => 'Вручную',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:manual+' => 'Вручную',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:not_impacted' => 'Не влияет',
	'Class:lnkSecurityRoleToTicket/Attribute:impact_code/Value:not_impacted+' => 'Не влияет',
));

//
// Application Menu
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:NewRole' => 'Создать Роль',
	'Menu:NewRole+' => 'Создать Роль',
	'Menu:SearchRoles' => 'Найти Роль',
	'Menu:SearchRoles+' => 'Найти Роль',
));
?>
