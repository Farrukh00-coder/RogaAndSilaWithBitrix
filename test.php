<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рога и Сила - главная страница");
?><?$APPLICATION->IncludeComponent(
	"qsoft:stores.list",
	"stores_short",
	Array(
		"ALL_URL" => "/company/stores/",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "salons",
		"ORDER_SORT" => "DESC",
		"SALONS_COUNT" => "2",
		"SORT_FIELDS" => "RAND"
	)
);?>