<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
<div class="mt-8 border-t sm:border-t-0 sm:mt-0 sm:border-l py-2 sm:pl-4 sm:pr-8">
    <p class="text-3xl text-black font-bold mb-4">
        <?=GetMessage('INFORMATION')?>
    </p>
    <nav>
		<ul class="list-inside  bullet-list-item">

<?php
foreach($arResult as $arItem):
?>
    <?php if($arItem['SELECTED']):?>
		<li><a class="text-orange cursor-default" <?=$arItem['PARAMS']['COLOR'] ? 'style="color: ' . $arItem['PARAMS']['COLOR'] . '"' : ''?> href="<?=$arItem["LINK"]?>"><?=$arItem['TEXT']?></a></li>
	<?php else:?>
		<li><a class="text-gray-600 hover:text-orange" <?=$arItem['PARAMS']['COLOR'] ? 'style="color: ' . $arItem['PARAMS']['COLOR'] . '"' : ''?> href="<?=$arItem["LINK"]?>"><?=$arItem['TEXT']?></a></li>
	<?php endif?>
	
<?php endforeach?>

		</ul>
	</nav>
</div>
<?php endif?>