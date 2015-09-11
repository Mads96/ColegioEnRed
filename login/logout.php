<?php
session_start();
session_destroy();
echo "sesion destruida";
header('location:../index.html');
?>