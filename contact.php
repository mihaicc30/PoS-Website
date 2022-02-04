<?php
$servername='84.65.30.164';
$username='PUBCON';
$password='Pubcon123$';
$dbname = "pos_contact";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
};

if(isset($_POST['save'])) {
   $name = $_POST['name'].trim();
   $email = $_POST['email'].trim();
   $phone = $_POST['phone'].trim();
   $message = $_POST['message'].trim();


   $sql = " INSERT INTO `emails`(`name`, `email`, `phone`, `message`) VALUES
             (`name`,`clocked_in`,`clocked_out`,`total_time`) = ('$name', '$email', '$phone', '$message') ";

   mysqli_query($conn, $sql);
};
?>
