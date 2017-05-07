<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-������ SoftTime (http://www.softtime.ru)
// �������� �.�. (simdyanov@softtime.ru)
// ������� �.�. (softtime@softtime.ru)
///////////////////////////////////////////////////
  $title = "FTPmanager 1.0.0";  
  $pageinfo = '���� � ��� �� �������� ��� Web-����������, �� ������ ������ ����� ������ �� ��� ��������� � ��������� �� ����� ������ <a href=http://www.softtime.ru/forum/>http://www.softtime.ru/forum/</a> �������� ��� ����� ����������� �������������� ����������������, � ���� ������ �� ����� ������ �������� ��� ����� � ���������� ���� �����������. ���� ���� ����������� ������������� ��������� � ���������, �� ���������� ���������� � ������ ����� ���������.';
  // ������������� ���������� � FTP-��������
  require_once("config.php");
  // ������� "�����" ��������
  require_once("topftp.php");
  // ���������� ��� ������������ ������� �������
  // ���������������� ������ FTP
  $type = ftp_systype($link);
  // ���� ������������ ������� ���������� �� UNIX
  // ���������� ���������� ������
  if($type != "UNIX") puterror("� ���������, ��
      �������� ������� ������������ ������� ��
      ������������ � UNIX");
  // ��������� �� ������ ������� �������� ����������
  if(isset($_GET['dir']) && $_GET['dir'] != "%") $dir = $_GET['dir'];
  else $dir = "/";
  $dir = str_replace("%", "/", $dir);
  // �������� ��� ����� ��������� ��������
  // ���������� ���������� $link ������� � config.php
  $file_list = ftp_rawlist($link, $dir);
  // ��������� ���������� � FTP-��������
  ftp_close($link);
  // ������� ������� ����������
  echo "<p class=help>������� ����� - ftp://".$ftp_server.$dir."</p>";
  // ���� ������� ������� �� �������� ���������,
  // ������� ������ �� ���� ������� �����
  if($dir != "/")
  {
    // ������ �� ���������� $dir �������� ����������
    $pos = strrpos($dir, '/');
    if($pos>0) $dirup = substr($dir, 0, $pos);
    else $dirup = "/";
    echo "<p style='margin: 0px; margin-bottom: 5px'><a href=index.php?dir=".str_replace('/', '%', $dirup).">�����</a></p>";
  }
  // ������� ���������� ��������
  // ��������� �������
  echo "<table class=bodytable width=100% border=1 cellpadding=4 cellspacing=0 bordercolordark=white bordercolorlight=gray>
          <tr>
            <td class=headtable align=center>����� �������</td>
            <td class=headtable align=center>�����</td>
            <td class=headtable align=center>������</td>
            <td class=headtable align=center>������������</td>
            <td class=headtable align=center>������, �����</td>
            <td class=headtable align=center>����� ��������</td>
            <td class=headtable>&nbsp;</td>
            <td class=headtable align=center colspan=2>��������</td>
          </tr>";
  foreach($file_list as $file)
  {
    // ��������� ������ �� ���������� ��������
    list($acc,
         $bloks,
         $group,
         $user,
         $size, 
         $month, 
         $day, 
         $year, 
         $file) = preg_split("/[\s]+/", $file);
    // ���� ���� ���������� � ����� - ���������� ���
    if(substr($file, 0, 1) == '.') continue;
    // ��������� ������ �� �������� �����
    $delete = "-";
    $edit = "-";
    // ��� ������������ ���������� ������ � �������
    // ������ ��������� $dir ��������� /
    if($dir != "/") $url = str_replace('/', '%25', $dir."/".$file);
    else $url = str_replace('/', '%25', $dir.$file);
    // ���������� �������� �� ������ �����������
    if(substr($acc, 0, 1) == 'd')
    {
      $file = "<b><a href=index.php?dir=$url title='������� ����������'>$file</a></b>";
      $delete = "<p><a href=rmdir.php?dir=$url>�������</a></p>";
      $edit = "<p><a href=chdirform.php?dir=$url&acc=$acc>���������</a></p>";
      $size = "&lt;DIR&gt;";
    }
    // ���������� �������� �� ������ ������
    if(substr($acc, 0, 1) == '-')
    {
      $file = "<a href=download.php?dir=$url title='��������� ����'>$file</a>";
      $delete = "<p><a href=rmfile.php?dir=$url>�������</a></p>";
      $edit = "<p><a href=editfileform.php?dir=$url&acc=$acc>���������</a></p>";
    }
    // ��������� ������ �������
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
  // ������ �� �������� ��������
  echo "<br><p style='margin: 0px; margin-bottom: 5px'><a href=mkdirform.php?dir=".str_replace('/', '%25', $dir).">������� �������</a>&nbsp;&nbsp;&nbsp;";
  echo "<a href=uploadform.php?dir=".str_replace('/', '%25', $dir).">��������� ����</a></p>";
  // ������� ���������� ��������
  require_once("bottomftp.php");
?>