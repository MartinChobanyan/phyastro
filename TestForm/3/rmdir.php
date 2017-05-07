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
  // Извлекаем из строки запроса текущую директорию
  $dir = $_GET['dir'];
  $direct = str_replace('%', '/', $dir);
  // Для того, чтобы удалить директорию необходимо
  // убедится, что она не пустая. Для этого запрашиваем
  // её содержимое
  $list_file = ftp_nlist($link, $direct);
  if(count($list_file)>1) puterror("Невозможно удалить директорию, так как она содержит файлы");
  // Если директория пуста - удаляем её
  if(ftp_rmdir($link, $direct))
  {
      // Осуществляем автоматический переход
      // на страницу администрирования ftp-каталога
      echo "<HTML><HEAD>
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?dir=".substr($dir, 0, strrpos($dir,"%25"))."'>
            </HEAD></HTML>";
  } else puterror("Не удаётся удалить директорию");
?>