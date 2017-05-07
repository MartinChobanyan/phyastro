<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-студия SoftTime (http://www.softtime.ru)
// Симдянов И.В. (simdyanov@softtime.ru)
// Голышев С.В. (softtime@softtime.ru)
///////////////////////////////////////////////////
  $title = "FTPmanager 1.0.0";  
  $pageinfo = 'Переименование директории';
  // Выводим "шапку" страницы
  require_once("topftp.php");
  // Извлекаем из строки запроса имя изменяемого файла
  // и права доступа
  $dir = $_GET['dir'];
  $name = substr($dir, strrpos($dir, "%") + 1);
  $acc = $_GET['acc'];
  // Осуществляем разбор прав доступа пользователя
  if(substr($acc, 1, 1) == 'r') $ur = "checked";
  else $ur = "";
  if(substr($acc, 2, 1) == 'w') $uw = "checked";
  else $uw = "";
  if(substr($acc, 3, 1) == 'x') $ux = "checked";
  else $ux = "";
  // Осуществляем разбор прав доступа группы
  if(substr($acc, 4, 1) == 'r') $gr = "checked";
  else $gr = "";
  if(substr($acc, 5, 1) == 'w') $gw = "checked";
  else $gw = "";
  if(substr($acc, 6, 1) == 'x') $gx = "checked";
  else $gx = "";
  // Осуществляем разбор прав доступа остальных пользователей
  if(substr($acc, 7, 1) == 'r') $or = "checked";
  else $or = "";
  if(substr($acc, 8, 1) == 'w') $ow = "checked";
  else $ow = "";
  if(substr($acc, 9, 1) == 'x') $ox = "checked";
  else $ox = "";
  // Настраиваем форму на исправление названия
  // файла и его прав доступа
  if(!isset($action)) $action = "chdir.php";
  if(!isset($button)) $button = "Исправить";
  if(!isset($title)) $title = "Перименование файла";
  // Включаем HTML-форму
  include "uploadform.php";
?>