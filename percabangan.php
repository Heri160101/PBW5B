<html style="background-color: #00aade;" >
<center>
<fieldset>
<table style="padding-top: 250px">
<form method="post" action="percabangan.php">
	<tr>
		<td><b>Masukkan Total Penggunaan</b> </td>
		<td style="padding-left: 50px"><input type="text" name="pem"/></td>
	</tr>
	<tr>
		<td></td>
		<td style="padding-left: 50px;padding-bottom: 20px"><input type="submit" name="proses" value="HITUNG" /></td>
	</tr>
</table>
</fieldset>
</html>

<?php

if(isset($_POST["proses"])){
	$pem = $_POST["pem"];
	if($pem<=30){
		$biaya = $pem * 150;
		echo "<b>Total penggunaan Anda $pem dengan biaya  $biaya<b>";
	}elseif($pem<=60){
		$biaya = ($pem-30) * 150 + 3600;
		echo "<b>Total penggunaan Anda $pem dengan biaya  $biaya<b>"; 
	}elseif($pem<=90){
		$biaya = ($pem-60) * 190 + 3600 + 4500;
		echo "<b>Total penggunaan Anda $pem dengan biaya  $biaya<b>";
	}else{
		$biaya = ($pem-90) * 240 + 3600 + 4500 + 5700; 
		echo "<b>Total penggunaan Anda $pem dengan biaya  $biaya<b>";
	}		
}


?>
</center>