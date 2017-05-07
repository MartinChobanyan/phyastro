<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-бвг¤Ёп SoftTime (http://www.softtime.ru)
// ‘Ё¬¤п­®ў €.‚. (simdyanov@softtime.ru)
// ѓ®«лиҐў ‘.‚. (softtime@softtime.ru)
///////////////////////////////////////////////////
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><?php echo $title; ?></title>
<link rel="StyleSheet" type="text/css" href=ftp.css>
</head>
<body leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" bottommargin="0" topmargin="0" >
<div style="position: absolute; right: 50px; top: 3px;">
    <p class="help" align="right">FTPmanager разработан и поддерживается IT-студией "SoftTime"
      <a  href="http://www.softtime.ru">www.softtime.ru</a>
    </p>
</div>
<table border="0" cellpadding="0" cellspacing="0" width=100%>
    <tr valign="bottom">
        <td align="center" width="40%" rowspan="3" valign="center"><nobr><h1 class=z1 style="margin-top: 10px; margin-bottom: 0px" ><?php echo $title ?></h1></nobr>
        <em class=regard2><?php echo $namepage?></em>
        </td>
        <td height="60" align="center"><p><a href="../../admin/index.php" class=link title="Вернуться на страницу администрированию сайта">Администрирование сайта</b></a></td>
        <td align="center"><p><a href="../../index.php" class=link title="Вернуться на головную страницу сайта" >Вернуться на сайт</b></a></td>
        <td align="center"><p><a href="aboutcounter.php" class=link title="" >О системе FTPmanager</b></a></td>       
    </tr>
    <tr valign="bottom">
        <td colspan="4" height="35">
<p class=help>
</p>
        </td>
    </tr>
</table>
<?php
//  echo "<p style='margin: 0px; margin-bottom: 5px'>&nbsp;&nbsp;&nbsp;";
//  echo "<a href='index.php' title='Главная страница счетчика'>Главная страница счетчика</b></a>&nbsp;&nbsp;";
//  if (!empty($id_page)) echo "<a href=main.php>Статистика для всего сайта</a>";
//  echo "</p>";
  include "menu.php";
?>
<table width=100%><tr><td width=10%>&nbsp;</td><td>
<table border="0" summary="">
    <tr valign="top">
        <td ><h1 class=z1><?php  ?>&nbsp;&nbsp;</h1></td>
        <td><br><p class=help><?php echo $pageinfo ?></p></td>
    </tr>
</table><br>