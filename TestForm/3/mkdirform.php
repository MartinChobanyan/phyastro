<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-������ SoftTime (http://www.softtime.ru)
// �������� �.�. (simdyanov@softtime.ru)
// ������� �.�. (softtime@softtime.ru)
///////////////////////////////////////////////////
  $title = "FTPmanager 1.0.0";  
  $pageinfo = '���������� ����� ����������';
  // ������������� ���������� � FTP-��������
  // require_once("config.php");
  // ������� "�����" ��������
  require_once("topftp.php");
  // ���� �� �������� ��������� - �����������
  // ����� �� ���������� ����������
  if(!isset($action)) $action = "mkdir.php";
  if(!isset($button)) $button = "��������";
  if(!isset($title)) $title = "���������� ����������";
  // ����� ������� �� ��������� ���
  // ������������
  if(!isset($ur)) $ur = "checked";
  if(!isset($uw)) $uw = "checked";
  if(!isset($ux)) $ux = "checked";
  // ����� ������� �� ��������� ���
  // ������
  if(!isset($gr)) $gr = "checked";
  if(!isset($gw)) $gw = "";
  if(!isset($gx)) $gx = "checked";
  // ����� ������� �� ��������� ���
  // ��������� ������������� (�� �������� � ������)
  if(!isset($or)) $or = "checked";
  if(!isset($ow)) $ow = "";
  if(!isset($ox)) $ox = "checked";
  // ��������� �� ������ ������� ������� ����������
  $dir = $_GET['dir'];
?>
<form action=<?php echo $action; ?> method=post>
<table>
<tr><td><p class=zag2>�������� ����������:</p></td><td><input size=31 type=text name=name value='<?php echo $name; ?>'></td></tr>
<tr>
  <td><p class=zag2>����� �������:</p></td>
  <td>
    <input type=checkbox title='������ ���������� ��� ������������' name=ur <?php echo $ur; ?>>
    <input type=checkbox title='������ � ���������� ��� ������������' name=uw <?php echo $uw; ?>>
    <input type=checkbox title='���������� � ���������� ��� ������������' name=ux <?php echo $ux; ?>>
    &nbsp;&nbsp;
    <input type=checkbox title='������ ���������� ��� ������' name=gr <?php echo $gr; ?>>
    <input type=checkbox title='������ � ���������� ��� ������' name=gw <?php echo $gw; ?>>
    <input type=checkbox title='���������� � ���������� ��� ������' name=gx <?php echo $gx; ?>>
    &nbsp;&nbsp;
    <input type=checkbox title='������ ���������� ��� ������������� �� �������� � ������' name=or <?php echo $or; ?>>
    <input type=checkbox title='������ � ���������� ��� ������������� �� �������� � ������' name=ow <?php echo $ow; ?>>
    <input type=checkbox title='���������� � ���������� ��� ������������� �� �������� � ������' name=ox <?php echo $ox; ?>>
  </td>
</tr>
<tr><td>&nbsp;</td><td><input class=button type=submit value=<?php echo $button;?>></td></tr>
<input type=hidden name=dir value=<?php echo $dir;?>>
<input type=hidden name=old value=<?php echo $name;?>>
</table>
</form>
<?php
  // ������� ���������� ��������
  require_once("bottomftp.php");
?>