<?php
session_start();
session_destroy();

echo "<script>window.open('ecom/index.php','_self')</script>";
?>