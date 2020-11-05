<?php
//print_r($_POST);

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
?>
<h1>Registration Successful</h1>
<p>You have successfully registered on our website. Details given below.</p>
<p>Your username is <?php echo $username; ?></p>
<p>Your email is <?php echo $email; ?></p>
<a href="register.php">Click Here</a>
<?php
//foreach($_POST as $data){
    //echo $data; <day1 class="1"></day1>..
//}
?>
