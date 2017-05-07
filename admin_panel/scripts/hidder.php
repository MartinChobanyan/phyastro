<?

include_once 'connection.php';

if(isset($_POST['id']))
{	
    $id = $_POST['id'];
}

if(isset($_POST['value']))
{	
    $visibility = !$_POST['value'];
}

$query = "UPDATE `Gradaran` SET `visible`='$visibility' WHERE `id`=$id";

$result = mysqli_query($link, $query);

if ($result1==false) 
{
	echo mysqli_error($link);
}

mysqli_close($link);