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

<?php $filename1 = $_POST['memberid'] ?>

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

<div id ="printbtn">
<input id ="printbtn" type="button" value="Print" onclick=window.print()>
<input id ="printbtn" type="button" value="Home" onclick="window.location.href = '../Wills.php';">
<a href ="#" id="donwload-link" onClick="myFunction()">Save As</a>
</div>

<span id="myInstance2">

		<h4>LAST WILL AND TESTAMENT</h4>
<h4>OF</h4>
 <h4><?php echo $_POST['tname']?></h4>

<div style="text-indent: 2em;">I, <b><?php echo $_POST['tname']?></b>, a resident of <b><?php echo $_POST['tcounty']?></b> County, Georgia, make, publish and declare this to be my Last Will and Testament, hereby revoking all Wills and codicils at any time heretofore made by me.</div>

<h5>ITEM II</h5>

<div style="text-indent: 2em;">(a) <span style="padding-left: 20px;">As of the date of the making of this Will, I am married to <b><?php echo $_POST['spousename']?></b> (hereinafter referred to as my “Spouse”).</span></div> <p></p>
<div style="text-indent: 2em;">(b) <span style="padding-left: 20px;">The names of my currently living children are <b><?php echo $_POST['childnames']?></b>.</span> As used herein, the terms “child,” “children,” “descendant” and “descendants” refer at any given time only to persons specifically named herein or persons who prior to that time were (i) born in wedlock, (ii) born out of wedlock to parents who subsequently married each other, (iii) born out of wedlock to a parent who acknowledged to any fiduciary serving hereunder by signed written instrument that such person is his or her natural child, (iv) any children who may hereafter be born to, or adopted by, me, or (v) legally adopted before reaching the age of eighteen (18) years. The provisions of this Will are made in contemplation of the possible birth or adoption of a child or children and shall not be revoked by any such event.</div>

<h5>ITEM III</h5>

<div style="text-indent: 2em;">I direct that all of my due and payable debts, the expenses of my last illness and funeral, the expenses of the administration of my estate, all estate, inheritance and similar taxes payable with respect to property included in my probate estate, any interest or penalties thereon, and any unpaid charitable pledges, whether or not such pledges are legally enforceable, shall be paid out of my residuary estate, without apportionment and with no right of reimbursement from any recipient of any such property, provided, however, that my Executor may make claim for any taxes imposed upon my estate for any property included in my gross estate but passing outside this Will to someone other than my residuary beneficiaries.</div>

<h5>ITEM IV</h5>

<p style="text-indent: 2em;">(a)	<span style="padding-left: 20px;">I give all of my property and estate, both real and personal, of whatever kind and wherever located, including any lapsed or void legacy or devise, (but not including any property over which I may have the power of disposition or appointment) that I own or to which I shall be in any manner entitled at the time of my death (collectively referred to as my “residuary estate”), to my Spouse, <b><?php echo $_POST['spousename']?></b>, if my Spouse survives me, and if my Spouse fails to survive me, then to the Trustee, as Trustee, upon the uses and trusts hereinafter set out.</span></p>

<p style="text-indent: 2em;">(b)	<span style="padding-left: 20px;">My Trustee shall distribute so much of the corpus of the trust as it may deem necessary for the support, maintenance, health, and education of my lineal descendants, taking into account other sources of support which are available to said beneficiaries and known to the Trustee. Said distributions may be in any amount or proportion in any year or years that the Trustee deems appropriate without requirement of equalization from year to year, or between individuals or classes of beneficiaries. The Trustee shall not be liable, however, if any distributions exceed the share to which such child or such child’s descendants shall ultimately become entitled.</span></p>

<p style="text-indent: 2em;">(c)	<span style="padding-left: 20px;">When either my oldest child has attained age eighteen (18), or all my children shall have sooner died, my Trustee shall divide the remaining trust estate into a sufficient number of equal shares in order to allocate one such share to each then living child of mine and one such share to each deceased child of mine who has then living lineal descendants. The judgment of my Trustee as to the value and specific property to be allocated to each share shall be final and conclusive on all parties. </span></p>

