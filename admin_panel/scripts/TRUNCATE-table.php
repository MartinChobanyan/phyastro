<?
include_once 'connection.php';
$query="TRUNCATE TABLE Offers";
mysqli_query($link, $query);
header("Location:".$_SERVER['DOCUMENT_ROOT']."/admin_panel/offers.php");
?>