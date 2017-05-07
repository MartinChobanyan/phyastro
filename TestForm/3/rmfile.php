<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-студия SoftTime (http://www.softtime.ru)
// Симдянов И.В. (simdyanov@softtime.ru)
// Голышев С.В. (softtime@softtime.ru)
///////////////////////////////////////////////////
?>
Подождите...
<?php
  // Устанавливаем соединение с FTP-сервером
  require_once("config.php");
  // Извлекаем из строки запроса путь к удаляемому файлу
  $dir = $_GET['dir'];
  $direct = str_replace('%', '/', $dir);
  // Удаляем файл
  if(ftp_delete($link, $direct))
  {
      // Осуществляем автоматический переход
      // на страницу администрирования ftp-каталога
      echo "<HTML><HEAD>
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?dir=".substr($dir, 0, strrpos($dir,"%25"))."'>
            </HEAD></HTML>";
  } else puterror("Не удаётся удалить файл");
?>