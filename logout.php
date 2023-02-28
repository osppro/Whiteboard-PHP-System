<?php
require_once('root/config.php');
session_start();
$email = $_SESSION['email'];
$dbh->query("UPDATE users SET u_status = 0 WHERE email = '$email'");
unset($_SESSION['userid']);
session_destroy();
redirect_page(SITE_URL);

?>