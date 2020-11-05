<?php

// post variables from user input
$name =  $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// database credential
$server_name = 'localhost';
$server_username = 'root';
$server_password = 'root';
$db_name = 'myphpcourse';

//connect to database
$connection = mysqli_connect($server_name, $server_username, $server_password, $db_name);
if(!$connection){
    die('Error in connection');
}
else {
    echo 'Connected Successfully';
}
//INSERT INTO table_name (column1, column2, column3, ...)
//VALUES (value1, value2, value3, ...);

$query = "INSERT INTO tbl_users (name, username, email, password) 
          VALUES ('$name', '$username', '$email', '$password')
         ";
if(mysqli_query($connection, $query)){
    echo 'User Created Successfully';
}
else {
    echo 'Error creating user - '.mysqli_error($connection);
}
?>