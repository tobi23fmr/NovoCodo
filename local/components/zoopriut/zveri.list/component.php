<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
CModule::IncludeModule("iblock");
// $arResult["items"][0]["id"]=1;
// $arResult["items"][0]["name"]="Приют 1";
// $arResult["items"][0]["desc"]="Описание 1";

// $arResult["items"][1]["id"]=2;
// $arResult["items"][1]["name"]="Приют 2";
// $arResult["items"][1]["desc"]="Описание 2";

$arSelect = Array("ID", "NAME", "PREVIEW_TEXT");
$arFilter = Array("IBLOCK_ID"=>5,);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	// echo '<pre>';
	// print_r($arFields);
	// echo '</pre>';
	$arResult["items"][]=$arFields;
	// $arResult["items"][0]["name"]="Приют 1";
	// $arResult["items"][0]["desc"]="Описание 1";
}


// echo '<pre>';
// print_r($arResult);
// echo '</pre>';

$this->includeComponentTemplate();
?>