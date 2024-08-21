<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8" />
    </head>
    <body> 
        <?php
        for ($ba = 1992; $ba <= date("Y"); $ba++){
            if ($ba == 1992) {
                echo '<div style="color:purple ">';
            } else {
                    echo '<div>';
                    if ($ba == date("Y")) {
                        echo '<div style="color:purple">';
                    } else {
                            echo '<div>';
                            if ($ba == 2000) {
                                $ba = 0;
                                echo "Yappi";                        
                            } else {
                                echo '<div>';# code...
                            }
                    }
            }
            echo $ba;
            echo '<br></div>';
        };
        ?>

    </body>    
</html>
