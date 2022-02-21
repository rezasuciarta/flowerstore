<?php
session_start();

$_SESSION =[];
session_unset();
 
// fungsi untuk menghapus seluruh session
session_destroy();


setcookie('key', '', time() - 3600);

// redirect ke halaman index.php (halaman login)
header('Location: login.php');
?>