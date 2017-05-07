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

$date= date("Y/m/d H:i", strtotime("+4 hours"));

$title = "{" . $date . "}" . $_POST['title'];

$description = "&nbsp&nbsp&nbsp" . $_POST['description'];


$query = "INSERT INTO News (`id`,`title`,`description`) VALUES ('$id','$title','$description')";

$result1 = mysqli_query($link, $query);

if ($result1==true)
{
echo "Նորույթը բարեհաջող ներմեուծվել է MySQL գրադարան։";
}
else 
{
    $query = "UPDATE `News` SET `title`='$title',`description`='$description'  WHERE `id`=$id";
    $result2 = mysqli_query($link, $query);

	if ($result2==true)
	{
		echo "$id համարով նորույթը բարեհաջող փոփոխված է MySQL գրադարանում։";
	}
	else echo mysqli_error($link);
} 
if ($result1==false) 
{
	echo mysqli_error($link);
}

mysqli_close($link);

?>