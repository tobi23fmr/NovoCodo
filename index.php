<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8" />
    </head>
    <body> 
        <?php
        echo "Hello world  ";
        echo "<br>"; 
        echo date("Y-m-d h:i:s");
        $age = date("Y") - 2018;
        $name = "Шелдон";
        $a = 1;
        $b = 2;
        echo "<br>"; 
        echo ($a+$b);
        echo "<br>"; 
        echo "Цикл: <br>";
        for ($i = 1; $i <= 10; $i++){
            if ($i == 5) {
                echo '<div style="color:orange">';
            } else {
                    echo '<div>';
            }
            echo $i;
            echo '</div>';
        };
        $cats=array(
            array(
            "Порода"=> "Двортерьер",
            "Возраст" => "2 года",
            "Цена" => "100"
            ), 
            array(
                "Порода"=> "Британцы",
                "Возраст" => "3 года",
                "Цена" => "1500"
                ),
            array(
                 "Порода"=> "Шотландцы",
                "Возраст" => "1 год",
                "Цена" => "5600"
                ),
        );
        $cats[3] = array(
                    "Порода"=> "Бенгальцы",
                    "Возраст" => "5 лет",
                    "Цена" => "4850"
        );
        echo '<pre>';
        print_r($cats);
        echo '</pre>';
        echo 'Общая сумма всех пород равна ';
        echo $cats[0]["Цена"] + $cats[1]["Цена"] + $cats[2]["Цена"];
        $tp = 0;
        for ($i = 0; $i < count($cats); $i++) {
            $tp = $tp + $cats[$i]["Цена"];
            echo '<br>';
        }
        echo 'Прям совсем полная сумма всех пород равна ';
        echo $tp;
        echo ' рублей';
        $q = 0;
        while($q <= 7){
            echo '<br> котик';
            $q = $q + 1;
        }
        $w = 0;
        foreach ($cats as $pr){
            $w = $w + $pr["Цена"];
            echo '<br>';
        }
        echo $w;
        foreach ($cats as $v){
            if (($v["Цена"] < 200 or $v["Цена"] > 5000) or $v["Возраст"] == "5 лет") {
                echo '<br>';
                echo $v["Порода"];
                echo '<br>';
            }
            
        }
        function gettime(){
            return date("i") +2;
        }
        function dogs($porodi, $rost){
            echo $porodi ."! (рост: '" . $rost . "')" . gettime() ."<br>";
        }
        dogs("Доберманы", 3);
        dogs("Пекинесы", 1);
        ?>
        <p>Моему коту <? echo $name; ?> <? echo $age;?> лет</p>
        <p><a href="index.html">Вернись обратно!</a></p>
    </body>    
</html>
