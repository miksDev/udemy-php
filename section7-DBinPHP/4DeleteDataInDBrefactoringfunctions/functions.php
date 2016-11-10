<?php include "db.php"; ?>
<?php

function showAllData() {
    global $connection; //make sure that the $connection is global
    
        //to select data to the database (to pull data into the database)
        $query = "SELECT * FROM user";
        $result = mysqli_query($connection, $query);
                //to check the query
                if (!$result) {
                    die('Query Failed' . mysql_error);
                }
        
        //query for select (to pull id in the database)
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
            }
    
}
//to UPDATE
function updateTable() {
    global $connection; //make sure that the $connection is global
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE user SET "; //dont forget to add space after the SET
        $query .= "username = '$username',"; //dont forget to add space after the variable
        $query .= "password = '$password'";
        $query .= "WHERE id = $id";
        
            //query to UPDATE the user table
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("Query failed" . mysql_error($connection));
            }
}

//to DELETE
function deleteRows() {
    global $connection; //make sure that the $connection is global
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM user "; //dont forget to add space after the SET
        $query .= "WHERE id = $id";
        
            //query to DELETE the user table
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("Query failed" . mysql_error($connection));
            }
}