<p style="text-indent: 2em;">(d)	<span style="padding-left: 20px;">My Trustee shall continue to hold the share of any living child of mine in a separate subtrust for each such child, and shall pay such part of the net income of each such subtrust to or for the benefit of the child for whom the subtrust is held as the Trustee may deem proper to provide for such child’s support, maintenance, health, and education, taking account of other means of support available to such child to the knowledge of the Trustee. Any undistributed income shall be accumulated and added to the corpus of the subtrust from which it was generated. The Trustee shall be authorized to encroach on the corpus of each subtrust as it may deem appropriate to provide for the maintenance, support, health, and education of a child for whom such subtrust is held, taking into account other means of support available to such child to the knowledge of the Trustee.</span></p>

<p style="text-indent: 2em;">(e)	<span style="padding-left: 20px;">If and when each child of mine is twenty-five (25) years of age, the Trustee shall turn over to such child all of the property then in the trust of such child.</span></p>

<p style="text-indent: 2em;">(f)	<span style="padding-left: 20px;">Should any child die before such child has become entitled to receive all of his or her trust, then the trust of such child shall be distributed per stirpes among the surviving descendants of such child, if any, and if none, shall be added equally to the trust shares originally set apart for my other children or their descendants and be held and distributed in all respects as if it had originally been a part of such other shares.</span></p>

<p style="text-indent: 2em;">(g)	<span style="padding-left: 20px;">The share of any deceased child of mine shall be distributed to his or her then living lineal descendants, per stirpes; except that any property distributable to a beneficiary who has not attainted age twenty-five (25) shall be held in a separate subtrust for the benefit of such beneficiary. The Trustee shall be authorized to distribute from such subtrust such amounts of income or corpus as it may deem appropriate to provide for the maintenance, support, health, and education of such beneficiary for whom the subtrust is held. Any undistributed income shall be accumulated and added to the trust corpus. When a beneficiary for whom such a subtrust is created has attained age twenty-five (25), the entire remaining corpus in such beneficiary’s subtrust shall be distributed to him or her in fee simple. Should such a beneficiary die after the creation of his or her subtrust, but before receiving all of the property held therein, any remaining corpus in his or her subtrust shall be distributed to his or her then living lineal descendants, per stirpes, if any, and if none, to the shares established for his or her siblings, and if none, to the shares established for my other living children and lineal descendants of deceased children as if it had originally been a part thereof.</span></p>

<p style="text-indent: 2em;">(h)	<span style="padding-left: 20px;">If at the time of my death or at any time before the final distribution of this trust and the subtrusts created hereunder, all of the beneficiaries herein named or described should die and there should be no such beneficiary to take the property or the income therefrom, then the property remaining in the trust and any subtrusts hereunder shall be distributed shall be distributed to <b><?php echo $_POST['residual']?></b>.</span></p>

<p style="text-indent: 2em;">(i)	<span style="padding-left: 20px;">In addition to the powers of encroachment provided elsewhere in this trust, my Trustee shall have the authority and power to encroach on the corpus of this trust (including subtrusts) as it may deem proper to enable any child of mine to marry, purchase a home, pursue Education (as defined herein), to enter a trade, profession or business. If such an encroachment is made prior to the division of this trust into separate subtrusts for my children as provided above, any such encroachment for a child of mine shall be deducted, without interest, from the share ultimately set aside for such child or such child’s lineal descendants. The Trustee shall not be liable, however, if the amount of such encroachments shall exceed the share to which such child or such child’s descendants shall ultimately become entitled. It is my intention by this Item Five to allow my Trustee to exercise its discretion in determining the timing and amount of any distributions (including the discretion to withhold any distribution if the circumstances so warrant in the Trustee’s sole discretion) pursuant to this provision as it may deem prudent from time to time; however, the Trustee shall consider that my primary objectives in the creation and administration of this trust are the maintenance, support, health, and education of all of my children.</span></p>

