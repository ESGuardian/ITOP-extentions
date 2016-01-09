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
    'Class:Ticket/Attribute:securitycis_list' => 'КЭБы',
	'Class:Ticket/Attribute:securitycis_list+' => 'Конфигурационные элементы безопасности связанные с этим тикетом',
	'Class:Document/Attribute:scis_list' => 'КЭБы',
	'Class:Document/Attribute:scis_list+' => 'Конфигурационные элементы безопасности связанные с этим тикетом',
	'Class:Organization/Attribute:scli_list' => 'Правила ИБ',
	'Class:Organization/Attribute:scli_list+' => 'Список правил информационной безопасности',
	'Class:Group/Attribute:scli_list' => 'Правила ИБ',
	'Class:Group/Attribute:scli_list+' => 'Список правил информационной безопасности',
	'Class:FunctionalCI/Tab:CheckListItems' => 'Проверки',
	'Class:Organization/Tab:CheckListItems' => 'Проверки',
));

//
// Class: SecurityCI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityCI' => 'КЭБ',
	'Class:SecurityCI+' => 'Конфигурационный элемент безопасности',
	'Class:SecurityCI/Attribute:name' => 'Название',
	'Class:SecurityCI/Attribute:name+' => '',
	'Class:SecurityCI/Attribute:description' => 'Описание',
	'Class:SecurityCI/Attribute:description+' => '',
	'Class:SecurityCI/Attribute:org_id' => 'Организация',
	'Class:SecurityCI/Attribute:org_id+' => '',
	'Class:SecurityCI/Attribute:org_name' => 'Название',
	'Class:SecurityCI/Attribute:org_name+' => 'Название организации',
	'Class:SecurityCI/Attribute:managers_list' => 'Менеджеры',
	'Class:SecurityCI/Attribute:managers_list+' => 'Лица уполномоченные утверждать изменение этого КЕБ',
	'Class:SecurityCI/Attribute:documents_list' => 'Документы',
	'Class:SecurityCI/Attribute:documents_list+' => '',
	'Class:SecurityCI/Attribute:tickets_list' => 'Задачи',
	'Class:SecurityCI/Attribute:tickets_list+' => 'Задачи связанные с эти КЭБ',
	'Class:SecurityCI/Attribute:finalclass' => 'Тип КЭБ',
	'Class:SecurityCI/Attribute:finalclass+' => '',
	'Class:SecurityCI/Tab:OpenedTickets' => 'Открытые задачи',
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
// Class: lnkPersonAsManagerOfSecurityCI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkPersonAsManagerOfSecurityCI' => 'Связь:Человек-менеджер/КЭБ',
	'Class:lnkPersonAsManagerOfSecurityCI+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_id' => 'КЭБ',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_id+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_name' => 'КЭБ',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:securityci_name+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_id' => 'Человек',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_id+' => '',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_name' => 'Фамилия',
	'Class:lnkPersonAsManagerOfSecurityCI/Attribute:person_name+' => '',
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
// Class: lnkDocumentToSecurityCI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkDocumentToSecurityCI' => 'Связь:Документ/КЭБ',
	'Class:lnkDocumentToSecurityCI+' => '',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_id' => 'КЭБ',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_id+' => '',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_name' => 'Название',
	'Class:lnkDocumentToSecurityCI/Attribute:securityci_name+' => 'Название КЭБ',
	'Class:lnkDocumentToSecurityCI/Attribute:document_id' => 'Документ',
	'Class:lnkDocumentToSecurityCI/Attribute:document_id+' => '',
	'Class:lnkDocumentToSecurityCI/Attribute:document_name' => 'Название',
	'Class:lnkDocumentToSecurityCI/Attribute:document_name+' => 'Название документа',
));

//
// Class: lnkSecurityCIToTicket
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkSecurityCIToTicket' => 'Связь:КЭБ/Тикет',
	'Class:lnkSecurityCIToTicket+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_id' => 'Тикет',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_id+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_ref' => 'Номер',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_title' => 'Название',
	'Class:lnkSecurityCIToTicket/Attribute:ticket_title+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_id' => 'КЭБ',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_id+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_name' => 'Название',
	'Class:lnkSecurityCIToTicket/Attribute:securityci_name+' => 'Название КЭБ',
	'Class:lnkSecurityCIToTicket/Attribute:impact' => 'Влияние',
	'Class:lnkSecurityCIToTicket/Attribute:impact+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code' => 'Код влияния',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code+' => '',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:computed' => 'Вычисляемый',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:computed+' => 'computed',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:manual' => 'Ручной',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:manual+' => 'manual',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:not_impacted' => 'Нет влияния',
	'Class:lnkSecurityCIToTicket/Attribute:impact_code/Value:not_impacted+' => 'not impacted',
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
// Class: SecurityCheckListItem
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityCheckListItem' => 'Правило',
	'Class:SecurityCheckListItem+' => 'Элемент чеклиста',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_id' => 'Чеклист',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_id+' => '',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_name' => 'Чеклист',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_name+' => '',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_id' => 'Эквивалент',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_id+' => 'Элемент, задающий эквивалентность правил из разных чеклистов',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_name' => 'Эквивалент',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_name+' => 'Название элемента, задающего эквивалентность правил из разных чеклистов',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_description' => 'Описание эквивалента',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_description+' => 'Описание элемента, задающего эквивалентность правил из разных чеклистов',
	'Class:SecurityCheckListItem/Attribute:scli_instance_list' => 'Проверки',
	'Class:SecurityCheckListItem/Attribute:scli_instance_list+' => 'Список проверок, необходимых для данного правила',
	'Class:SecurityCheckListItem/Tab:scli_instance_list' => 'Статус проверок',
	'Class:SecurityCheckListItem/BlockHeader:Unassigned' => 'Не назначено',
	'Class:SecurityCheckListItem/BlockHeader:Uncomplited' => 'Есть невыполненные проверки',
	'Class:SecurityCheckListItem/BlockHeader:Complited' => 'Все проверки выполнены',
));

