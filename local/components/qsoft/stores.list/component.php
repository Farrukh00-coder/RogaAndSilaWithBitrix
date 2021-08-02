<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if ($this->StartResultCache(false)) {

	if (! CModule::IncludeModule('iblock')) {
		ShowError(GetMessage('IBLOCK_MODULE_NOT_INSTALLED'));
		$this->AbortResultCache();
		return;
	}

	$arResult['ALL_URL'] = $arParams['ALL_URL'];

	$arSort = [
		$arParams['SORT_FIELDS'] => $arParams['ORDER_SORT'],
	];

	$arFilter = [
		'IBLOCK_ID' => intval($arParams['IBLOCK_ID']),
		'ACTIVE' => 'Y',
	];

	$arLimit = [
		'nTopCount' => intval($arParams['SALONS_COUNT']),
	];

	$arSelect = [
		'ID',
        'NAME',
        'PREVIEW_PICTURE',
        'PROPERTY_WORK_HOURS',
        'PROPERTY_PHONE',
        'PROPERTY_ADDRESS',
        'PROPERTY_MAP',
	];

	$rsIBlockElement = CIBlockElement::GetList($arSort, $arFilter, false, $arLimit, $arSelect);

	$arResult['ITEMS'] = [];
    $arImg = [];
    while ($res = $rsIBlockElement->GetNext()) {
    	$arResult['ITEMS'][] = $res;
        if (! empty($res['PREVIEW_PICTURE'])) {
    	   $arImg[] = $res['PREVIEW_PICTURE'];
        }
    }

    if (! empty($arImg)) {
        $rsImg = CFile::GetList([], ["@ID" => implode(",", $arImg)]);
        while ($res = $rsImg->GetNext()) {
        	$path = CFile::GetFileSRC($res);
        	
        	foreach ($arResult['ITEMS'] as &$arItem) {
        		if (! strcmp($arItem['PREVIEW_PICTURE'], $res['ID'])) {
        			$arItem['PREVIEW_PICTURE'] = $path;
        		}
        	}
   	    }
    }
   	$this->SetResultCacheKeys([]);
   	$this->IncludeComponentTemplate();
}