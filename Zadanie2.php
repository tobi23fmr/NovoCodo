<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8" />
    </head>
    <body> 
        <?php
            $bpx = 9;
            for ($ba = $_POST["birthage"]; $ba <= date("Y"); $ba++){
                    $bpx = $bpx + 1;
                    if ($ba == $_POST["birthage"] or $ba == date("Y")) {
                        echo '<div style="color:blue; font-size:' . $bpx . 'px">' . $ba . '<br></div>' ;
                    } else {
                        if ($ba == 2000) {
                            echo '<div style="color:red; font-size:' . $bpx . 'px"> Ура двухтысячные!!!!!!!<br></div>';
                        }  else {
                            if ($ba == 2007 and $_POST["birthage"] >= 2001) {
                                echo '<div style="color:purple; font-size:' . $bpx . 'px"> Верните мне мой 2007!!!!!!!<br></div>';
                            } else {
                                echo '<div style="font-size:' . $bpx . 'px">' . $ba . '<br></div>' ;
                                }
                            }
                        }
            }    
        ?>
    </body>    
</html>
