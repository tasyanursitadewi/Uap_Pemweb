<?php 
session_start();
session_destroy();
header("utama.php");
echo "TERIMAKASIH!";
?>