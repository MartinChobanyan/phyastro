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
  // Получаем значения переменных переданных
  // методом POST из HTML-формы mkdirform.php
  $dir = $_POST['dir'];
  $name = $_POST['name'];
  $old = $_POST['old'];
  // Преобразуем права доступа пользователя
  // в числовую форму
  $user = 0;
  if($_POST['ur'] == 'on') $user += 4;
  if($_POST['uw'] == 'on') $user += 2;
  if($_POST['ux'] == 'on') $user += 1;
  // Преобразуем права доступа для группы
  // в числовую форму
  $group = 0;
  if($_POST['gr'] == 'on') $group += 4;
  if($_POST['gw'] == 'on') $group += 2;
  if($_POST['gx'] == 'on') $group += 1;
  // Права доступа по умолчанию для
  // остальных пользователей (не входящих в группу)
  $other = 0;
  if($_POST['or'] == 'on') $other += 4;
  if($_POST['ow'] == 'on') $other += 2;
  if($_POST['ox'] == 'on') $other += 1;
  // Проверяем введено ли имя для директории
  if(empty($name)) puterror("Недопустимое имя для директории");
  $direct = str_replace('%', '/', $dir);
  $direct = substr($direct, 0, strrpos($direct, "/"));
  // Переименовываем каталог $old
  if(ftp_rename($link, $direct."/".$old, $direct."/".$name))
  {
    // Создаём восьмеричную переменную $mode
    // с правами доступа к директории
     eval("\$mode=0$user$group$other;");    
    // Изменяем права доступа для только что
    // созданной директории
     if(ftp_chmod($link, $mode, $direct."/".$name))
    {
      // Осуществляем автоматический переход
      // на страницу администрирования ftp-каталога
      echo "<HTML><HEAD>
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?dir=".substr($dir, 0, strrpos($dir, "%"))."'>
            </HEAD></HTML>";
    } else puterror("Не удаётся изменить права доступа к директории");
  } else puterror("Не удаётся переименовать директорию");
?>