<?php if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true ) die();?>

<?php $APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("ZOOM","TYPECONTROL"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => serialize($arResult['MAP_DATA']),
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "salon",
		"MAP_WIDTH" => "AUTO",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM"),
	),
	false,
);?>