<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST['TYPE']) && $_REQUEST['TYPE'] == 'REGISTRATION'):?>
	<?php $APPLICATION->SetTitle("Благодарим Вас за регистрацию в интернет-магазине «Рога и сила»!");?>
	<p>Добро пожаловать!</p>
	<p>Пожалуйста, проверьте Ваш e-mail – мы отправили Вам приветственное письмо.</p>
	<p>Теперь у Вас есть возможность:</p>
	<p>•       Сохранять в Личном кабинете персональные данные</p>
	<p>•       Легко отслеживать статус Вашего заказа в режиме online</p>
	<p>•       В любой момент просмотреть историю Ваших заказов</p>
	<p>Что Вы хотите сделать прямо сейчас?</p>

<?php else:?>
	<?php
	$userName = $USER->GetFullName();
	if (!$userName)
		$userName = $USER->GetLogin();
	?>
	<script>
		<?if ($userName):?>
		BX.localStorage.set("eshop_user_name", "<?=CUtil::JSEscape($userName)?>", 604800);
		<?else:?>
		BX.localStorage.remove("eshop_user_name");
		<?endif?>
	
		<?if (isset($_REQUEST["backurl"]) && $_REQUEST["backurl"] <> '' && preg_match('#^/\w#', $_REQUEST["backurl"])):?>
		document.location.href = "<?=CUtil::JSEscape($_REQUEST["backurl"])?>";
		<?endif?>
	</script>
	
	<?php $APPLICATION->SetTitle("Авторизация");?>
	<p>Вы зарегистрированы и успешно авторизовались.</p>
	<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

<?php endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>