<?php
    include_once 'session.php';
    $userSession = new Session();
    $userSession->closeSession();
    header('Location: ../index.php');
?>