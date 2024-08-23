<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8" />
    </head>
    <body> 
        <?php
        $b = "Yappi";
        for ($ba = 1992; $ba <= date("Y"); $ba++){
            if ($ba == 1992) {
                echo '<div style="color:blue">';
            };
            if ($ba == date("Y")) {
                echo '<div style="color:blue">';
            };
            if ($ba == 2000) {
                echo str_replace('2000' , 'Yappi' , $ba);
            };
            echo $ba;
            echo '<br></div>';
        };
        
         ?>
    </body>    
</html>
