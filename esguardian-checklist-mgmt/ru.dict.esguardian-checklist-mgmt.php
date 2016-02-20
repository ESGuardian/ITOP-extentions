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
	'Class:Organization/Attribute:scli_list' => 'Правила ИБ',
	'Class:Organization/Attribute:scli_list+' => 'Список правил информационной безопасности',
	'Class:Group/Attribute:scli_list' => 'Правила ИБ',
	'Class:Group/Attribute:scli_list+' => 'Список правил информационной безопасности',
	'Class:FunctionalCI/Tab:CheckListItems' => 'Проверки',
	'Class:Organization/Tab:CheckListItems' => 'Проверки',
));

//
// Class: SecurityCheckListItem
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityCheckListItem' => 'Правило',
	'Class:SecurityCheckListItem+' => 'Элемент Чек-листа',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_id' => 'Чек-лист',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_id+' => '',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_name' => 'Чек-лист',
	'Class:SecurityCheckListItem/Attribute:securitychecklist_name+' => '',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_id' => 'Эквивалент',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_id+' => 'Элемент, задающий эквивалентность правил из разных Чек-листов',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_name' => 'Эквивалент',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_name+' => 'Название элемента, задающего эквивалентность правил из разных Чек-листов',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_description' => 'Описание эквивалента',
	'Class:SecurityCheckListItem/Attribute:scliequivalence_description+' => 'Описание элемента, задающего эквивалентность правил из разных Чек-листов',
	'Class:SecurityCheckListItem/Attribute:scli_instance_list' => 'Проверки',
	'Class:SecurityCheckListItem/Attribute:scli_instance_list+' => 'Список проверок, необходимых для данного правила',
	'Class:SecurityCheckListItem/Tab:scli_instance_list' => 'Статус проверок',
	'Class:SecurityCheckListItem/BlockHeader:Unassigned' => 'Не назначено',
	'Class:SecurityCheckListItem/BlockHeader:Uncompleted' => 'Есть невыполненные проверки',
	'Class:SecurityCheckListItem/BlockHeader:completed' => 'Все проверки выполнены',
));

//
// Class: OrganizationalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:OrganizationalSCLI' => 'Орг. мера',
	'Class:OrganizationalSCLI+' => 'Организационная мера - применимое к организации правило (элемент Чек-листа).',
	'Class:OrganizationalSCLI/Attribute:scope' => 'Область',
	'Class:OrganizationalSCLI/Attribute:scope+' => 'Область применения (scope) правила - организация',
));

//
// Class: FunctionalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:FunctionalSCLI' => 'Тех. мера',
	'Class:FunctionalSCLI+' => 'Техническая мера - применимое к функциональному КЕ правило (элемент Чек-листа).',
	'Class:FunctionalSCLI/Attribute:scope' => 'Область',
	'Class:FunctionalSCLI/Attribute:scope+' => 'Область применения (scope) правила - группа КЕ.',
));

//
// Class: SCLIEquivalence
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SCLIEquivalence' => 'Эквивалент правил',
	'Class:SCLIEquivalence+' => 'Элемент, задающий эквивалентность правил из разных Чек-листов',
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
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklistitem_id+' => 'Элемент Чек-листа',
	'Class:SecurityCheckListItemInstance/Attribute:scli_name' => 'Правило',
	'Class:SecurityCheckListItemInstance/Attribute:scli_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scli_description' => 'Описание правила',
	'Class:SecurityCheckListItemInstance/Attribute:scli_description+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_name' => 'Эквивалент',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_description' => 'Описание эквивалента',
	'Class:SecurityCheckListItemInstance/Attribute:scliequivalence_description+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_id' => 'Чек-лист',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_id+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_name' => 'Чек-лист',
	'Class:SecurityCheckListItemInstance/Attribute:securitychecklist_name+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:status' => 'Статус',
	'Class:SecurityCheckListItemInstance/Attribute:status+' => '',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:done' => 'Выполнено',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:done+' => 'done',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:not_done' => 'Не выполнено',
	'Class:SecurityCheckListItemInstance/Attribute:status/Value:not_done+' => 'not done',
	'Class:SecurityCheckListItemInstance/BlockHeader:Uncompleted' => 'Невыполненные проверки',
	'Class:SecurityCheckListItemInstance/BlockHeader:completed' => 'Выполненные проверки',
));

//
// Class: InstanceOfOrganizationalSCLI
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:InstanceOfOrganizationalSCLI' => 'Проверка орг.меры',
	'Class:InstanceOfOrganizationalSCLI+' => 'Проверка (реализация) организационного павила',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:Uncompleted' => 'Невыполненные проверки',
	'Class:InstanceOfOrganizationalSCLI/BlockHeader:completed' => 'Выполненные проверки',
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
	'Class:InstanceOfFunctionalSCLI/BlockHeader:Uncompleted' => 'Невыполненные проверки',
	'Class:InstanceOfFunctionalSCLI/BlockHeader:completed' => 'Выполненные проверки',
));

//
// Class: SecurityCheckList
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:SecurityCheckList' => 'Чек-лист',
	'Class:SecurityCheckList+' => 'Список требований информационной безопасности',
	'Class:SecurityCheckList/Attribute:scli_list' => 'Правила',
	'Class:SecurityCheckList/Attribute:scli_list+' => 'Список правил проверки - элементы Чек-листа',
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
	'Menu:NewSecurityCheckList' =>'Создать Чек-лист',
	'Menu:NewSecurityCheckList+' =>'Создать список правил (требований) безопасности',
	'Menu:NewSecurityCheckListItem' =>'Создать правило',
	'Menu:NewSecurityCheckListItem+' =>'Создать правило безопасности (элемент Чек-листа)',
));
?>