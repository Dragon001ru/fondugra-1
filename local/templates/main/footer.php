<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<!-- класс .banners_invert можно убрать, блок с баннерами станет серым-->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-links", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "40",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Ссылки",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "link",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main-links"
	),
	false
);?>
<footer class="footer">
    <div class="container">
        <div class="headline headline_footer">
            <div class="copyright">
                <? $APPLICATION->IncludeFile(
                    SITE_TEMPLATE_PATH . "/inc/ftr_copy.txt",
                    Array(),
                    Array("MODE" => "text")
                ); ?>
            </div>
            <? $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . "/inc/hdr_icons.txt",
                Array(),
                Array("MODE" => "text")
            ); ?>
            <div class="head-info">
                <div class="head-info__item">
                    <? $APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . "/inc/hdr_email.txt",
                        Array(),
                        Array("MODE" => "text")
                    ); ?>
                    <? $APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . "/inc/hdr_ask_question.txt",
                        Array(),
                        Array("MODE" => "text")
                    ); ?>
                </div>
                <div class="head-info__item">
                    <? $APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . "/inc/hdr_phone.txt",
                        Array(),
                        Array("MODE" => "text")
                    ); ?>
                    <? $APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . "/inc/hdr_fax.txt",
                        Array(),
                        Array("MODE" => "text")
                    ); ?>
                </div>
            </div>
        </div>
        <div class="to-top"><a class="to-top__link" id="to-top" href="#">наверх</a></div>
    </div>
</footer>
</div>
</body>
</html>