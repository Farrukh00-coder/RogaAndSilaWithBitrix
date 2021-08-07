<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?php if (! empty($arResult)) {?>
    <div class="col-span-4 sm:col-span-3 lg:col-span-4 p-4">               
        <div class="space-y-4">
            <img src="<?=$arResult['DETAIL_PICTURE']['SRC'] ?? NO_IMAGE_PATH?>" alt="" title="">
            <p><?=$arResult['PREVIEW_TEXT']?></p>
            <div class="flex items-center">
                <p class="text-sm text-gray-400 italic"><?=$arResult['DISPLAY_ACTIVE_FROM']?></p>
            </div>
        </div>
    </div>
<?php }?>