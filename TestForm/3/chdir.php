<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-������ SoftTime (http://www.softtime.ru)
// �������� �.�. (simdyanov@softtime.ru)
// ������� �.�. (softtime@softtime.ru)
///////////////////////////////////////////////////
?>
���������...
<?php
  // ������������� ���������� � FTP-��������
  require_once("config.php");
  // �������� �������� ���������� ����������
  // ������� POST �� HTML-����� mkdirform.php
  $dir = $_POST['dir'];
  $name = $_POST['name'];
  $old = $_POST['old'];
  // ����������� ����� ������� ������������
  // � �������� �����
  $user = 0;
  if($_POST['ur'] == 'on') $user += 4;
  if($_POST['uw'] == 'on') $user += 2;
  if($_POST['ux'] == 'on') $user += 1;
  // ����������� ����� ������� ��� ������
  // � �������� �����
  $group = 0;
  if($_POST['gr'] == 'on') $group += 4;
  if($_POST['gw'] == 'on') $group += 2;
  if($_POST['gx'] == 'on') $group += 1;
  // ����� ������� �� ��������� ���
  // ��������� ������������� (�� �������� � ������)
  $other = 0;
  if($_POST['or'] == 'on') $other += 4;
  if($_POST['ow'] == 'on') $other += 2;
  if($_POST['ox'] == 'on') $other += 1;
  // ��������� ������� �� ��� ��� ����������
  if(empty($name)) puterror("������������ ��� ��� ����������");
  $direct = str_replace('%', '/', $dir);
  $direct = substr($direct, 0, strrpos($direct, "/"));
  // ��������������� ������� $old
  if(ftp_rename($link, $direct."/".$old, $direct."/".$name))
  {
    // ������ ������������ ���������� $mode
    // � ������� ������� � ����������
     eval("\$mode=0$user$group$other;");    
    // �������� ����� ������� ��� ������ ���
    // ��������� ����������
     if(ftp_chmod($link, $mode, $direct."/".$name))
    {
      // ������������ �������������� �������
      // �� �������� ����������������� ftp-��������
      echo "<HTML><HEAD>
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?dir=".substr($dir, 0, strrpos($dir, "%"))."'>
            </HEAD></HTML>";
    } else puterror("�� ������ �������� ����� ������� � ����������");
  } else puterror("�� ������ ������������� ����������");
?>