<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8" />
    </head>
    <body> 
        <?php
            // echo '<pre>';
            // print_r($_GET);
            // echo "Привет! ". $_GET['firstname']. ' '. $_GET['lastname'];
            // echo '</pre>';
            
            echo '<pre>';
            print_r($_POST);
            if ($_POST["iq"] == 'on') echo '<div style="color:red">';
            echo "Привет! ". $_POST['firstname']. ' '. $_POST['lastname'];
            echo '</pre>'; 
        ?>
    </body>    
</html>