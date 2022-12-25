
<?php
include("baglanti.php");
    if($_POST){
        $username = $_POST["uname"];
        $password = $_POST["psw"];
        if(!$username || !$password){}
        else{
            $login = $db->prepare("SELECT * FROM uye WHERE kullanici_adi=? AND parola=?");
            $login->execute(array($username, $password));
            $l = $login->fetch(PDO::FETCH_ASSOC);

            if($l){ session_start();
                echo '<span style="color:blue;">Giriş Başarılı</span>';
                $_SESSION["name"] = $l["kullanici_adi"];
                $_SESSION["nick"] = $l["email"];
                header("Refresh: 0.5; url=index.php");
            }
      else{ echo '<span style="color:red;">Kullanıcıadı Şifrenizi Hatalı Girdiniz</span>'; }
        }
    }
?>

<html>
<body>
<form action="" method="POST">
  <div class="container">
    <b>Kullanıcı adı</b> <input type="text"     id="uname" name="uname" required><br>
    <b>Şifre</b>         <input type="password" id="psw"   name="psw"   required><br>   
    <button  type="submit"> Giriş </button>  
  </div>
</form>
</body>
</html>
