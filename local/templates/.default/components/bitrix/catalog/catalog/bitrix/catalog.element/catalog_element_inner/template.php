<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

        <div class="p-4">
        	<h1 class="text-black text-3xl font-bold mb-4"><?=$arResult['NAME']?></h1>
            <div class="flex-1 grid grid-cols-1 lg:grid-cols-5 border-b w-full">

                <div class="col-span-3 border-r-0 sm:border-r pb-4 px-4 text-center catalog-detail-slick-preview">
                    <img class="w-full" src="<?=$arResult['PREVIEW_PICTURE']['SRC'] ?? NO_IMAGE_PATH?>">
                </div>
                <div class="col-span-1 lg:col-span-2">
                    <div class="space-y-4 w-full">
                        <div class="block px-4">
                            <?php if ($arResult['PRICES']['BASE']['DISCOUNT_VALUE'] < $arResult['PRICES']['BASE']['VALUE']) {?>
                            	<p class="text-base line-through text-gray-400"><?=$arResult['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?></p>
                			<?php }?>
                			<p class="font-bold text-2xl text-orange"><?=$arResult['PRICES']['BASE']['PRINT_VALUE']?></p>
                            <div class="mt-4 block">
                            	<?php if ($arResult['PRODUCT']['QUANTITY'] > 0) {?>
                                	<form action='<?=$arResult['ORIGINAL_PARAMETERS']['BASKET_URL']?>'>
                                    	<button class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                        	<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        	</svg>
                                        	<?=GetMessage('BUY_BTN')?>
                                    	</button>
                                	</form>
                                <?php } else {?>
                                	<span class="inline-block"><?=GetMessage('NOT_AVAILABLE')?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="block border-t clear-both w-full" data-accordion data-active>
                            <div class="text-black text-2xl font-bold flex items-center justify-between hover:bg-gray-50 p-4 cursor-pointer" data-accordion-toggle>
                                <span><?=GetMessage('PARAMETERS')?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" data-accordion-not-active style="display: none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" data-accordion-active>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            
                            <div class="my-4 px-4" data-accordion-details>
                                <table class="w-full">
                                    <tr>
                                        <td class="py-2 text-gray-600 w-1/2"><?=$arResult['PROPERTIES']['SALON']['NAME']?>:</td>
                                        <td class="py-2 text-black font-bold w-1/2"><?=$arResult['PROPERTIES']['SALON']['VALUE']?></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 text-gray-600 w-1/2"><?=$arResult['PROPERTIES']['CLASS']['NAME']?>:</td>
                                        <td class="py-2 text-black font-bold w-1/2"><?=$arResult['PROPERTIES']['CLASS']['VALUE']?></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 text-gray-600 w-1/2"><?=$arResult['PROPERTIES']['KPP']['NAME']?>:</td>
                                        <td class="py-2 text-black font-bold w-1/2"><?=$arResult['PROPERTIES']['KPP']['VALUE']?></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 text-gray-600 w-1/2"><?=$arResult['PROPERTIES']['YEAR']['NAME']?>:</td>
                                        <td class="py-2 text-black font-bold w-1/2"><?=$arResult['PROPERTIES']['YEAR']['VALUE']?></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 text-gray-600 w-1/2"><?=$arResult['PROPERTIES']['COLOR']['NAME']?>:</td>
                                        <td class="py-2 text-black font-bold w-1/2"><?=$arResult['PROPERTIES']['COLOR']['VALUE']?></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 text-gray-600 w-1/2"><?=$arResult['PROPERTIES']['BODY']['NAME']?>:</td>
                                        <td class="py-2 text-black font-bold w-1/2"><?=$arResult['PROPERTIES']['BODY']['VALUE']?></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 text-gray-600 w-1/2"><?=$arResult['PROPERTIES']['ENGINE']['NAME']?>:</td>
                                        <td class="py-2 text-black font-bold w-1/2"><?=$arResult['PROPERTIES']['ENGINE']['VALUE']?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="block border-t clear-both w-full" data-accordion>
                            <div class="text-black text-2xl font-bold flex items-center justify-between hover:bg-gray-50 p-4 cursor-pointer" data-accordion-toggle>
                                <span><?=GetMessage('DESCRIPTION')?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" data-accordion-not-active>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" data-accordion-active style="display: none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div class="my-4 px-4 space-y-4" data-accordion-details style="display: none">
                                <p><?=$arResult['DETAIL_TEXT']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>