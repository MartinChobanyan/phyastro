<?php

include_once 'connection.php';

if (mysqli_connect_errno()) {
    printf("Մի բան այնպես չէ: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($link, "utf8");

if(isset($_POST['id']))
{	
    $id = $_POST['id'];
}

$links = $_POST['link'];

$title = $_POST['title'];

$type = isset($_POST['type']) ? $_POST['type']:0;

$query = "INSERT INTO `Gradaran` (`id`,`link`,`title`,`type`) VALUES ('$id','$links','$title','$type')";

$result1 = mysqli_query($link, $query);


if ($result1==true)
{
echo "Գիրքը բարեհաջող ներմեուծվել է MySQL գրադարան։";
}
else 
{
    $query = "UPDATE `Gradaran` SET `link`='$links', `title`='$title', `type`='$type' WHERE `id`=$id";
    $result2 = mysqli_query($link, $query);

	if ($result2==true)
	{
		echo "$id համարով գրքի տվյալները բարեհաջող փոփոխված են MySQL գրադարանում։";
	}
	else echo mysqli_error($link);
} 
if ($result1==false) 
{
	echo mysqli_error($link);
}

mysqli_close($link);

?>