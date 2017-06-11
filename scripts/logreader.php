<?php
$file="admin_panel/logs/base.log"; //file directory
$col_zap=40000;        //Մաքսիմալ քանակ

function getRealIpAddr() {
  if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Getting IP
  { $ip=$_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    // Если IP идёт через прокси
  { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
  else { $ip=$_SERVER['REMOTE_ADDR']; }
  return $ip;
}

if (strstr($_SERVER['HTTP_USER_AGENT'], 'YandexBot')) {$bot='YandexBot';}
elseif (strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot')) {$bot='Googlebot';}
else { $bot=$_SERVER['HTTP_USER_AGENT']; }

$ip = getRealIpAddr();
$date = date("H:i:s d.m.Y", mktime(date("H")+4, date("i"), date("s"), date("m"), date("d"), date("Y")));        // DATA/TIME
$home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    //Site-page
$lines = file($file);
while(count($lines) > $col_zap) array_shift($lines);
$lines[] = $date."|".$bot."|".$ip."|".$home."|\r\n";
file_put_contents($file, $lines);
?>