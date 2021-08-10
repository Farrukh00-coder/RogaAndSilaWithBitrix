<?php
if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/form.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/tailwind.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/base.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/main_page_template_styles.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/inner_page_template_styles.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/js/vendor/slick.css');

$asset->addJs(SITE_DEFAULT_PATH . '/assets/js/vendor/jquery-3.6.0.js');
$asset->addJs(SITE_DEFAULT_PATH . '/assets/js/vendor/slick.js');
$asset->addJs(SITE_DEFAULT_PATH . '/assets/js/script.js');
?>
<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <title><?php $APPLICATION->ShowTitle()?></title>
    <?php $APPLICATION->ShowHead()?>
    <link href="<?=SITE_DEFAULT_PATH?>/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<?php $APPLICATION->ShowPanel()?>
<div class="wrapper flex flex-1 flex-col">
    <header class="bg-white">
        <div class="border-b">
            <div class="container mx-auto block sm:flex sm:justify-between sm:items-center py-4 px-4 sm:px-0 space-y-4 sm:space-y-0">
                <div class="flex justify-center">
                    <a href="/" class="inline-block sm:inline hover:opacity-75">
                        <img src="<?=SITE_DEFAULT_PATH?>/assets/images/logo.png" width="222" height="30" alt="">
                    </a>
                </div>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "auth_form_header",
                    Array(
                        "COMPONENT_TEMPLATE" => "auth_form_header",
                        "FORGOT_PASSWORD_URL" => "",
                        "PROFILE" => "/personal/profile/",
                        "PROFILE_URL" => "/personal/",
                        "REGISTER_URL" => "/auth/",
                        "SHOW_ERRORS" => "N"
                    )
                );?>
                
            </div>
        </div>
        <div class="border-b">
            <div class="container mx-auto block lg:flex justify-between items-center px-2 sm:px-0">
                <form name="search_form" class="bg-gray-100 rounded-full flex items-center px-3 text-sm order-2 my-4 lg:my-0">
                    <label for="search-input" class="hidden"></label>
                    <input id="search-input" type="text" placeholder="Поиск по сайту" class="bg-gray-100 rounded-full py-1 px-1 focus:outline-none placeholder-opacity-50 flex-1 border-none focus:shadow-none focus:ring-0">
                    <button type="submit" class="group focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-black group-hover:text-orange h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "catalog_top",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(0=>"",),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "Y"
                    )
                );?>
                
            </div>
        </div>
    </header>

    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "breadcrumbs_qsoft",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>