<p style="text-indent: 2em;">(j)	<span style="padding-left: 20px;">As used herein, the term “Education” shall be deemed to include public or private, primary, secondary, college, postgraduate, professional, technical or vocational training or education.</span></p>

<p style="text-indent: 2em;">(k)	<span style="padding-left: 20px;">I hereby constitute and appoint as Trustee of any trusts created under this Will, <b><?php echo $_POST['trustee1name']?></b>, of <b><?php echo $_POST['trustee1city']?></b>, <b><?php echo $_POST['trustee1state']?></b>. If he or she should be unable or unwilling to serve as Trustee, then I constitute and appoint as Trustee, <b><?php echo $_POST['trustee2name']?></b>, of <b><?php echo $_POST['trustee2city']?></b>, <b><?php echo $_POST['trustee2state']?></b>. </span></p>

<h5>ITEM V</h5>
<div style="text-indent: 2em;">a.	<span style="padding-left: 20px;">I appoint my <b><?php echo $_POST['e1relationship']?></b>, <b><?php echo $_POST['e1name']?></b>, to be my Executor hereunder.  If my named Executor shall fail to qualify for any reason or having qualified, shall die, resign or cease to act for any reason, then I appoint my <b><?php echo $_POST['e2relationship']?></b>, <b><?php echo $_POST['e2name']?></b>, as successor to my Executor.</span></div>

<div style="text-indent: 2em;">b.	<span style="padding-left: 20px;">I direct that no Executor or Trustee shall be required to file or furnish any bond, surety or other security in any jurisdiction, nor shall my Executor or Trustee be required to file any inventory or other reports with any court.</span></div>

<div style="text-indent: 2em;">c.	<span style="padding-left: 20px;">No Executor or Trustee serving hereunder shall be required to inquire into or audit the acts or doings of any predecessor Executor or Trustee or to make claim against any such predecessor or the estate of such predecessor. </span></div>

<div style="text-indent: 2em;">d.	<span style="padding-left: 20px;">Any successor Executor or Trustee shall have and may exercise all of the powers, privileges, immunities and exemptions conferred upon the predecessor Executor or Trustee as fully and to the same extent as if such successor had originally been named as Executor or Trustee hereunder.</span></div>

<h5>ITEM VI</h5>

<div style="text-indent: 2em;">In the management, care, and disposition of my estate and of every trust, I confer upon the Executor of this Will, and the Trustee of every trust created by this Will, and their successors in office, the power to do all things and execute such instruments as may be deemed necessary or proper, including the powers set out in Official Code of Georgia Annotated Section 53-12-261, as amended to the date of execution of this Will, which powers are incorporated by reference herein. All such powers may be exercised without order of or report to any court. <div>

<h5>ITEM VII</h5>

<div style="text-indent: 2em;">I direct that, for purposes of this Will, a beneficiary shall be deemed to predecease me unless such beneficiary survives me by more than thirty (30) days.</div>


<h5>ITEM VIII</h5>

<div style="text-indent: 2em;">If a child of mine requires the appointment of a guardian and conservator, it is my wish that the following shall serve (in the order named):</div>
<p></p>
<div style="text-indent: 2em;">First:	<span style="padding-left: 20px;"><b><?php echo $_POST['g1name']?></b>, my <b><?php echo $_POST['g1relationship']?></b> who resides in <b><?php echo $_POST['g1city']?></b>, <b><?php echo $_POST['g1state']?></b> </span></div>

<div style="text-indent: 2em;">Second:	<span style="padding-left: 20px;"><b><?php echo $_POST['g2name']?></b>, my <b><?php echo $_POST['g2relationship']?></b> who resides in <b><?php echo $_POST['g2city']?></b>, <b><?php echo $_POST['g2state']?></b> </span></div>

