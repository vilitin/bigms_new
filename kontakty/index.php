<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "shops_all",
    Array(
        "COMPONENT_TEMPLATE" => "shops",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "5",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "IBLOCK_SECTION_ID",//SORT
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",//ID
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(0=>"IBLOCK_SECTION_ID",1=>"",),
        "PROPERTY_CODE" => array(0=>"ADRESS",1=>"PHONE",2=>"VIDEO",3=>"MAP",4=>"MORE_PHOTO",5=>"HOW_TO_GET",6=>"HOW_TO_CAR",7=>"WATSUP",8=>"VIBER"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        //"PARENT_SECTION" => "27",
        //"PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "PAGER_TEMPLATE" => "bigms",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "�������",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N"
    )
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>