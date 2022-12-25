<html><body>
    <div>
    <button type="submit"><a href="index.php?sayfa=1">UYE KAYIT</a></button>
    <button type="submit"><a href="index.php?sayfa=2">GİRİŞ</a></button>
    <button type="submit"><a href="index.php?sayfa=3">SESİON</a></button>
    <button type="submit"><a href="index.php?sayfa=4">ÇİKİŞ</a></button>
    <button type="submit"><a href="index.php?sayfa=5">SİL</a></button>
    <button type="submit"><a href="index.php?sayfa=6">GÜNCELLE</a></button>
    
    </div>
    <div>
<?php 
@$id=$_GET["sayfa"];
if ($id==1) {include("kayithtml.php");}
else if ($id==2) {include("giris.php");}
else if ($id==3) {include("session.php");}
else if ($id==4) {include("cikis.php");}
else if ($id==5) {include("silhtml.php");}
else if ($id==6) {include("guncellehtml.php");}
else  {"sayfa görüntülenemez";}

?>
</div>

</body></html>