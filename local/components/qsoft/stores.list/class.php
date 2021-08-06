<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


class Salons extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{
		$arParams['ALL_URL'] = $arParams['ALL_URL'] ?? '#';
		if (!isset($arParams['CACHE_TIME'])) {
			$arParams['CACHE_TIME'] = 3600;
		}
		$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
		$arParams['SORT_FIELDS'] = $arParams['SORT_FIELDS'] ?? 'RAND';
		$arParams['ORDER_SORT'] = $arParams['ORDER_SORT'] ?? 'DESC';
		$arParams['SALONS_COUNT'] = intval($arParams['SALONS_COUNT']);
		if ($arParams['SALONS_COUNT'] <= 0) {
			$arParams['SALONS_COUNT'] = 0;
		}
		if ($arParams['SHOW_MAP'] !== 'Y') {
			$arParams['SHOW_MAP'] = 'N';
		}

		return $arParams;
	}

	public function executeComponent()
	{
		if ($this->StartResultCache()) {

			if (! CModule::IncludeModule('iblock')) {
				ShowError(GetMessage('IBLOCK_MODULE_NOT_INSTALLED'));
				$this->AbortResultCache();
				return;
			}

			$this->arResult['ALL_URL'] = $this->arParams['ALL_URL'];

			$arSort = [
				$this->arParams['SORT_FIELDS'] => $this->arParams['ORDER_SORT'],
			];

			$arFilter = [
				'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
				'ACTIVE' => 'Y',
			];

			$arLimit = false;
			if ($this->arParams['SALONS_COUNT']) {
				$arLimit = [
					'nTopCount' => $this->arParams['SALONS_COUNT'],
				];
			}

			$arSelect = [
				'ID',
    		    'NAME',
    		    'PREVIEW_PICTURE',
    		    'PROPERTY_WORK_HOURS',
    		    'PROPERTY_PHONE',
    		    'PROPERTY_ADDRESS',
			];

			if ($this->arParams['SHOW_MAP'] === 'Y') {
				$arSelect[] = 'PROPERTY_MAP';
			}

			$rsIBlockElement = CIBlockElement::GetList($arSort, $arFilter, false, $arLimit, $arSelect);

			$this->arResult['ITEMS'] = [];
    		$arImg = [];
    		while ($res = $rsIBlockElement->GetNext()) {
    			$arButtons = CIBlock::GetPanelButtons(
                    $arParams["IBLOCK_ID"],
                    $res["ID"],
                    0,
                    array("SECTION_BUTTONS" => false, "SESSID" => false)
                );
                $res["ADD_LINK"] = $arButtons["edit"]["add_element"]["ACTION_URL"];
                $res["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
                $res["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];
                
    			$this->arResult['ITEMS'][] = $res;
    		    if (! empty($res['PREVIEW_PICTURE'])) {
    			   $arImg[] = $res['PREVIEW_PICTURE'];
    		    }

    		    if (array_key_exists('PROPERTY_MAP_VALUE', $res)) {
    		    	list($lat, $lon) = explode(',', $res['PROPERTY_MAP_VALUE']);
    		    	$this->arResult['MAP_DATA']['PLACEMARKS'][] = [
    		    		'LAT' => (float)$lat,
    		    		'LON' => (float)$lon,
    		    		'TEXT' => $res['PROPERTY_ADDRESS_VALUE'],
    		    	];
    		    }
    		}

    		if (! empty($arImg)) {
    		    $rsImg = CFile::GetList([], ["@ID" => implode(",", $arImg)]);
    		    while ($res = $rsImg->GetNext()) {
    		    	$path = CFile::GetFileSRC($res);
    		    	
    		    	foreach ($this->arResult['ITEMS'] as &$arItem) {
    		    		if (! strcmp($arItem['PREVIEW_PICTURE'], $res['ID'])) {
    		    			$arItem['PREVIEW_PICTURE'] = $path;
    		    		}
    		    	}
   			    }
    		}

    		$arKeysForCache = [];
    		if ($this->arParams['SHOW_MAP'] === 'Y') {
    			$arKeysForCache[] = 'MAP_DATA';
    		}
    		$this->SetResultCacheKeys($arKeysForCache);
   			$this->IncludeComponentTemplate();
		}

		return $this->arResult;
	}
}
