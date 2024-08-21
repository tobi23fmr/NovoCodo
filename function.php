<?
$str = "Олег Житний Константинович жил был пес";
$formatedtext = explode(" ", $str);
echo '<pre>';
print_r($formatedtext);
echo '</pre>';
echo $formatedtext[0];
$str1 = "Олег      ";
echo '<br>' . rtrim($str1);
?>