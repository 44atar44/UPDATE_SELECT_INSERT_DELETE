
<TABLE BORDER>
<TR>
	<TH> ID</TH> 
    <TH>KULLANİCİADİ</TH> 
    <TH>EMAİL</TH> 
    <TH>SİL</TH>
</TR>
<?php
include("baglanti.php");

    $sorgu = $db->query("SELECT * FROM uye");
    $sorgu-> execute();
    while($satir=$sorgu->fetch(PDO::FETCH_ASSOC)){       ?>
<TR>
	<TD> <?php echo $satir['id']             ?>    </TD> 
    <TD> <?php echo $satir['kullanici_adi']  ?>    </TD> 
    <TD> <?php echo $satir['email']          ?>    </TD> 
	<TD><a href="sil.php?silinecek= <?php   echo $satir['id'];?> ">SİL</a></TD>
<?php  } ?>
</TR>
</TABLE>
