<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/include/header.php');
?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "breadcrumbs_qsoft",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
    
    <main class="flex-1 container mx-auto bg-white flex">

        <div class="flex-1 grid grid-cols-4 lg:grid-cols-5 border-b">
            <aside class="hidden sm:block col-span-1 border-r p-4">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_left", Array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1", // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "A",   // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "bottom",   // Тип меню для первого уровня
                        "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                );?>
            </aside>
            <div class="col-span-4 sm:col-span-3 lg:col-span-4 p-4">
                <h1 class="text-black text-3xl font-bold mb-4"><?php $APPLICATION->ShowTitle()?></h1>