<!DOCTYPE html>
<?php include('config.php'); ?>
<html lang="en">
<head>
  <title>EPB Wills 2020</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">


<style>
td {
  padding: 12px;
}
th{
	padding: 12px
}
table{
	width:100%;
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

	$sql = "INSERT INTO Wills (member_id, willtype, tname, gender, tcounty, spousename, childnames, residual, e1name, e1relationship, e2name, e2relationship)
	VALUES
	('$_POST[memberid]','1', '$_POST[tname]', '$_POST[tGender]', '$_POST[tcounty]', '$_POST[spousename]', '$_POST[childnames]', '$_POST[residual]', '$_POST[e1name]', '$_POST[e1relationship]', '$_POST[e2name]', '$_POST[e2relationship]')";
	$result = mysqli_query($con,$sql);
	$filename1 = "$_POST[memberid]";
?>

<script>
var FileN = <?php echo $filename1 ?>;
function myFunction() {
  var content = document.documentElement.innerHTML;
  download(content, FileN, "html")

}
function download(content, fileName, fileType) {
  var link = document.getElementById("donwload-link");
  var file = new Blob([content], {type: "html"});
  var donwloadFile = fileName + "." + fileType;
  link.href = URL.createObjectURL(file);
  link.download = donwloadFile
}
</script>

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
