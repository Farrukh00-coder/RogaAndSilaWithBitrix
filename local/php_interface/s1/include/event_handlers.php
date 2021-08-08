<?php

AddEventHandler("main", "OnAfterUserAuthorize", Array("SendEmail", "OnAfterUserAuthorizeHandler"));

class SendEmail
{
    // создаем обработчик события "OnAfterUserAuthorize"
    public static function OnAfterUserAuthorizeHandler($arUser)
    {
    	$arEventFields = [
    		'LOGIN' => $arUser["user_fields"]["LOGIN"],
    		'EMAIL_TO' => $arUser["user_fields"]["EMAIL"],
    		'AUTH_DATE' => date('Y.m.d H:i:s'),
    	];
    	CEvent::Send("ON_USER_AUTHORIZE", SITE_ID, $arEventFields, "N");
    }
}