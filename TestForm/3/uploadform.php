<?php
  $title = "FTPmanager 1.0.0";  
  $pageinfo = 'Загрузка файла в текущую директорию';
  // Выводим "шапку" страницы
  require_once("topftp.php");
  // Если не переданы параметры - настраиваем
  // форму на добавление директории
  if(!isset($action)) $action = "upload.php";
  if(!isset($button)) $button = "Загрузить";
  if(!isset($title)) $title = "Загрузка файла в текущую директорию";
  // Права доступа по умолчанию для
  // пользователя
  if(!isset($ur)) $ur = "checked";
  if(!isset($uw)) $uw = "checked";
  if(!isset($ux)) $ux = "";
  // Права доступа по умолчанию для
  // группы
  if(!isset($gr)) $gr = "checked";
  if(!isset($gw)) $gw = "";
  if(!isset($gx)) $gx = "";
  // Права доступа по умолчанию для
  // остальных пользователей (не входящих в группу)
  if(!isset($or)) $or = "checked";
  if(!isset($ow)) $ow = "";
  if(!isset($ox)) $ox = "";
  // Извлекаем из строки запроса текущую директорию
  $dir = $_GET['dir'];
?>
<form action=<?php echo $action; ?> method=post>
<table>
<?php
  if($action == "upload.php")
  {
?>
<tr><td><p class=zag2>Файл:</p></td><td><input type=file name=name value='<?php echo $name; ?>'></td></tr>
<?php
  }
  else
  {
?>
<tr><td><p class=zag2>Файл:</p></td><td><input type=text name=name value='<?php echo $name; ?>'></td></tr>
<?php
  }
?>
<tr>
  <td><p class=zag2>Права доступа:</p></td>
  <td>
    <input type=checkbox title='Чтение директории для пользовалеля' name=ur <?php echo $ur; ?>>
    <input type=checkbox title='Запись в директорию для пользовалеля' name=uw <?php echo $uw; ?>>
    <input type=checkbox title='Выполнение в директории для пользовалеля' name=ux <?php echo $ux; ?>>
    &nbsp;&nbsp;
    <input type=checkbox title='Чтение директории для группы' name=gr <?php echo $gr; ?>>
    <input type=checkbox title='Запись в директорию для группы' name=gw <?php echo $gw; ?>>
    <input type=checkbox title='Выполнение в директории для группы' name=gx <?php echo $gx; ?>>
    &nbsp;&nbsp;
    <input type=checkbox title='Чтение директории для пользователей не входящих в группу' name=or <?php echo $or; ?>>
    <input type=checkbox title='Запись в директории для пользователей не входящих в группу' name=ow <?php echo $ow; ?>>
    <input type=checkbox title='Выполнение в директории для пользователей не входящих в группу' name=ox <?php echo $ox; ?>>
  </td>
</tr>
<tr><td>&nbsp;</td><td><input class=button type=submit value=<?php echo $button;?>></td></tr>
<input type=hidden name=dir value=<?php echo $dir;?>>
<input type=hidden name=old value=<?php echo $name;?>>
</table>
</form>
<?php
  // Выводим завершение страницы
  require_once("bottomftp.php");
?>