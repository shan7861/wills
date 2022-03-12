<!DOCTYPE html>
<?php include('config.php'); ?>
<html lang="en">
<head>
  <title>EPB Wills 2020</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>

	<br>
	<header>
		<h3>Search Result</h3>
		<a href="../WillsEdits.php">| H O M E |</a>
	</header>

	<?php
	$memberid = $_POST['search_record'];
	$selected = mysqli_select_db($con, "atl_epb_wills_2020")
	or die("Could not connect to database");

	$query = "SELECT * FROM Wills WHERE member_id LIKE '%$memberid%'";
	$result = mysqli_query($con, $query);

	if (mysqli_num_rows($result)==0) {
            die("<br> No records found that matched MemberID: <b>" . $memberid . "</b>. Please check the MemberId and try again.");
         }
	else{
		/*echo "Successful query: " . $query . "<br />";*/
		while($row = mysqli_fetch_array($result))
			{
				$will = $row['willtype'];
				/*echo "Willtype = ".$will;*/
				if ($will==1)
				{
					?>
					<form action="../marriedwithnominor_will_edit.php" method="post">
						<fieldset id="field2">
							<p>
								<table style="width:100%">
								  <tr>
									<th>Member ID</th>
									<th>Name</th>
									<th>Will Type</th>
									<th> </th>
								  </tr>
								  <tr>
									<td> <input type="text" name="memberid" value="<?php echo $row['member_id'] ?>" readonly> </td>
									<td> <input type="text" name="tname" value="<?php echo $row['tname'] ?>" readonly> </td>
									<td> <input type="text" name="willtype" value="Married With No Minor" readonly> </td>
									<td><input type="submit" value="EDIT" id="input-submit">
									<input type="hidden" id="tGender" name="tGender" value="<?php echo $row['gender'] ?>">
									<input type="hidden" id="tcounty" name="tcounty" value="<?php echo $row['tcounty'] ?>">
									<input type="hidden" id="spousename" name="spousename" value="<?php echo $row['spousename'] ?>">
									<input type="hidden" id="childnames" name="childnames" value="<?php echo $row['childnames'] ?>">
									<input type="hidden" id="residual" name="residual" value="<?php echo $row['residual'] ?>">
									<input type="hidden" id="e1name" name="e1name" value="<?php echo $row['e1name'] ?>">
									<input type="hidden" id="e1relationship" name="e1relationship" value="<?php echo $row['e1relationship'] ?>">
									<input type="hidden" id="e2name" name="e2name" value="<?php echo $row['e2name'] ?>">
									<input type="hidden" id="e2relationship" name="e2relationship" value="<?php echo $row['e2relationship'] ?>">
									</td>
								  </tr>
								</table>
							</p>
						</fieldset>
					</form>
					<?php
				}
				elseif ($will==2)
				{
					?>
					<form action="../marriedwithminor_will_edit.php" method="post">
						<fieldset id="field2">
							<p>
								<table style="width:100%">
								  <tr>
									<th>Member ID</th>
									<th>Name</th>
									<th>Will Type</th>
									<th> </th>
								  </tr>
								  <tr>
									<td> <input type="text" name="memberid" value="<?php echo $row['member_id'] ?>" readonly> </td>
									<td> <input type="text" name="tname" value="<?php echo $row['tname'] ?>" readonly> </td>
									<td> <input type="text" name="willtype" value="Married With Minor" readonly> </td>
									<td><input type="submit" value="EDIT" id="input-submit">
									<input type="hidden" id="tGender" name="tGender" value="<?php echo $row['gender'] ?>">
									<input type="hidden" id="tcounty" name="tcounty" value="<?php echo $row['tcounty'] ?>">
									<input type="hidden" id="spousename" name="spousename" value="<?php echo $row['spousename'] ?>">
									<input type="hidden" id="childnames" name="childnames" value="<?php echo $row['childnames'] ?>">
									<input type="hidden" id="residual" name="residual" value="<?php echo $row['residual'] ?>">
									<input type="hidden" id="g1name" name="g1name" value="<?php echo $row['g1name'] ?>">
									<input type="hidden" id="g1relationship" name="g1relationship" value="<?php echo $row['g1relationship'] ?>">
									<input type="hidden" id="g1city" name="g1city" value="<?php echo $row['g1city'] ?>">
									<input type="hidden" id="g1state" name="g1state" value="<?php echo $row['g1state'] ?>">
									<input type="hidden" id="g2name" name="g2name" value="<?php echo $row['g2name'] ?>">
									<input type="hidden" id="g2relationship" name="g2relationship" value="<?php echo $row['g2relationship'] ?>">
									<input type="hidden" id="g2city" name="g2city" value="<?php echo $row['g2city'] ?>">
									<input type="hidden" id="g2state" name="g2state" value="<?php echo $row['g2state'] ?>">
									<input type="hidden" id="e1name" name="e1name" value="<?php echo $row['e1name'] ?>">
									<input type="hidden" id="e1relationship" name="e1relationship" value="<?php echo $row['e1relationship'] ?>">
									<input type="hidden" id="e2name" name="e2name" value="<?php echo $row['e2name'] ?>">
									<input type="hidden" id="e2relationship" name="e2relationship" value="<?php echo $row['e2relationship'] ?>">
									<input type="hidden" id="trustee1name" name="trustee1name" value="<?php echo $row['trustee1name'] ?>">
									<input type="hidden" id="trustee1city" name="trustee1city" value="<?php echo $row['trustee1city'] ?>">
									<input type="hidden" id="trustee1state" name="trustee1state" value="<?php echo $row['trustee1state'] ?>">
									<input type="hidden" id="trustee2name" name="trustee2name" value="<?php echo $row['trustee2name'] ?>">
									<input type="hidden" id="trustee2city" name="trustee2city" value="<?php echo $row['trustee2city'] ?>">
									<input type="hidden" id="trustee2state" name="trustee2state" value="<?php echo $row['trustee2state'] ?>">
								</td>
								  </tr>
								</table>
							</p>
						</fieldset>
					</form>
					<?php
				}
				else
				{
					?>
					<form action="../singlewill_edit.php" method="post">
						<fieldset id="field2">
							<p>
								<table style="width:100%">
								  <tr>
									<th>Member ID</th>
									<th>Name</th>
									<th>Will Type</th>
									<th> </th>
								  </tr>
								  <tr>
									<td> <input type="text" name="memberid" value="<?php echo $row['member_id'] ?>" readonly> </td>
									<td> <input type="text" name="tname" value="<?php echo $row['tname'] ?>" readonly> </td>
									<td> <input type="text" name="willtype" value="Single with no Minor" readonly>
									<input type="hidden" id="tGender" name="tGender" value="<?php echo $row['gender'] ?>">
									<input type="hidden" id="tcounty" name="tcounty" value="<?php echo $row['tcounty'] ?>">
									<input type="hidden" id="childnames" name="childnames" value="<?php echo $row['childnames'] ?>">
									<input type="hidden" id="residual" name="residual" value="<?php echo $row['residual'] ?>">
									<input type="hidden" id="e1name" name="e1name" value="<?php echo $row['e1name'] ?>">
									<input type="hidden" id="e1relationship" name="e1relationship" value="<?php echo $row['e1relationship'] ?>">
									<input type="hidden" id="e2name" name="e2name" value="<?php echo $row['e2name'] ?>">
									<input type="hidden" id="e2relationship" name="e2relationship" value="<?php echo $row['e2relationship'] ?>">
								</td>
									<td><input type="submit" value="EDIT" id="input-submit"></td>
								  </tr>
								</table>
							</p>
						</fieldset>
					</form>
					<?php
				}
			}
			mysqli_free_result($result);
		}
	mysqli_close($con);

?>
	<br>
	<footer>
		<p>EPB Wills Program 2020</p>
	</footer>
  </body>
</html>
