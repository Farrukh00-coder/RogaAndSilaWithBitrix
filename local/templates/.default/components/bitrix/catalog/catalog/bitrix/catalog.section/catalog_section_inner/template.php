<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<div class="p-4">
	<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-6">

	<?php foreach ($arResult['ITEMS'] as $arItem) {?>
  	    <div class="bg-white w-full border border-gray-100 rounded overflow-hidden shadow-lg hover:shadow-2xl pt-4">
  	        <a class="block w-full h-40" href="<?=$arItem['DETAIL_PAGE_URL']?>"><img class="w-full h-full hover:opacity-90 object-cover" src="<?=$arItem['PREVIEW_PICTURE']['SRC'] ?? NO_IMAGE_PATH?>" alt="<?=$arItem['NAME']?>"></a>
            
            <div class="px-6 py-4">
                <div class="text-black font-bold text-xl mb-2"><a class="hover:text-orange" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></div>
                <p class="text-grey-darker text-base">
                    <span class="inline-block"><?=$arItem['PRICES']['BASE']['PRINT_VALUE']?></span>
                    <?php if ($arItem['PRICES']['BASE']['DISCOUNT_VALUE'] < $arItem['PRICES']['BASE']['VALUE']) {?>
                    	<span class="inline-block line-through pl-6 text-gray-400"><?=$arItem['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?></span>
                	<?php }?>
                </p>
            </div>

            <div class="px-6 py-4">
            	<?php if ($arItem['PRODUCT']['QUANTITY'] > 0) {?>
            	<a href="<?=$arResult['ORIGINAL_PARAMETERS']['BASKET_URL']?>">
            		<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                	</svg>
            	</a>
            	<?php } else {?>
            		<span class="inline-block"><?=GetMessage('NOT_AVAILABLE')?></span>
            	<?php }?>

            	<?php if (($arItem['PROPERTIES']['NEW']['VALUE'] === 'Y' && $arItem['PROPERTIES']['SALE']['VALUE']) || $arItem['PROPERTIES']['SALE']['VALUE']) {?>
  	    			<span class="text-sm text-white italic rounded bg-orange px-2"><?=$arItem['PROPERTIES']['SALE']['NAME']?></span>
  	    		<?php } elseif ($arItem['PROPERTIES']['NEW']['VALUE'] === 'Y') {?>
  	    			<span class="text-sm text-white italic rounded bg-orange px-2"><?=$arItem['PROPERTIES']['NEW']['NAME']?></span>
  	    		<?php }?>
            </div>
            
        </div>
    <? }?>
                
    </div>

    <div class="text-center mt-4">
        <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    		<?= $arResult["NAV_STRING"] ?>
		<?php endif; ?>
    </div>
</div>