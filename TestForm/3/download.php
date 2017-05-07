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
  // Извлекаем из строки запроса загружаемый файл
  $dir = $_GET['dir'];
  $direct = str_replace('%', '/', $dir);
  // Загружаем файл в директорию files
  $path = "files/".substr($direct, strrpos($direct,"/") + 1);
  // Уберём расширение файла, чтобы он не интерпретировался
  // как php и прочее
  //$path = substr($path, 0, strpos($path, "."));
  $ret = ftp_nb_get($link, $path, $direct, FTP_BINARY);
  while ($ret == FTP_MOREDATA)
  {
    // Выводим точки что-бы пользователь
    // знал что процесс идёт
    echo ".";
    // Продолжаем загрузку
    $ret = ftp_nb_continue($link);
  }
  // Если происходит ошибка при загрузке файла
  // уведомляем об этом пользователя
  if ($ret != FTP_FINISHED)
  {
    echo "<br>Во время загрузки файла произошла ошибка...";
    exit();
  }
  else
  {
    // Отправляем посетителю файл
    echo "<HTML><HEAD>
          <META HTTP-EQUIV='Refresh' CONTENT='1; URL=$path'>
          </HEAD></HTML>";
  }
?>