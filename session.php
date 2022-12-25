
<?php
    session_start();
if( isset($_SESSION["nick"])) {
     echo "yetginiz var "; ?>
  
<?php }else {
echo "yetginiz yok ";
}?>
