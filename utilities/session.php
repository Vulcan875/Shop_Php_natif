<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header("location: http://localhost/Projet%20web%202A/Shop_Php_natif/views/index.php");
    exit();
}
$session_id=$_SESSION['id'];

?>