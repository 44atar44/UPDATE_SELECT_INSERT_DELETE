<?php    
include("baglanti.php");
$id=$_GET['silinecek'];
$sorgu =$db->prepare("DELETE FROM uye WHERE id=?");
$sil = $sorgu->execute([$id]);
echo   $id ."   numaralı kisi silindi";
header("Refresh: 2; url=silhtml.php");
?>