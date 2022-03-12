<!DOCTYPE html>
<html lang="en">
<head>
  <title>EPB Wills 2020</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<style>
td {
  padding: 12px;
}
th{
	padding: 12px
	text-align:center;
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

<?php $filename1 = $_POST['memberid'] ?>

<script>
var FileN = '<?php echo $filename1; ?>';
function myFunction() {
  var content = document.documentElement.innerHTML;
  download(content, FileN , "html")

}
function download(content, fileName, fileType) {
  var link = document.getElementById("donwload-link");
  var file = new Blob([content], {type: "html"});
  var donwloadFile = fileName + "." + fileType;
  link.href = URL.createObjectURL(file);
  link.download = donwloadFile
}
</script>

<div id ="printbtn">
<input id ="printbtn" type="button" value="Print" onclick=window.print() style="background-color: green; font: 14px Arial; color: white;">
&nbsp&nbsp
<input id ="printbtn" type="button" value="Home" onclick="window.location.href = '../WillsEdits.php';" style="background-color: blue; font: 14px Arial; color: white;">
&nbsp&nbsp
<a href ="#" id="donwload-link" onClick="myFunction()" style="font: 14px Arial; padding: 2px 6px 2px 6px;
background-color: red;
color: white;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;">Save As</a>
  &nbsp&nbsp&nbsp&nbsp MemberID: <script type="text/javascript">
        document.write(FileN)
      </script>
</div>

<span id="myInstance2">


  <h4>LAST WILL AND TESTAMENT</h4>
<h4>OF</h4>
<h4><?php echo $_POST['tname']?></h4>

<div style="text-indent: 2em;">I, <b><?php echo $_POST['tname']?></b>, a resident of <b><?php echo $_POST['tcounty']?></b> County, Georgia, make, publish and declare this to be my Last Will and Testament, hereby revoking all Wills and codicils at any time heretofore made by me.</div>

<h5>ITEM II</h5>

<p style="text-indent: 2em;">(a) <span style="padding-left: 20px;">As of the date of the making of this Will, I am married to <b><?php echo $_POST['spousename']?></b></span></p>
<p style="text-indent: 2em;">(b) <span style="padding-left: 20px;">The names of my currently living children are <b><?php echo $_POST['childnames']?></b>.</span> As used herein, the terms “child,” “children,” “descendant” and “descendants” refer at any given time only to persons specifically named herein or persons who prior to that time were (i) born in wedlock, (ii) born out of wedlock to parents who subsequently married each other, (iii) born out of wedlock to a parent who acknowledged to any fiduciary serving hereunder by signed written instrument that such person is his or her natural child, or (iv) legally adopted before reaching the age of eighteen (18) years. The provisions of this Will are made in contemplation of the possible birth or adoption of a child or children and shall not be revoked by any such event.</p>

<h5>ITEM III</h5>

<div style="text-indent: 2em;">I direct that all of my due and payable debts, the expenses of my last illness and funeral, the expenses of the administration of my estate, all estate, inheritance and similar taxes payable with respect to property included in my probate estate, any interest or penalties thereon, and any unpaid charitable pledges, whether or not such pledges are legally enforceable, shall be paid out of my residuary estate, without apportionment and with no right of reimbursement from any recipient of any such property, provided, however, that my Executor may make claim for any taxes imposed upon my estate for any property included in my gross estate but passing outside this Will to someone other than my residuary beneficiaries.</div>

<h5>ITEM IV</h5>
<div>I give all  of my property and estate, both real and personal, of whatever kind and wherever located, including any lapsed or void legacy or devise, (but not including any property over which I may have the power of disposition or appointment) that I own or to which I shall be in any manner entitled at the time of my death (collectively referred to as my “residuary estate”), to my spouse,  <b><?php echo $_POST['spousename']?></b> . If my spouse does not survive me, then to my children equally, <b><?php echo $_POST['childnames']?></b>, per stirpes. If at the time of my death there should be no beneficiary to take the property passing under this Item, then the property for which there is no named or described beneficiary shall be distributed to <b><?php echo $_POST['residual']?></b>.

<h5>ITEM V</h5>

<p style="text-indent: 2em;">a.	<span style="padding-left: 20px;">I appoint my <b><?php echo $_POST['e1relationship']?></b>, <b><?php echo $_POST['e1name']?></b>, to be my Executor hereunder.  If my named Executor shall fail to qualify for any reason or having qualified, shall die, resign or cease to act for any reason, then I appoint my <b><?php echo $_POST['e2relationship']?></b>, <b><?php echo $_POST['e2name']?></b>, as successor to my Executor.</span></p>

<p style="text-indent: 2em;">b.	<span style="padding-left: 20px;">I direct that no Executor shall be required to file or furnish any bond, surety or other security in any jurisdiction, nor shall my Executor be required to file any inventory or other reports with any court.</span></p>

<p style="text-indent: 2em;">c.	<span style="padding-left: 20px;">No Executor serving hereunder shall be required to inquire into or audit the acts or doings of any predecessor Executor or to make claim against any such predecessor or the estate of such predecessor. </span></p>

<p style="text-indent: 2em;">d.	<span style="padding-left: 20px;">Any successor Executor shall have and may exercise all of the powers, privileges, immunities and exemptions conferred upon the predecessor Executor as fully and to the same extent as if such successor had originally been named as Executor hereunder.</span></p>

<h5>ITEM VI</h5>

<div style="text-indent: 2em;">In the management, care, and disposition of my estate and of every trust, I confer upon the Executor of this Will, and its successors in office, the power to do all things and execute such instruments as may be deemed necessary or proper, including the powers set out in the Official Code of Georgia Annotated Section 53-12-261, as amended to the date of execution of this Will, which powers are incorporated by reference herein. All such powers may be exercised without order of or report to any court. <div>

<h5>ITEM VII</h5>

<div style="text-indent: 2em;">I direct that, for purposes of this Will, a beneficiary shall be deemed to predecease me unless such beneficiary survives me by more than thirty (30) days.</div>
<p></p>
<br>
<div style="text-indent: 2em;"><b>IN WITNESS WHEREOF,</b> I have hereunto set my hand and affixed my seal to this, my Will, this _____ day of ___________	20___.</div>

<br>
<div style="text-align: right;">_________________________</div>
<div style="text-align: right; vertical-align: top">Signature</div>
<p></p>
<div style="text-align: right;">_________________________</div>
<div style="text-align: right; vertical-align: top">Print Name</div>

<div style="page-break-before: always"><div>
<div style="text-indent: 2em;"> The foregoing instrument was signed, sealed, published and declared by <b><?php echo $_POST['tname']?></b>, the above-named testator, to be such testator’s last Will and testament in our presence, all being present at the same time, and we, at such testator’s request and in such testator’s presence and in the presence of each other, have subscribed our names as witnesses on the date above written.</div>
<br>
<table>
<tr>
  <th>WITNESSES:</th>
  <th>ADDRESSES:</th>
</tr>
<tr>
  <td>_______________________________________</td>
  <td>_______________________________________ </td>
</tr>
<tr>
  <td>Print Name:___________________________</td>
  <td>_______________________________________ </td>
</tr>
<tr>
  <td>_______________________________________ </td>
  <td>_______________________________________ </td>
</tr>
 <tr>
  <td>Print Name:___________________________</td>
  <td> _______________________________________</td>
</tr>
</table>


<div style="page-break-before: always"><div>
<h5>SELF-PROVING AFFIDAVIT</h5>

<div>STATE OF GEORGIA</div>
<div>COUNTY OF GWINNETT</div>
<p></p>
  <div style="text-indent: 2em;"> Before me, the undersigned authority, on this day personally <b><?php echo $_POST['tname']?></b>, _______________________, and _______________________, known to me to be the testator and the witnesses, respectively, whose names are subscribed to the annexed or foregoing instrument in their respective capacities, and, all of said persons being by me duly sworn, <b><?php echo $_POST['tname']?></b>, testator, declared to me and to the said witnesses in my presence that said instrument is <b><?php echo $_POST['tGender']?></b> last will and testament and that <b><?php echo $_POST['tGender']?></b> had willingly made and executed it as <b><?php echo $_POST['tGender']?></b> free act and deed for the purposes therein expressed. The witnesses, each on his or her oath, stated to me in the presence and hearing of the testator that the testator had declared to them that the instrument is <b><?php echo $_POST['tGender']?></b> last will and testament and that <b><?php echo $_POST['tGender']?></b> executed same as such and wanted each of them to sign it as a witness; and upon his or her oath each witness stated further that he or she did sign the same as witness in the presence of the testator and at <b><?php echo $_POST['tGender']?></b> request; that <b><?php echo $_POST['tGender']?></b> was at that time 14 years of age or over and was of sound mind; and that each of said witnesses was then at least 14 years of age. </div>
<br>
<div style="text-align: right; vertical-align: top">_____________________________</div>
<div style="text-align: right; vertical-align: top"><b><?php echo $_POST['tname']?></b>, Testator </div>
<table>
  <tr>
    <td style="text-align: center;">_____________________________</td>
    <td style="text-align: center;">_____________________________ </td>
  </tr>
  <tr>
    <td><div style="text-align: center; vertical-align: top">WITNESS</div></td>
    <td><div style="text-align: center; vertical-align: top">WITNESS</div></td>
  </tr>
</table>
  </table>

  <div style="text-indent: 2em;">Sworn to and subscribed before me by <b><?php echo $_POST['tname']?></b>, testator, and sworn to and subscribed before me by the above-named witnesses, this _____ day of _________________, 20____.<div>

<br><br>
<div style="text-align: right;">_________________________</div>
<div style="text-align: right;">Notary Public</div>
<div style="text-align: right;">My Commission Expires:</div>

</span>
</div>
</body>
</html>
