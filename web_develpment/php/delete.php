<?php
$id=$_GET['dlt'];
$con=mysqli_connect(localhost,root,'',bsse4a);
$query="Delete from customer where customer_id='$id'";
mysqli-query($con,$query);?>
<script>alert("record delete successfully");</script>
<meta http_equiv="refresh" content="0,url=view.php">