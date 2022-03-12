<!DOCTYPE html>
<?php include('config.php'); ?>
<html lang="en">
<head>
  <title>EPB Wills 2020</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<style>
td {
  padding: 12px;
  text-align:center;
}
th{
	padding: 12px
	text-align:center;
}
table{
	width:100%;
	text-align:center;
}

</style>

</head>

<body>

<script src="../nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
     bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.addInstance('myInstance2');
     });
</script>


<?php
	$selected = mysqli_select_db($con, "atl_epb_wills_2020")
	or die("Could not select examples");

	$sql = "INSERT INTO Wills (member_id, willtype, tname, gender, tcounty, spousename, childnames, residual, e1name, e1relationship, e2name, e2relationship, g1name, g1relationship, g1city, g1state, g2name, g2relationship, g2city, g2state, trustee1name, trustee1city, trustee1state, trustee2name, trustee2city, trustee2state)
	VALUES
	('$_POST[memberid]','2', '$_POST[tname]', '$_POST[tGender]', '$_POST[tcounty]', '$_POST[spousename]', '$_POST[childnames]', '$_POST[residual]', '$_POST[e1name]', '$_POST[e1relationship]', '$_POST[e2name]', '$_POST[e2relationship]', '$_POST[g1name]', '$_POST[g1relationship]', '$_POST[g1city]', '$_POST[g1state]', '$_POST[g2name]', '$_POST[g2relationship]', '$_POST[g2city]', '$_POST[g2state]', '$_POST[trustee1name]', '$_POST[trustee1city]', '$_POST[trustee1state]', '$_POST[trustee2name]', '$_POST[trustee2city]', '$_POST[trustee2state]')";
	$result = mysqli_query($con,$sql);

?>

<header>
  <br><br>
  <h7>Please provide the following MemberID to Jamati member, and guide them to ATTORNEY waiting area:</h7>

  <table style="margin-left:auto;margin-right:auto;">
    <tr>
      <th style="text-align:right;"><h7>MemberID:</h7></th>
      <th style="text-align:left;"><h3><?php echo $_POST['memberid'] ?></h3></th>
    </tr>

  </table>
  <a href="../Wills.php">| H O M E |</a>
  <br><br><br><br>
</header>

  </body>
</html>
