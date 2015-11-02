<?php
// ---------------------------------------------------------------
// :: Doc Finder
// ----------------------------------------------------------------
//
// 	Short Description:
//         Ajax powered search and replace for the manager.
//
//   Version:
//         1.7
//
//   Created by:
// 	    Bogdan Günther (http://www.medianotions.de - bg@medianotions.de)
//
//
// ----------------------------------------------------------------
// :: Copyright & Licencing
// ----------------------------------------------------------------
//
//   GNU General Public License (GPL - http://www.gnu.org/copyleft/gpl.html)
//

$_lang['modulename'] = 'Doc Finder';
$_lang['reload'] = 'Обновить';
$_lang['close'] = 'Закрыть';
$_lang['close_button'] = 'Закрыть [+lang.modulename+]';
$_lang['help_search'] = 'Вы можете использовать AND, OR и NOT при поиске and blanks для поиска по слову полностью. Или вы можете использовать регулярные выражения если активируете их в продвинутом поиске. Используйте ALL чтобы получить все результаты – если вы ищете промежутки дат к примеру.';
$_lang['help_replace'] = 'Заменяет все вхождения поисковой строки строкой для замены. Не может быть использована с логическими операторами или регулярными выражениями. The document id is excluded by the replacement.';
$_lang['help_sortable_tables'] = 'Отключите сортируемые таблицы для повышения производительности, особенно когда используете Internet Explorer.';
$_lang['help_parent_ids'] = 'Введите здась родительские ID. Можно указать больше одного, разделяя их запятой.';
$_lang['help_creation_date_range'] = 'Задайте диапазон дат, для поиска по дате создания. Set only the start date to get a from-search or only the end date to get an until-search.';
$_lang['help_edited_date_range'] = 'Задайте диапазон дат, для поиска по дате редактирования. Set only the start date to get an from-search or only the end date to get an until-search.';
$_lang['warning_charset'] = '<strong>Внимание:</strong> Doc Finder\'у требуется, чтобы в  MODx кодировка была установлена в UTF-8 для коректной работы. Иначе поиск и замена спецсимволов не будет работать корректно.';
$_lang['search'] = 'Найти';
$_lang['replace'] = 'Заменить';
$_lang['search_for'] = 'Искать значение';
$_lang['replace_with'] = 'Заменить значение';
$_lang['all_none'] = '[Все / Ни одного]';
$_lang['search_replace'] = 'Поиск и замена';
$_lang['general_options'] = 'Основные настройки';
$_lang['search_places'] = 'Где искать';
$_lang['search_options'] = 'Настройки поиска';
$_lang['case_sensitive'] = 'Case sensitive';
$_lang['regular_expression'] = 'Регулярное выражение';
$_lang['sortable_tables'] = 'Сортируемые таблицы';
$_lang['id'] = 'ID';
$_lang['pagetitle'] = 'Pagetitle';
$_lang['longtitle'] = 'Longtitle';
$_lang['name'] = 'Name';
$_lang['description'] = 'Description';
$_lang['alias'] = 'Alias';
$_lang['introtext'] = 'Introtext';
$_lang['menutitle'] = 'Menutitle';
$_lang['content'] = 'Content';
$_lang['tvs'] = 'TVs';
$_lang['other'] = 'Все другие поля';
$_lang['created_on'] ='Created on';
$_lang['edited_on'] ='Edited on';
$_lang['found_in'] ='Найдено в';
$_lang['functions'] ='Функции';
$_lang['edit'] ='Редактировать';
$_lang['info'] ='Info';
$_lang['preview'] ='Предпросмотр';
$_lang['created_between'] = 'Создано в промежутке';
$_lang['edited_between'] = 'Отредактировано в промежутке';
$_lang['clear_date'] = 'очистить дату';
$_lang['searching'] = 'Поиск ...';
$_lang['search_empty'] = 'поисковый запрос пуст';
$_lang['no_results'] = 'Поиск не дал результатов';
$_lang['documents'] = 'Документы';
$_lang['templates'] = 'Шаблоны';
$_lang['tvs'] = 'TVs';
$_lang['chunks'] = 'Chunks';
$_lang['snippets'] = 'Snippets';
$_lang['plugins'] = 'Plugins';
$_lang['modules'] = 'Modules';
$_lang['type'] = 'Type';
$_lang['combined_view'] = 'Комбинированый вид';
$_lang['search_history_filled'] = 'Поисковая история …';
$_lang['search_history_empty'] = 'Поисковая история (empty)';
$_lang['replace_history_filled'] = 'История замен …';
$_lang['replace_history_empty'] = 'История замен (empty)';
$_lang['document_options'] = 'Настройки документов';
$_lang['document_parents'] = 'Родители документов';
$_lang['search_in'] = 'Искать в';
$_lang['resource_options'] = 'Настройки ресурсов';
$_lang['date_options'] = 'Настройки даты';
$_lang['all'] = 'All';
$_lang['form_no_results'] = '<span id="results_info">Нет</span> результатов';
$_lang['form_search_for'] = '<span id="results_string">для “<strong id="search_string"></strong>”</span>';
$_lang['form_replace_with'] = '<span id="replace_info">заменено на “<strong id="replace_string"></strong>”</span>';
$_lang['form_time'] = '<span id="time_info">(<span id="time">–</span> секунд)</span>';
$_lang['cancel_search'] = 'Отменить поиск';
$_lang['number_of_entries'] = 'Количество вхождений (результатов?)';
