Подождите...
<?php
  // Устанавливаем соединение с FTP-сервером
  require_once("config.php");
  // Получаем значения переменных переданных
  // методом POST из HTML-формы uploadform.php
  $dir = $_POST['dir'];
  $name = $_POST['name'];
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
  // Проверяем введено ли имя для файла
  if(empty($name)) puterror("Недопустимое имя файла");
  $direct = str_replace('%', '/', $dir);
  // Начинаем загрузку
  $path = "$direct/".substr($name, strrpos($name, "\\") + 1);
  $ret = ftp_nb_put($link, $path, $name, FTP_BINARY);
  while ($ret == FTP_MOREDATA)
  {
    // Выводим точки что-бы пользователь
    // знал что процесс идёт
    echo ".";
    // Продолжаем загрузку
    $ret = ftp_nb_continue($link);
  }
  if ($ret != FTP_FINISHED)
  {
    echo "<br>Во время загрузки файла произошла ошибка...";
    exit();
  }
  else
  {
    // Создаём восьмеричную переменную $mode
    // с правами доступа к директории
     eval("\$mode=0$user$group$other;");    
    // Изменяем права доступа для только что
    // созданной директории
    if(ftp_chmod($link, $mode, $path))
    {
      // Осуществляем автоматический переход
      // в текущий каталог
      echo "<HTML><HEAD>
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?dir=$dir'>
            </HEAD></HTML>";
    } else puterror("Невозможно установить права доступа к файлу");
  }
?>