<div style="text-indent: 2em;"><b>IN WITNESS WHEREOF,</b> I have hereunto set my hand and affixed my seal to this, my Will, this _____ day of ___________	20___.</div>


<div style="text-align: right;">_________________________</div>
<div style="text-align: right; vertical-align: top">Signature</div>
<p></p>
<div style="text-align: right;">_________________________</div>
<div style="text-align: right; vertical-align: top">Print Name</div>

<div style="page-break-before: always"><div>
<div style="text-indent: 2em;"> The foregoing instrument was signed, sealed, published and declared by <b><?php echo $_POST['tname']?></b>, the above-named testator, to be such testator’s last Will and testament in our presence, all being present at the same time, and we, at such testator’s request and in such testator’s presence and in the presence of each other, have subscribed our names as witnesses on the date above written.</div>

<table>
  <tr>
    <th>WITNESSES:</th>
    <th>ADDRESSES:</th>
  </tr>
  <tr>
    <td>_____________________________</td>
    <td>_____________________________ </td>
  </tr>
  <tr>
    <td>Print Name:_____________________</td>
    <td>_____________________________ </td>
  </tr>
  <tr>
    <td>_____________________________ </td>
    <td>_____________________________ </td>
  </tr>
   <tr>
    <td>Print Name:_____________________</td>
    <td> _____________________________</td>
  </tr>
</table>


<div style="page-break-before: always"><div>
<h5>SELF-PROVING AFFIDAVIT</h5>

<div>STATE OF GEORGIA</div>
<div>COUNTY OF GWINNETT</div>
<p></p>
   <div style="text-indent: 2em;"> Before me, the undersigned authority, on this day personally <b><?php echo $_POST['tname']?></b>, ______________________________, and ______________________________, known to me to be the testator and the witnesses, respectively, whose names are subscribed to the annexed or foregoing instrument in their respective capacities, and, all of said persons being by me duly sworn, <b><?php echo $_POST['tname']?></b>, testator, declared to me and to the said witnesses in my presence that said instrument is <b><?php echo $_POST['tGender']?></b> last will and testament and that <b><?php echo $_POST['tGender']?></b> had willingly made and executed it as <b><?php echo $_POST['tGender']?></b> free act and deed for the purposes therein expressed. The witnesses, each on his or her oath, stated to me in the presence and hearing of the testator that the testator had declared to them that the instrument is <b><?php echo $_POST['tGender']?></b> last will and testament and that <b><?php echo $_POST['tGender']?></b> executed same as such and wanted each of them to sign it as a witness; and upon his or her oath each witness stated further that he or she did sign the same as witness in the presence of the testator and at <b><?php echo $_POST['tGender']?></b> request; that <b><?php echo $_POST['tGender']?></b> was at that time 14 years of age or over and was of sound mind; and that each of said witnesses was then at least 14 years of age. </div>

<table>
  <tr>
    <th></th>
    <th><div style="text-align: right; vertical-align: top"><b><?php echo $_POST['tname']?></b>, Testator </div></th>
  </tr>
  <tr>
    <td>_____________________________</td>
    <td>_____________________________ </td>
  </tr>
  <tr>
    <td><div style="text-align: right; vertical-align: top">WITNESS</div></td>
    <td><div style="text-align: right; vertical-align: top">WITNESS</div></td>
  </tr>
</table>

   	<div style="text-indent: 2em;">Sworn to and subscribed before me by <b><?php echo $_POST['tname']?></b>, testator, and sworn to and subscribed before me by the above-named witnesses, this _____ day of _________________, 20____.<div>

	<br><br>
	<div style="text-align: right;">_________________________</div>
<div style="text-align: right;">Notary Public</div>
<div style="text-align: right;">My Commission Expires:</div>

</span>
  </body>
</html>
