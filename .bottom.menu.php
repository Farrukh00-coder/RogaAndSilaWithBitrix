<?
global $USER;
$aMenuLinks = Array(
	Array(
		"О компании", 
		"/company/about/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Конактная информация", 
		"/company/contacts/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Отдел продаж", 
		"/company/department/", 
		Array(), 
		Array("COLOR"=>"red"), 
		"" 
	),
	Array(
		"Финансовый отдел", 
		"/company/finances/", 
		Array(), 
		Array(), 
		"\$USER->IsAuthorized()"
	),
	Array(
		"Для клиентов", 
		"/company/clients/", 
		Array(), 
		Array(), 
		"" 
	)
);
?>