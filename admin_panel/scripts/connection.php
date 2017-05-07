<?php
$Host="localhost";
$Root="root";
$Pass="";
$DB="u557977471_emma";
global $link;
$link = mysqli_connect($Host, $Root, $Pass, $DB) or die('Error: #666 MySQL no connection!');
?>