//
// Class: OrganizationalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:OrganizationalSCLI' => 'Орг. мера',
	'Class:OrganizationalSCLI+' => 'Организационная мера - применимое к организации правило (элемент чеклиста).',
	'Class:OrganizationalSCLI/Attribute:scope' => 'Область',
	'Class:OrganizationalSCLI/Attribute:scope+' => 'Область применения (scope) правила - организация',
));

//
// Class: FunctionalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:FunctionalSCLI' => 'Тех. мера',
	'Class:FunctionalSCLI+' => 'Техническая мера - применимое к функциональному КЕ правило (элемент чеклиста).',
	'Class:FunctionalSCLI/Attribute:scope' => 'Область',
	'Class:FunctionalSCLI/Attribute:scope+' => 'Область применения (scope) правила - группа КЕ.',
));

//
// Class: SCLIEquivalence
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SCLIEquivalence' => 'Эквивалент правил',
	'Class:SCLIEquivalence+' => 'Элемент, задающий эквивалентность правил из разных чеклистов',
	'Class:SCLIEquivalence/Attribute:scli_list' => 'Список правил',
	'Class:SCLIEquivalence/Attribute:scli_list+' => 'Список эквивалентных правил',
));

//
// Class: SecurityCheckListItemInstance
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityCheckListItemInstance' => 'Проверка',
	'Class:SecurityCheckListItemInstance+' => 'Проверка (реализация) правила',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklistitem_id' => 'Правило',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklistitem_id+' => 'Элемент чеклиста',
	'Class:SecurityCheckListItemInstance/Attribute:scli_name' => 'Правило',
	'Class:SecurityCheckListItemInstance/Attribute:scli_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scli_description' => 'Описание правила',
	'Class:SecurityCheckListItemInstance/Attribute:scli_description+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_name' => 'Эквивалент',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_description' => 'Описание эквивалента',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_description+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_id' => 'Чеклист',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_id+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_name' => 'Чеклист',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:status' => 'Статус',
	'Class:SecurityCheckListItemInstance/Attribute:status+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:done' => 'Выполнено',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:done+' => 'done',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:not_done' => 'Не выполнено',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:not_done+' => 'not done',
	'Class:SecurityCheckListItemInstance/BlockHeader:Uncomplited' => 'Невыполненные проверки',
	'Class:SecurityCheckListItemInstance/BlockHeader:Complited' => 'Выполненные проверки',
));

//
// Class: InstanceOfOrganizationalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:InstanceOfOrganizationalSCLI' => 'Проверка орг.меры',
	'Class:InstanceOfOrganizationalSCLI+' => 'Проверка (реализация) организационного павила',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:Uncomplited' => 'Невыполненные проверки',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:Complited' => 'Выполненные проверки',
));

//
// Class: InstanceOfFunctionalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:InstanceOfFunctionalSCLI' => 'Проверка тех.меры',
	'Class:InstanceOfFunctionalSCLI+' => 'Проверка (реализация) технического павила',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_id' => 'КЕ',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_id+' => 'КЕ к которому применяется проверка',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_name' => 'КЕ',
	'Class:InstanceOfFunctionalSCLI/Attribute:functionalci_name+' => 'КЕ к которому применяется проверка',
	'Class:InstanceOfFunctionalSCLI/BlockHeader:Uncomplited' => 'Невыполненные проверки',
	'Class:InstanceOfFunctionalSCLI/BlockHeader:Complited' => 'Выполненные проверки',
));

//
// Class: SecurityCheckList
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityCheckList' => 'Чеклист',
	'Class:SecurityCheckList+' => 'Список требований информационной безопасности',
	'Class:SecurityCheckList/Attribute:scli_list' => 'Правила',
	'Class:SecurityCheckList/Attribute:scli_list+' => 'Список правил проверки - элементы чеклиста',
	'Class:SecurityCheckList/Tab:GroupedCheckListItems' => 'Статусы правил',
));

//
// Class: lnkOrganizationToOrganizationalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkOrganizationToOrganizationalSCLI' => 'Связь:Организация/Орг.мера ИБ',
	'Class:lnkOrganizationToOrganizationalSCLI+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_id' => 'Орг.мера ИБ',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_id+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_name' => 'Орг.мера ИБ',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:organizationalscli_name+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_id' => 'Организация',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_id+' => '',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_name' => 'Организация',
	'Class:lnkOrganizationToOrganizationalSCLI/Attribute:org_name+' => 'Название организации',
));

//
// Class: lnkGroupToFunctionalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkGroupToFunctionalSCLI' => 'Связь:Группа КЕ/Тех.мера ИБ',
	'Class:lnkGroupToFunctionalSCLI+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_id' => 'Тех.мера ИБ',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_id+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_name' => 'Тех.мера ИБ',
	'Class:lnkGroupToFunctionalSCLI/Attribute:functionalscli_name+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_id' => 'Группа КЕ',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_id+' => '',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_name' => 'Группа КЕ',
	'Class:lnkGroupToFunctionalSCLI/Attribute:group_name+' => '',
));

//
// Application Menu
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:NewSecurityCI' => 'Создать КЭБ',
	'Menu:NewSecurityCI+' => 'Создать конфигурационный элемент безопасности',
	'Menu:SearchSecurityCIs' => 'Найти КЭБ',
	'Menu:SearchSecurityCIs+' => 'Найти конфигурационный элемент безопасности',
));
?>
