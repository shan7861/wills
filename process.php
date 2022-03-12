

<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "atl_epb_wills_2020"; /* Database name */

$db = mysqli_connect($host, $user, $password,$dbname);
  $memberid = "";

  if (isset($_POST['register']))
  {
  	$memberid = $_POST['memberid'];

  	$sql_u = "SELECT * FROM atl_epb_wills_2020 WHERE memberid='$memberid'";
  	$res_u = mysqli_query($db, $sql_u);
    echo $res_u;
  	if (mysqli_num_rows($res_u) > 0)
    {
  	  $name_error = "Sorry... username already taken";
  	}else
    {
  	  $name_error = "Great... memberid is Good";
  	}
    exit();
  }
?>
