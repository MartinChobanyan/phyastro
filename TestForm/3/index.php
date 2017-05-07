<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-студия SoftTime (http://www.softtime.ru)
// Симдянов И.В. (simdyanov@softtime.ru)
// Голышев С.В. (softtime@softtime.ru)
///////////////////////////////////////////////////
  $title = "FTPmanager 1.0.0";  
  $pageinfo = 'Если у вас не работает это Web-приложение, вы всегда можете найти помощь по его установке и настройке на нашем форуме <a href=http://www.softtime.ru/forum/>http://www.softtime.ru/forum/</a> Возможно вам также потребуется дополнительная функциональность, в этом случае Вы также можете посетить наш форум и выссказать свои предложения. Если Ваше предложение действительно актуально и интересно, мы доработаем приложение с учетом Ваших пожеланий.';
  // Устанавливаем соединение с FTP-сервером
  require_once("config.php");
  // Выводим "шапку" страницы
  require_once("topftp.php");
  // Определяем тип операционной системы сервера
  // предоставляющего услуги FTP
  $type = ftp_systype($link);
  // Если операционная система отличается от UNIX
  // прекращаем дальнейшую работу
  if($type != "UNIX") puterror("К сожалению, на
      удалённом сервере операционная система не
      совеместимая с UNIX");
  // Извлекаем из строки запроса значение директории
  if(isset($_GET['dir']) && $_GET['dir'] != "%") $dir = $_GET['dir'];
  else $dir = "/";
  $dir = str_replace("%", "/", $dir);
  // Получаем все файлы корневого каталога
  // Дескриптор соединения $link получен в config.php
  $file_list = ftp_rawlist($link, $dir);
  // Закрываем соединение с FTP-сервером
  ftp_close($link);
  // Выводим текущую директорию
  echo "<p class=help>Текущая папка - ftp://".$ftp_server.$dir."</p>";
  // Если текущий каталог не является кореневым,
  // выводим ссылку на один уровень вверх
  if($dir != "/")
  {
    // Удаяем из переменной $dir последюю директорию
    $pos = strrpos($dir, '/');
    if($pos>0) $dirup = substr($dir, 0, $pos);
    else $dirup = "/";
    echo "<p style='margin: 0px; margin-bottom: 5px'><a href=index.php?dir=".str_replace('/', '%', $dirup).">вверх</a></p>";
  }
  // Выводим содержимое каталога
  // Формируем таблицу
  echo "<table class=bodytable width=100% border=1 cellpadding=4 cellspacing=0 bordercolordark=white bordercolorlight=gray>
          <tr>
            <td class=headtable align=center>права доступа</td>
            <td class=headtable align=center>блоки</td>
            <td class=headtable align=center>группа</td>
            <td class=headtable align=center>пользователь</td>
            <td class=headtable align=center>размер, байты</td>
            <td class=headtable align=center>время создания</td>
            <td class=headtable>&nbsp;</td>
            <td class=headtable align=center colspan=2>действия</td>
          </tr>";
  foreach($file_list as $file)
  {
    // Разбиваем строку по пробельным символам
    list($acc,
         $bloks,
         $group,
         $user,
         $size, 
         $month, 
         $day, 
         $year, 
         $file) = preg_split("/[\s]+/", $file);
    // Если файл начинается с точки - игнорируем его
    if(substr($file, 0, 1) == '.') continue;
    // Формируем ссылку на удаление файла
    $delete = "-";
    $edit = "-";
    // Для формирования корректных ссылок в таблице
    // файлов перменной $dir добавляем /
    if($dir != "/") $url = str_replace('/', '%25', $dir."/".$file);
    else $url = str_replace('/', '%25', $dir.$file);
    // Определяем является ли объект директорией
    if(substr($acc, 0, 1) == 'd')
    {
      $file = "<b><a href=index.php?dir=$url title='Открыть директорию'>$file</a></b>";
      $delete = "<p><a href=rmdir.php?dir=$url>Удалить</a></p>";
      $edit = "<p><a href=chdirform.php?dir=$url&acc=$acc>Исправить</a></p>";
      $size = "&lt;DIR&gt;";
    }
    // Определяем является ли объект файлом
    if(substr($acc, 0, 1) == '-')
    {
      $file = "<a href=download.php?dir=$url title='Загрузить файл'>$file</a>";
      $delete = "<p><a href=rmfile.php?dir=$url>Удалить</a></p>";
      $edit = "<p><a href=editfileform.php?dir=$url&acc=$acc>Исправить</a></p>";
    }
    // Формируем строку таблицы
    echo "<tr>
            <td align=center><p><code>$acc</code></p></td>
            <td align=center><p><code>$bloks</code></p></td>
            <td align=center><p><code>$group</code></p></td>
            <td align=center><p><code>$user</code></p></td>
            <td align=center><p><code>$size</code></p></td>
            <td align=center><p><code>$day&nbsp;&nbsp;$month&nbsp;&nbsp;$year</code></p></td>
            <td align=right><p><code>$file</code></p></td>
            <td align=center>$delete</td>
            <td align=center>$edit</td>
          </tr>";
  }
  echo "</table>";
  // Ссылка на создание каталога
  echo "<br><p style='margin: 0px; margin-bottom: 5px'><a href=mkdirform.php?dir=".str_replace('/', '%25', $dir).">Создать каталог</a>&nbsp;&nbsp;&nbsp;";
  echo "<a href=uploadform.php?dir=".str_replace('/', '%25', $dir).">Загрузить файл</a></p>";
  // Выводим завершение страницы
  require_once("bottomftp.php");
?>