<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<div data-slick-carousel>
    <?php foreach ($arResult['BANNERS_PROPERTIES'] as $arBanner) {?>
        <div class="relative banner">
        	<div class="w-full h-full bg-black"><img class="w-full h-full object-cover object-center opacity-70" src="<?=$arBanner['IMAGE_SRC']?>" alt="" title=""></div>
            <div class="absolute top-0 left-0 w-full px-10 py-4 sm:px-20 sm:py-8 lg:px-40 lg:py-10">
            	<h1 class="text-gray-100 text-lg sm:text-2xl md:text-4xl xl:text-6xl leading-relaxed sm:leading-relaxed md:leading-relaxed xl:leading-relaxed font-bold uppercase"><?=$arBanner['NAME']?></h1>
            	<h2 class="text-gray-200 italic text-xs sm:text-lg md:text-xl xl:text-3xl leading-relaxed sm:leading-relaxed md:leading-relaxed xl:leading-relaxed font-bold"><?=$arBanner['COMMENTS']?>
            		<a href="<?=$arBanner['URL']?>" class="text-orange hover:opacity-75"><?=GetMessage('BANNER_DETAIL')?></a></h2>
            </div>
        </div>
    <?php }?>
</div>