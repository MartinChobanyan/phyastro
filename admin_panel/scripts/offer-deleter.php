<?php

include_once 'connection.php';

if (mysqli_connect_errno()) {
    printf("Մի բան այնպես չէ: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['id']))
{
$id = $_POST['id'];
}

$query = "DELETE FROM `Offers` WHERE `id`=$id";

$result = mysqli_query($link, $query);

if ($result==true)
{
echo "Առաջարկը բարեհաջող հեռացված է MySQL գրադարանից։";
}
else echo mysqli_error($link);

mysqli_close($link);

?>