<?php

    require_once('DbOperations.php');
    $users = $operations->logout();
    header("Location: login.php");

?>