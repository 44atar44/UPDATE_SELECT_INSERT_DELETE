<?php   include("baglanti.php"); 
if (isset($_POST)) {
    $adi = $_POST['ad'];
    $password = $_POST['parola'];
    $eposta =  $_POST['email'];
try {
            $sorgu = $db->prepare("INSERT INTO uye (kullanici_adi,email,parola) VALUES(?, ?, ?)");
            $sorgu->bindParam(1, $adi, PDO::PARAM_STR);
            $sorgu->bindParam(2, $eposta, PDO::PARAM_STR);
            $sorgu->bindParam(3, $password, PDO::PARAM_STR);
            $sorgu->execute();
        echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";    
       header("Refresh: 2; url=index.php");
    }  catch (PDOException $e) {
    die($e->getMessage());
    }
    $db = null;
}?> 