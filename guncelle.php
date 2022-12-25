<?php
include ("baglanti.php");
$no = $_POST['no'];
$alan1 = $_POST['alan1'];
$alan2 = $_POST['alan2'];
if($no != ""){
$guncelleme = $db->exec("UPDATE uye SET kullanici_adi='$alan1', email='$alan2' WHERE id='$no'");
header("Refresh:0; url=index.php?sayfa=6");
} else {
	echo "Güncellenecek kaydın numarasını girmelisiniz!";
}?>

