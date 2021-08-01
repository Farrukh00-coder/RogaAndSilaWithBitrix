<?php

if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections", 
    "", 
    array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "/catalog/", 
        "SECTION_PAGE_URL" => "/#SECTION_CODE#/", 
        "DETAIL_PAGE_URL" => "/#SECTION_CODE#/#ELEMENT_CODE#/", 
        "IBLOCK_TYPE" => "products", 
        "IBLOCK_ID" => "5", 
        "DEPTH_LEVEL" => "2", 
        "CACHE_TYPE" => "A", 
        "CACHE_TIME" => "3600" 
    ),
    false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>