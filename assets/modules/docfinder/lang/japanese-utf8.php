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
$_lang['reload'] = '再読み込み';
$_lang['close'] = '閉じる';
$_lang['close_button'] = '[+lang.modulename+]を閉じる';
$_lang['help_search'] = 'You can use AND, OR and NOT in your search and blanks for whole word searches. Alternatively you can use regular expressions if you activate it in the advanced search. Use ALL to get all results – if you are looking for a date range for example.';
$_lang['help_replace'] = 'Replaces all instances of the search string with the replace string. Can not be combined with logical operators or regular expressions. The document id is excluded by the replacement.';
$_lang['help_sortable_tables'] = 'Disable the sortable tables for better performance especially when using Internet Explorer.';
$_lang['help_parent_ids'] = 'Enter parent IDs here. You can define more than one parent by separating the parent IDs with commas.';
$_lang['help_creation_date_range'] = 'Set a date range for the creation date. Set only the start date to get a from-search or only the end date to get an until-search.';
$_lang['help_edited_date_range'] = 'Set a date range for the last edited date. Set only the start date to get an from-search or only the end date to get an until-search.';
$_lang['warning_charset'] = '<strong>Warning:</strong> Doc Finder needs the MODx charset to be set to UTF-8 to run properly. Search and replace for special characters will not work correctly.';
$_lang['search'] = '検索';
$_lang['replace'] = '置換';
$_lang['search_for'] = '検索文字列';
$_lang['replace_with'] = '置換文字列';
$_lang['all_none'] = '[全選択 / 解除]';
$_lang['search_replace'] = '検索・置換';
$_lang['general_options'] = '全般';
$_lang['search_places'] = '検索対象';
$_lang['search_options'] = 'オプション';
$_lang['case_sensitive'] = '大文字小文字を区別';
$_lang['regular_expression'] = '正規表現';
$_lang['sortable_tables'] = 'ソート可';
$_lang['id'] = 'ID';
$_lang['pagetitle'] = 'リソース名';
$_lang['longtitle'] = '長いタイトル';
$_lang['name'] = 'エレメント名';
$_lang['description'] = '説明(description)';
$_lang['alias'] = 'エイリアス';
$_lang['introtext'] = '要約(序説)';
$_lang['menutitle'] = 'メニュータイトル';
$_lang['content'] = '本文';
$_lang['tvs'] = 'テンプレート変数';
$_lang['other'] = 'その他の全フィールド';
$_lang['created_on'] ='作成日時';
$_lang['edited_on'] ='編集日時';
$_lang['found_in'] ='フィールド';
$_lang['functions'] ='操作';
$_lang['edit'] ='編集';
$_lang['info'] ='情報';
$_lang['preview'] ='表示';
$_lang['created_between'] = '作成日時';
$_lang['edited_between'] = '編集日時';
$_lang['clear_date'] = 'Clear date';
$_lang['searching'] = 'Searching ...';
$_lang['search_empty'] = 'Search string is empty';
$_lang['no_results'] = 'No results found';
$_lang['documents'] = 'リソース';
$_lang['templates'] = 'テンプレート';
$_lang['tvs'] = 'テンプレート変数';
$_lang['chunks'] = 'チャンク';
$_lang['snippets'] = 'スニペット';
$_lang['plugins'] = 'プラグイン';
$_lang['modules'] = 'モジュール';
$_lang['type'] = '種別';
$_lang['combined_view'] = '全て';
$_lang['search_history_filled'] = '検索履歴 …';
$_lang['search_history_empty'] = '検索履歴(空)';
$_lang['replace_history_filled'] = '置換履歴 …';
$_lang['replace_history_empty'] = '置換履歴(空)';
$_lang['document_options'] = 'リソース';
$_lang['document_parents'] = '親リソース';
$_lang['search_in'] = '検索対象';
$_lang['resource_options'] = 'エレメントオプション';
$_lang['date_options'] = '日付指定';
$_lang['all'] = '全て';
$_lang['form_no_results'] = '<span id="results_info">0</span> 件の結果';
$_lang['form_search_for'] = '<span id="results_string"> <strong id="search_string"></strong> </span>';
$_lang['form_replace_with'] = '<span id="replace_info">replaced by &ldquo;<strong id="replace_string"></strong>&rdquo;</span>';
$_lang['form_time'] = '<span id="time_info">(<span id="time">&ndash;</span> 秒)</span>';
$_lang['cancel_search'] = 'Cancel search';
$_lang['number_of_entries'] = '表示件数';
