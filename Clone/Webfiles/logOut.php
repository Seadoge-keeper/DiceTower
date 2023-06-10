<?php

session_start();
session_destroy();
header('Location: Loginpages/Login.php');

?>