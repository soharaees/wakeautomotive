<?php
session_start();
session_destroy();
header('location:/automotive/admin/login.php');
?>