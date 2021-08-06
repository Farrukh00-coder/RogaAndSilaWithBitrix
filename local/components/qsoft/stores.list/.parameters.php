<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arCurrentValues */

if(!CModule::IncludeModule('iblock')) {
    return;
}

$arIBlockTypes = CIBlockParameters::GetIBlockTypes();

$arIBlocks = [];
$db_iblock = CIBlock::GetList(['SORT' => 'ASC'], ['TYPE' => $arCurrentValues['IBLOCK_TYPE']]);
while($arRes = $db_iblock->Fetch())
    $arIBlocks[$arRes["ID"]] = "[" . $arRes["ID"] . "] " . $arRes["NAME"];

$arSortOrder = [
    "ASC" => GetMessage('ASC'),
    "DESC" => GetMessage('DESC'),
];

$arSortFields = [
        'RAND' => GetMessage('RAND'),
        'ID' => GetMessage('ID'),
        'NAME' => GetMessage('NAME'),
        'ACTIVE_FROM' => GetMessage('ACTIVE_FROM'),
        'SORT' => GetMessage('SORT'),
        'TIMESTAMP_X' => GetMessage('TIMESTAMP_X'),
];

// $arProperty = [];
// $rsProperty = CIBlockProperty::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => $arCurrentValues['IBLOCK_ID']]);
// while ($prop = $rsProperty->Fetch()) {
//     $arProperty[$prop['CODE']] = "[".$prop["CODE"]."] ".$prop["NAME"];
// } 


$arComponentParameters = [
    'PARAMETERS' => [
        'IBLOCK_TYPE' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('T_IBLOCK_TYPE'),
            'TYPE' => 'LIST',
            'VALUES' => $arIBlockTypes,
            'DEFAULT' => $arIBlockTypes[0],
            'REFRESH' => 'Y',
        ],
        'IBLOCK_ID' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('T_IBLOCK_ID'),
            'TYPE' => 'LIST',
            'VALUES' => $arIBlocks,
            'DEFAULT' => $arIBlocks[0],
            'REFRESH' => 'Y',
        ],
        'SALONS_COUNT' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('T_IBLOCK_COUNT_ELEMENT'),
            'TYPE' => 'STRING',
            'DEFAULT' => '10',
        ],
        'SORT_FIELDS' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('SORT_FIELDS'),
            'TYPE' => 'LIST',
            'VALUES' => $arSortFields,
            'DEFAULT' => 'ID',
        ],
        'ORDER_SORT' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('ORDER_SORT'),
            'TYPE' => 'LIST',
            'VALUES' => $arSortOrder,
            'DEFAULT' => 'DESC',
        ],
        'ALL_URL' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('ALL_URL'),
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        ],
        'SHOW_MAP' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('SHOW_MAP'),
            'TYPE' => 'CHECKBOX',
            'DEFAULT' => 'N',
        ],
        'CACHE_TIME' => [
            'DEFAULT' => 3600,
        ],
    ],
];
