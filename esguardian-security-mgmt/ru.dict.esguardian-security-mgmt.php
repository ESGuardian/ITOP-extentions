<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


//
// Attribute:
//
Dict::Add('RU RU', 'Russian', 'Русский', array(
    'Class:Ticket/Attribute:securitycis_list' => 'КЭБы',
	'Class:Ticket/Attribute:securitycis_list+' => 'Конфигурационные элементы безопасности связанные с этим тикетом',
	'Class:Document/Attribute:scis_list' => 'КЭБы',
	'Class:Document/Attribute:scis_list+' => 'Конфигурационные элементы безопасности связанные с этим документом',
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
// Application Menu
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:SecurityConfigManagement' =>'Управление элементами безопасности',
	'Menu:SecurityConfigManagement+' =>'Управление конфигурационными элементами безопасности',
	'Menu:SearchSecurityCIs' => 'Найти КЭБ',
	'Menu:SearchSecurityCIs+' => 'Найти конфигурационный элемент безопасности',
));
?>
