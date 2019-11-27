<?php
include ('connexion.php');
include ('inc/header.php');
session_start();
session_destroy();
header('location: index.php');
exit;