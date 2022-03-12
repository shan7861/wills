<html>
  <head>
    <title>MySQL Test</title>
  </head>
  <body>
    <?php
	$server = "localhost";
	$user = "root";
	$pw = "";
	$db = "atl_epb_wills_2020";
	
	$connect=mysqli_connect($server, $user, $pw, $db);
     
	if( !$connect)
	{
		die("ERROR: Cananot connect to database $db on server #$server using user name $user (".mysqli_connect_errno().", ".mysqli_connect_error().")");
	}
	else
	{
		echo "Connected to $db<br />";
	}
      mysqli_connect("localhost", "root", 
         "") or
         die(mysqli_error());
      echo "Connected to MySQL<br />";
      mysqli_select_db($connect, "atl_epb_wills_2020") or die();
      echo "Connected to Database";
?>
  </body>
</html>
