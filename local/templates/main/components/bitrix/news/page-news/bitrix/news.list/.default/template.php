<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a class="list-item" href="<?= $arItem["DETAIL_PAGE_URL"] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                <img
                            class="list-item__img"
                            border="0"
                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                    />
            <? endif ?>
    <div class="list-item__desc">
        <? if ($arItem['PROPERTIES']['important']['VALUE']):?>
            <div class="list-item__fixed">Закреплено</div>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
            <div class="list-item__date"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
            <? endif ?>
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
            <div class="list-item__title"><? echo $arItem["NAME"] ?></div>
            <? endif; ?>
            <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
            <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
            <? else: ?>
                <? echo TruncateText(strip_tags($arItem['FIELDS']["DETAIL_TEXT"]), 200); ?>
            <? endif; ?>
        <? else: ?>
        <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
            <div class="list-item__date"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
        <? endif ?>
        <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
            <div class="list-item__title"><? echo $arItem["NAME"] ?></div>
        <? endif; ?>
        <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
            <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
        <? else: ?>
            <? echo TruncateText(strip_tags($arItem['FIELDS']["DETAIL_TEXT"]), 200); ?>
        <? endif; ?>
        <? endif; ?>
    </div>
        </a>
    <? endforeach; ?>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <br/><?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
</div>
