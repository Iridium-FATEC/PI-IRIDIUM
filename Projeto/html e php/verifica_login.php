<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: ad-login.php');
    exit();
}