<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши салоны");
?><?$APPLICATION->IncludeComponent(
	"qsoft:stores.list",
	"stores_full",
	Array(
		"ALL_URL" => "",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "salons",
		"ORDER_SORT" => "DESC",
		"SALONS_COUNT" => "",
		"SHOW_MAP" => "Y",
		"SORT_FIELDS" => "NAME"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>