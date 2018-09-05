<?
  include_once 'connection.php';
  
  function getrow(&$result)
  {
    if ($row = mysqli_fetch_assoc($result)) return $row;
    mysqli_free_result($result);
    return FALSE;
  }
?>