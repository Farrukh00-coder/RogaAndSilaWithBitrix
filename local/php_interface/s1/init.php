<?php
define('NO_IMAGE_PATH', '/local/templates/roga_i_sila_main/assets/images/no_image.png');
define('SITE_DEFAULT_PATH', '/local/templates/.default/');

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/s1/include/event_handlers.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/s1/include/event_handlers.php");
}