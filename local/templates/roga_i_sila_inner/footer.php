<?php
if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
        </div>
    </div>
</main>
    <footer class="container mx-auto">
        <section class="block sm:flex bg-white px-4 sm:px-8 py-4">

            <?$APPLICATION->IncludeComponent(
                "qsoft:stores.list",
                "stores_short",
                Array(
                    "ALL_URL" => "/company/stores/",
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "IBLOCK_ID" => "4",
                    "IBLOCK_TYPE" => "salons",
                    "ORDER_SORT" => "DESC",
                    "SALONS_COUNT" => "2",
                    "SORT_FIELDS" => "RAND"
                )
            );?>
            
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu_footer",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "bottom",
                    "USE_EXT" => "N"
                )
            );?>
        </section>


        <div class="space-y-4 sm:space-y-0 sm:flex sm:justify-between items-center py-6 px-2 sm:px-0">
            <div class="copy pr-8">© 2021 Рога &amp; Сила. Продажа автомобилей.</div>
            <div class="text-right">
                <a href="https://www.qsoft.ru" target="_blank" class="inline-block">Сделано в <img class="ml-2 inline-block" src="<?=SITE_DEFAULT_PATH?>/assets/images/qsoft.png" width="59" height="11" alt=""/></a>
            </div>
        </div>
    </footer>
</div>

</body>
</html>