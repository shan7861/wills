<?php

include 'config.php';

$uname = $_POST['uname'];

// Check username
$query = "select count(*) as cntUser from married_with_minor where memberid='".$uname."'";

$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

// Return total rows found
echo $count;
