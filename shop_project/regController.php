<?php
    session_start();
    $_SESSION['regErr'] = [];
    require_once('config/functions.php');
    
    if (!isset($_POST['reg'])) {
        header('Location: index.php');
        die();
    }
    
    $username = readPost('username');
    header('Location: reg.php');
    