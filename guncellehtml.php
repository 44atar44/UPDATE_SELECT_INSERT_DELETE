<table  border="2" width="300" >
<TR>
<TH>id</TH>
<TH>kullanici_adi</TH>
<TH>email</TH>
<TH> güncelle</TH>
</TR>
<?php 
include ("baglanti.php");

foreach($db->query('SELECT * FROM uye') as $listele) {

$no = $listele['id'];
$alan1 = $listele['kullanici_adi'];
$alan2 = $listele['email'];
echo '<form action="guncelle.php" method="POST">
<TR>
<TD> <input type="text" name="no" id="no" value="'.$no.'">          </TD>
<TD> <input type="text" name="alan1" id="alan1" value="'.$alan1.'"> </TD>
<TD> <input type="text" name="alan2" id="alan2" value="'.$alan2.'"> </TD>
<TD> <input type="submit" value="Güncelle">                         </TD>
</TR>
</form>';
}?>
</table>