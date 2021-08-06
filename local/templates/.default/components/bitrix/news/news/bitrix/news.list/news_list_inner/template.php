<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>


<?php if (! empty($arResult)) {?>
            
<div class="col-span-4 sm:col-span-3 lg:col-span-4 p-4">
    <div class="space-y-4">
<?php foreach ($arResult['ITEMS'] as $arItem) {?>
	<?php
	$this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem["ID"], $arItem["DELETE_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
	?>

    <div class="w-full flex" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
        <div class="h-48 lg:h-auto w-32 sm:w-60 lg:w-32 xl:w-48 flex-none text-center overflow-hidden">
            <a class="block w-full h-full hover:opacity-75" href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'] ?? NO_IMAGE_PATH?>" class="bg-white bg-opacity-25 w-full h-full object-contain" alt=""></a>
        </div>
        <div class="px-4 leading-normal">
            <div class="mb-8 space-y-2">
                <div class="text-black font-bold text-xl">
                    <a class="hover:text-orange" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
                </div>
                <p class="text-gray-600 text-base">
                    <?=$arItem['PREVIEW_TEXT']?>
                </p>
                <div class="flex items-center">
                    <p class="text-sm text-gray-400 italic"><?=$arItem['DISPLAY_ACTIVE_FROM']?></p>
                </div>
            </div>
        </div>
    </div>
<?php }?>
         
    </div>
</div>
<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<?php endif; ?>
<?php }?>