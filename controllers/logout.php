<?php
session_start();
session_destroy();
header("location: http://localhost/Projet%20web%202A/Shop_Php_natif/views/back-office/auth/login_interface.php");
