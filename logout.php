<?php
    include('header.php');
    include('config.php');

    unset($_SESSION['user_id']);
    unset($_SESSION['username']);

    header('Location: http://localhost:8089/New/index.php');
?>