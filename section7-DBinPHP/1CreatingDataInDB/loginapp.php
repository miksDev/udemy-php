<?php
    //fetch the login form value
    if (isset($_POST[submit])) {
        $username = $_POST[username];
        $password = $_POST[password];
        
    //Connect to the database (c9.io)
    $host = "127.0.0.1";
    $user = "miksdev";                  //Your Cloud 9 username
    $pass = "";                         //Remember, there is NO password by default!
    $db = "udemyloginapp";              //Your database name you want to connect to
    $port = 3306;                       //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    
    //to insert data to the database
    $query = "INSERT INTO user(username,password)";
    $query .="VALUE ('$username','$password')";
    
    $result = mysqli_query($connection, $query);
        //to check the query
        if (!$result) {
            die('Query Failed' . mysql_error());
        }else {
            echo 'Record created';
        }
        
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
                <h1 class = "text-center">Insert Data</h1>
                <form action="loginapp.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                        <br>
                    </div>
                        <input type="submit" name="submit" value="Create" class="btn btn-primary">
                </form>
            </div>
        </div>
       
       
    </body>
</html>