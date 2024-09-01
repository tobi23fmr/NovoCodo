<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8" />
    </head>
    <body> 
        <?php
            $bpx = 9;
            for ($ba = 1992; $ba <= date("Y"); $ba++){
                    $bpx = $bpx + 1;
                    if ($ba == 1992 or $ba == date("Y")) {
                        echo '<div style="color:blue; font-size:' . $bpx . 'px">' . $ba . '<br></div>' ;
                    } else {
                        if ($ba == 2000) {
                            echo '<div style="color:red; font-size:' . $bpx . 'px"> Ура двухтысячные!!!!!!!<br></div>';
                        }  else {
                                echo '<div style="font-size:' . $bpx . 'px">' . $ba . '<br></div>' ;
                                };
                            };
            }    
        ?>
    </body>    
</html>
