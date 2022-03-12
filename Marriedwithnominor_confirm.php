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
		<h3>Confirm Data for Married with no Minor Member</h3>
		<a href="../Wills.php">| H O M E |</a>
	</header>
	<?php
		$memberid = $_POST['memberid'];

		// Check username
		$query = "SELECT COUNT(*) FROM Wills WHERE member_id='$memberid';";

		$result = mysqli_query($con,$query);
		$row = mysqli_num_rows($result);

		if ($row > 1)
		{
			 $message = "MemberID you have entered is alredy in use. Please use different MemberID";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

		if (isset($_POST['gender']))
		{
			$tGender = $_POST['gender'];
		}
		if($tGender == "Male")
		{
			$tGender_pronoun = "His";
		}
		else
		{
			$tGender_pronoun = "Her";
		}
	?>
	<form action="../marriedwithnominor_will.php" style="border:none" method="post">
			<fieldset id="field2">
			<legend><b>Data Confirmation:</b></legend>
			<p>
				<label>
					<fieldset >
						<legend> Testator Information </legend> <br>
						Member ID: <input type="text" name="memberid" value="<?php echo $_POST['memberid'] ?>"><br>
						Testator Name: <input type="text" name="tname" value="<?php echo $_POST['Testator_firstname']?> <?php echo $_POST['Testator_lastname'] ?>"><br>
						Testator Gender Pronoun: <input type="text" name="tGender" value="<?php echo $tGender_pronoun ?>" ><br>
						Testator County: <input type="text" name="tcounty" value="<?php echo $_POST['county'] ?>" ><br>
					</fieldset>

					<fieldset>
						<legend> Spouse Information </legend><br>
						Spouse Name: <input type="text" name="spousename" value="<?php echo $_POST['Spouse_firstname']?> <?php echo $_POST['Spouse_lastname'] ?>" ><br>
					</fieldset>

					<fieldset>
						<legend> Children/Beneficiary Informaton </legend> <br>
						Child1:  <input type="text" name="childnames" value="<?php
						if(strlen($_POST['child1_firstname']) != 0){echo $_POST['child1_firstname'].' ';} if(strlen($_POST['child1_lastname']) != 0){echo $_POST['child1_lastname'];}
						if(strlen($_POST['child2_firstname']) != 0){echo ', '.$_POST['child2_firstname'].' ';} if(strlen($_POST['child2_lastname']) != 0){echo $_POST['child2_lastname'];}
						if(strlen($_POST['child3_firstname']) != 0){echo ', '.$_POST['child3_firstname'].' ';} if(strlen($_POST['child3_lastname']) != 0){echo $_POST['child3_lastname'];}
						if(strlen($_POST['child4_firstname']) != 0){echo ', '.$_POST['child4_firstname'].' ';} if(strlen($_POST['child4_lastname']) != 0){echo $_POST['child4_lastname'];}
						if(strlen($_POST['child5_firstname']) != 0){echo ', '.$_POST['child5_firstname'].' ';} if(strlen($_POST['child5_lastname']) != 0){echo $_POST['child5_lastname'];}
						?>"
					</fieldset>

					<fieldset>
						<legend> Residual Information </legend><br>
						Residual: <input type="text" name="residual" value="<?php echo $_POST['Residual'] ?>" ><br>
					</fieldset>

					<fieldset>
						<legend> Executor Information </legend><br>
						Executor 1  <input type="text" name="e1name" value="<?php echo $_POST['Executor1_firstname']?> <?php echo $_POST['Executor1_lastname'] ?>" > Relationship is <input type="text" name="e1relationship" value="<?php echo $_POST['Executor1_relationship'] ?>" > <br>
						Executor 2  <input type="text" name="e2name" value="<?php echo $_POST['Executor2_firstname']?> <?php echo $_POST['Executor2_lastname'] ?>" > Relationship is <input type="text" name="e2relationship" value="<?php echo $_POST['Executor2_relationship'] ?>" > <br>
					</fieldset>
				</label>
			</p>
		</fieldset>
	<input type="submit" value="Submit" id="input-submit">
</form>

	<br>
	<footer>
		<p>EPB Wills Program 2020</p>
	</footer>
  </body>
</html>
