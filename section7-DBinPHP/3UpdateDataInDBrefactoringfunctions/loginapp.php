<?php include "db.php"; ?>
<?php include  "functions.php"; ?>

<?php
    if (isset($_POST['update'])) {
        updateTable(); //UPDATE Function
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
                <h1 class="text-center">UPDATE</h1>
                 <form action="loginapp.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="id" id="">
                            <?php
                                showAllData() //query for select (to pull id in the database) [make sure to include the db into the function]
                            ?>
                        </select>
                    </div>
                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
       
       
    </body>
</html>