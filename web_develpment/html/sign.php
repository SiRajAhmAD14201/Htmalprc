<?php
$fullname=$_POST['fname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_post['pass'];
$Cpassword=$_post['cpass'];
$conn=mysqli_connect('localhost','root','','bsse4a');
$query="insert into signup value('$fullname','$username','$email','$password','$Cpassword')";
mysqli-query($conn,$query);
?>