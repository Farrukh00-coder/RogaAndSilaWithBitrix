<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<?php if (! empty($arResult)) {?>

<div class="flex-1">
	<div>
	    <p class="inline-block text-3xl text-black font-bold mb-4"><?=GetMessage('SALONS')?></p>
	    <span class="inline-block pl-1"> / <a href="<?=$arParams['ALL_URL']?>" class="inline-block pl-1 text-gray-600 hover:text-orange"><b><?=GetMessage('ALL_SALONS')?></b></a></span>
	</div>
   
   <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">

<?php foreach ($arResult['ITEMS'] as $arItem) {?>
        <div class="w-full flex">
            <div class="h-48 lg:h-auto w-32 xl:w-48 flex-none text-center rounded-lg overflow-hidden">
            	<img src="<?=$arItem['PREVIEW_PICTURE'] ?? NO_IMAGE_PATH?>" class="w-full h-full object-cover" alt="">
                <!-- <a class="block w-full h-full hover:opacity-75" href="salons.html"><img src="<?=SITE_DEFAULT_PATH?>/assets/pictures/test_salon_1.jpg" class="w-full h-full object-cover" alt=""></a> -->
            </div>
            <div class="px-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <div class="text-black font-bold text-xl mb-2">
                    	<p><?=$arItem['NAME']?></p>
                        <!-- <a class="hover:text-orange" href="salons.html">Салон на братиславской</a> -->
                    </div>
                    <div class="text-base space-y-2">
                        <p class="text-gray-400"><?=$arItem['PROPERTY_ADDRESS_VALUE']?></p>
                        <p class="text-black"><?=$arItem['PROPERTY_PHONE_VALUE']?></p>
                        <p class="text-sm">Часы работы:<br> <?=$arItem['PROPERTY_WORK_HOURS_VALUE']?></p>
                    </div>
                </div>
            </div>
        </div>
<?php }?>

	</div>
</div>

<?php }?>