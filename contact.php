<?php
$servername='84.65.30.164';
$username='PUBCON';
$password='Pubcon123$';
$dbname = "pos_contact";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
};

if(isset($_POST['contact_formz'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];


   $sql = " INSERT INTO `emails`(`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message') ";

   mysqli_query($conn, $sql);
};
?>
