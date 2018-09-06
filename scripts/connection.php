<?php
    include_once "conf.php";
    $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die('Error: #666 MySQL no connection!');
?>