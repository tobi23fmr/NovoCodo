<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("mycomp");
?>

<?$APPLICATION->IncludeComponent(
	"zoopriut:zveri.list",
	"",
	Array(
		
	)
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>