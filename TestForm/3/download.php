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
  // ��������� �� ������ ������� ����������� ����
  $dir = $_GET['dir'];
  $direct = str_replace('%', '/', $dir);
  // ��������� ���� � ���������� files
  $path = "files/".substr($direct, strrpos($direct,"/") + 1);
  // ����� ���������� �����, ����� �� �� �����������������
  // ��� php � ������
  //$path = substr($path, 0, strpos($path, "."));
  $ret = ftp_nb_get($link, $path, $direct, FTP_BINARY);
  while ($ret == FTP_MOREDATA)
  {
    // ������� ����� ���-�� ������������
    // ���� ��� ������� ���
    echo ".";
    // ���������� ��������
    $ret = ftp_nb_continue($link);
  }
  // ���� ���������� ������ ��� �������� �����
  // ���������� �� ���� ������������
  if ($ret != FTP_FINISHED)
  {
    echo "<br>�� ����� �������� ����� ��������� ������...";
    exit();
  }
  else
  {
    // ���������� ���������� ����
    echo "<HTML><HEAD>
          <META HTTP-EQUIV='Refresh' CONTENT='1; URL=$path'>
          </HEAD></HTML>";
  }
?>