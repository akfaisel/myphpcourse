<?php

// post variables from user input
$name =  $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

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

$query = "
            UPDATE tbl_users SET name='$name', username='$username', email='$email', password='$password'
            WHERE id='$id'
        ";
if(mysqli_query($connection, $query)){
    echo 'User updated successfully';
}
else {
    echo 'Error creating user - '.mysqli_error($connection);
}