<?
include_once 'connection.php';
$query="TRUNCATE TABLE Offers";
mysqli_query($link, $query);
header("Location:/admin_panel/offers.php");
?>