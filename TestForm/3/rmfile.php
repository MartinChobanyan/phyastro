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
  // ��������� �� ������ ������� ���� � ���������� �����
  $dir = $_GET['dir'];
  $direct = str_replace('%', '/', $dir);
  // ������� ����
  if(ftp_delete($link, $direct))
  {
      // ������������ �������������� �������
      // �� �������� ����������������� ftp-��������
      echo "<HTML><HEAD>
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?dir=".substr($dir, 0, strrpos($dir,"%25"))."'>
            </HEAD></HTML>";
  } else puterror("�� ������ ������� ����");
?>