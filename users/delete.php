<?php
// get the id from the url
$id = $_GET['id'];

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

$query = "DELETE FROM tbl_users WHERE id=".$id;
if(mysqli_query($connection, $query)){
    echo 'User deleted successfully';
}
else {
    echo 'Error deleting user - '.mysqli_error($connection);
}