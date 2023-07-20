<?php
//jik BELUM LOGIN

if(isset($_SESSION['log'])){

} else {
    header('location:login.php');
}

?>