<?php
if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true ) die();
?> 

<div class="flex-1 col-span-3">
    <div class="grid gap-6 grid-cols-1">
<?php foreach ($arResult["ITEMS"] as $arItem) { ?>
<?php
$this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"));
?>

    <div class="w-full flex" id="<?=$this->GetEditAreaId($arItem["ID"])?>">
        <div class="h-48 lg:h-auto w-32 xl:w-48 flex-none text-center rounded-lg overflow-hidden">
            <a class="block w-full h-full hover:opacity-75" href="/company/stores/"><img src="<?=$arItem['PREVIEW_PICTURE'] ?? NO_IMAGE_PATH?>" class="w-full h-full object-cover" alt=""></a>
        </div>
        <div class="px-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-black font-bold text-xl mb-2">
                    <a class="hover:text-orange" href=""><?=$arItem["NAME"]?></a>
                </div>
                <div class="text-base space-y-2">
                    <p class="text-gray-400"><?=$arItem["PROPERTY_ADDRESS_VALUE"]?></p>
                    <p class="text-black"><?=$arItem["PROPERTY_PHONE_VALUE"]?></p>
                    <p class="text-sm"><?=GetMessage('WORK_TIME')?><br> <?=$arItem["PROPERTY_WORK_HOURS_VALUE"]?></p>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
    
    </div>
</div><br>