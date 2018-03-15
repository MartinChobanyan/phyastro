<?
include_once 'connection.php';

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $type = isset($_POST['type']) ? $_POST['type']:0;
    $query = "UPDATE `Gradaran` SET `type`=$type WHERE `id`=$id";
    $result = mysqli_query($link, $query);
}
if (!$result) echo mysqli_error($link);

mysqli_close($link);