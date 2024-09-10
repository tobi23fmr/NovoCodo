<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?
// echo '<pre>';
// print_r($arResult);
// echo '</pre>';

foreach($arResult["items"] as $key=>$value){
	// echo '<pre>';
	// print_r($value);
	// echo '</pre>';

	echo '<b>' .$value["NAME"].'</b><br>';
	if ($value["PREVIEW_TEXT"]) echo $value["PREVIEW_TEXT"].'<br>';
	echo '<br>';
}
?> 

