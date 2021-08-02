<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
<nav>
    <ul class="text-sm">
        <li>
            <p class="text-xl text-black font-bold mb-4">
        		<?=GetMessage('INFORMATION')?>
    		</p>
    		<ul class="space-y-2">
<?php
foreach($arResult as $arItem):
?>
    <li>
    	<a href="<?=$arItem["LINK"]?>" <?=$arItem["SELECTED"] ? 'class="text-orange cursor-default"' : 'class="text-gray-600 hover:text-orange"'?> <?=$arItem['PARAMS']['COLOR'] ? 'style="color: ' . $arItem['PARAMS']['COLOR'] . '"' : ''?>>
    		<?=$arItem["TEXT"]?>	
    	</a>
    </li>
	
<?php endforeach?>

			</ul>
        </li>
    </ul>
</nav>
<?php endif?>