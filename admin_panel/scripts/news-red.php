<?php

$link = mysqli_connect('mysql.hostinger.ru', 'u557977471_admin', 'emma55', 'u557977471_emma');

if (mysqli_connect_errno()) {
    printf("Մի բան այնպես չէ: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($link, "utf8");

if(isset($_POST['id']))
{
$id = $_POST['id'];
}
if(isset($_POST['title']))
{
$title = $_POST['title'];
}

if(isset($_POST['description']))
{
$description = $_POST['description'];
}

$query = "UPDATE `News` SET `title`=$title,`description`=$description  WHERE `id`=$id";
$result = mysqli_query($link, $query);

if ($result==true)
{
echo "Նորույթը՝ $id բարեհաջող փոփոխված է MySQL գրադարանում։";
}
else echo mysqli_error($link);

mysqli_close($link);

?>