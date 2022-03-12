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
		<h3>Married Couple with no Minor Children</h3>
		<a href="../Wills.php">| H O M E |</a>
	</header>

	<form action="../Marriedwithnominor_confirm.php" method="post">
	<br>
		<br> <fieldset id="field2">
			<legend><b>Member ID: <span style="color:red">*</span> <a href="#" class="tip"> <a href="#" class="tip"><img src="helpicon.png" alt="HELP" width="20" height="20"> <span> Member ID is going to be an unique value, this is how their information will be linked in our system. So we can go back and search for their data to generate a will. </span> </a> </b></legend>
			<p>
				<label>
					<input type="text" name="memberid" placeholder="PhoneNumber + Initial of First and LastName" onkeyup="this.value = this.value.toUpperCase();" required>
				</label>
			</p>
		</fieldset>
		<br> <fieldset id="field2">
			<legend><b>Testator Information: <span style="color:red">*</span> <a href="#" class="tip"> <a href="#" class="tip"><img src="helpicon.png" alt="HELP" width="20" height="20"> <span> Individual, for who you are creating this will for. </span> </a> </b></legend>
			<p>
				<label>
					<input type="text" name="Testator_firstname" placeholder="First Name" required>
				</label>

				<label>
					<input type="text" name="Testator_lastname" placeholder="Last Name" required>
				</label>
			</p>

      <table style="width:30%;" valign="center">
        <tr>
        <th rowspan="2"><legend><b>Gender: <span style="color:red">*</span></b></legend></th>
        <td ><input type="radio" name="gender" value="Male" required></td>
        <td>Male</td>
        </tr>
        <tr>
        <td><input type="radio" name="gender" value="Female" required></td>
        <td>Female</td>
        </tr>
      </table>

      <?php
      $selected = mysqli_select_db($con, "atl_epb_wills_2020")
      or die("Could not connect to database");

      $query = "SELECT * FROM county_db";
      $result = mysqli_query($con, $query);

      ?>

      <table style="width:30%;" valign="center">
        <tr>
        <th rowspan="2"><legend><b>County: <span style="color:red">*</span></b></legend></th>
        <td ><label>
        <select name="county" required>
        <option value="">Select</option>
        <?php

        while($row=mysqli_fetch_array($result))
        {
         ?>
        <option value="<?php echo $row["county"]; ?>"><?php echo $row["county"]; ?></option>
        <?php
        }
        ?>
      </select>
        </label></td>

        </tr>

      </table>
		</fieldset>



		<br> <fieldset id="field2">
			<legend><b>Spouse Information: <span style="color:red">*</span> <a href="#" class="tip"> <a href="#" class="tip"><img src="helpicon.png" alt="HELP" width="20" height="20"> <span> Significant other to whom Testator is married to. </span> </a> </b></legend>

				<label>
					<input type="text" name="Spouse_firstname" placeholder="First Name"  required>
				</label>

				<label>
					<input type="text" name="Spouse_lastname" placeholder="Last Name" required>
				</label>

		</fieldset>

		<br> <fieldset id="field2">
			<legend><b>Children/Beneficiary Information: <a href="#" class="tip"> <a href="#" class="tip"><img src="helpicon.png" alt="HELP" width="20" height="20"> <span> Children of Testator, if there are more than 5 children, Please add them on the next page, before you submit the form. </span> </a> </b></legend>
					<table style="width:100%">
					  <tr>
						<td>Child/Beneficiary 1</td>
						<td><input type="text" name="child1_firstname" placeholder="First Name" ></td>
						<td><input type="text" name="child1_lastname" placeholder="Last Name" ></td>
					  </tr>
					  <tr>
						<td>Child/Beneficiary 2</td>
						<td><input type="text" name="child2_firstname" placeholder="First Name" ></td>
						<td><input type="text" name="child2_lastname" placeholder="Last Name" ></td>
					  </tr>
					  <tr>
						<td>Child/Beneficiary 3</td>
						<td><input type="text" name="child3_firstname" placeholder="First Name" ></td>
						<td><input type="text" name="child3_lastname" placeholder="Last Name" ></td>
					  </tr>
					  <tr>
						<td>Child/Beneficiary 4</td>
						<td><input type="text" name="child4_firstname" placeholder="First Name" ></td>
						<td><input type="text" name="child4_lastname" placeholder="Last Name" ></td>
					  </tr>
					  <tr>
						<td>Child/Beneficiary 5</td>
						<td><input type="text" name="child5_firstname" placeholder="First Name" ></td>
						<td><input type="text" name="child5_lastname" placeholder="Last Name" ></td>
					  </tr>
					</table>
		</fieldset>

	<br> <fieldset id="field2">
			<legend><b>Residual Information: <span style="color:red">*</span> <a href="#" class="tip"> <a href="#" class="tip"><img src="helpicon.png" alt="HELP" width="20" height="20"> <span> A person who receives any property by a <b>will</b> or trust that is not specifically left to another designated <b>beneficiary</b>. For example, if Karim makes a <b>will</b> leaving his home to Sharmeen and the remainder of his property to Aga Khan Foundation, then Aga Khan Foundation is the <b>residuary beneficiary</b>. </span> </a> </b></legend>
			<p>
				<label>
					<input type="text" name="Residual" value="Aga Khan Foundation" placeholder="Residual" required>
				</label>
			</p>
	</fieldset>

	<br> <fieldset id="field2">
			<legend><b>Executor Information: <span style="color:red">*</span> <a href="#" class="tip"> <a href="#" class="tip"><img src="helpicon.png" alt="HELP" width="20" height="20"> <span> Trusted person that represents you to fulfill the wishes in your <b>WILL</b> after your death. </span> </a> </b></legend>
				<br> <fieldset>
					<legend>Executor 1</legend>
					<p>
						<label>
							<input type="text" name="Executor1_firstname" placeholder="First Name" required>
						</label>

						<label>
							<input type="text" name="Executor1_lastname" placeholder="Last Name" required>
						</label>
					</p>
					<p> Relationship:
						<label>
							<input type="text" name="Executor1_relationship" placeholder="Relationship" required>
						</label>
					</p>
				</fieldset>
				<br> <fieldset>
				<legend>Executor 2</legend>
					<p>
						<label>
							<input type="text" name="Executor2_firstname" placeholder="First Name" required>
						</label>

						<label>
							<input type="text" name="Executor2_lastname" placeholder="Last Name" required>
						</label>
					</p>
					<p> Relationship:
						<label>
							<input type="text" name="Executor2_relationship" placeholder="Relationship" required>
						</label>
					</p>
				</fieldset>
		</fieldset>
		<br>
		<input type="submit" value="Confirm" id="input-submit">
		<input type="reset" id="input-submit">
	</form>
	<br>
	<footer>
		<p>EPB Wills Program 2020</p>
	</footer>
  </body>
</html>
