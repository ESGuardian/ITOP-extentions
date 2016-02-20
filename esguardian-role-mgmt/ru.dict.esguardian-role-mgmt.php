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
    'Class:Person/Tab:ConflictingRoles+' => 'Список несовместимых ролей связанных с этим человеком',    
));

//
// Class: SecurityRoleTemplate
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityRoleTemplate' => 'Ролевой шаблон',
	'Class:SecurityRoleTemplate+' => 'Совокупность ролей, назначаемых человеку',
	'Class:SecurityRoleTemplate/Attribute:roles_list' => 'Роли',
	'Class:SecurityRoleTemplate/Attribute:roles_list+' => '',
	'Class:SecurityRoleTemplate/Attribute:applyto_list' => 'Применить к ...',
	'Class:SecurityRoleTemplate/Attribute:applyto_list+' => 'Список людей, к которым применяется шаблон',
	'Class:SecurityRoleTemplate/Tab:ConflictingRoles' => 'Конфликты',
    'Class:SecurityRoleTemplate/Tab:ConflictingRoles+' => 'Список несовместимых ролей включенных в шаблон',
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
// Class: lnkSecurityRoleTemplateToSecurityRole
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkSecurityRoleTemplateToSecurityRole' => 'Связь:Ролевой шаблон/Роль',
	'Class:lnkSecurityRoleTemplateToSecurityRole+' => '',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_id' => 'Ролевой шаблон',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_id+' => '',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_name' => 'Название',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityroletemplate_name+' => 'Название ролевого шаблона',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_id' => 'Роль',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_id+' => '',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_name' => 'Название',
	'Class:lnkSecurityRoleTemplateToSecurityRole/Attribute:securityrole_name+' => 'Название роли',
));

//
// Class: lnkApplySRTemplateToPerson
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkApplySRTemplateToPerson' => 'Связь:Ролевой шаблон/Человек',
	'Class:lnkApplySRTemplateToPerson+' => '',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_id' => 'Ролевой шаблон',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_id+' => '',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_name' => 'Название',
	'Class:lnkApplySRTemplateToPerson/Attribute:securityroletemplate_name+' => 'Название ролевого шаблона',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_id' => 'Человек',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_id+' => '',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_name' => 'Фамилия',
	'Class:lnkApplySRTemplateToPerson/Attribute:person_name+' => '',
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
// Application Menu
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:NewBusinessRole' =>'Создать бизнес-роль',
	'Menu:NewBusinessRole+' =>'Создать роль в бизнес-процессе',
	'Menu:NewApplicationRole' =>'Создать прикладную роль',
	'Menu:NewApplicationRole+' =>'Создать роль в прикладном решении',
	'Menu:NewSecurityRoleTemplate' => 'Создать шаблон ролей',
	'Menu:NewSecurityRoleTemplate+' => 'Создать шаблон ролей',
));
?>
