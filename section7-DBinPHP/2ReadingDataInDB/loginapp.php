<?php

    //Connect to the database (c9.io)
    $host = "127.0.0.1";
    $user = "miksdev";                  //Your Cloud 9 username
    $pass = "";                         //Remember, there is NO password by default!
    $db = "udemyloginapp";              //Your database name you want to connect to
    $port = 3306;                       //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    
    //to check the connection
    if ($connection) {
        echo "Connected";
    } else {
        die("Database connection failed");
    }
    
    //to select data to the database
    $query = "SELECT * FROM user";
    
    $result = mysqli_query($connection, $query);
        //to check the query
        if (!$result) {
            die('Query Failed' . mysql_error);
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login App</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="containter">
            <div class="col-sm-3">
                <h1 class = "text-center">READ</h1>
                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <pre>
                        <?php
                        print_r($row);
                        ?>
                        </pre>
                        <?php
                    }
                ?>
            </div>
        </div>
       
       
    </body>
</html>