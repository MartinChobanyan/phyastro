<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-������ SoftTime (http://www.softtime.ru)
// �������� �.�. (simdyanov@softtime.ru)
// ������� �.�. (softtime@softtime.ru)
///////////////////////////////////////////////////
  $title = "FTPmanager 1.0.0";  
  $pageinfo = '�������������� ����������';
  // ������� "�����" ��������
  require_once("topftp.php");
  // ��������� �� ������ ������� ��� ����������� �����
  // � ����� �������
  $dir = $_GET['dir'];
  $name = substr($dir, strrpos($dir, "%") + 1);
  $acc = $_GET['acc'];
  // ������������ ������ ���� ������� ������������
  if(substr($acc, 1, 1) == 'r') $ur = "checked";
  else $ur = "";
  if(substr($acc, 2, 1) == 'w') $uw = "checked";
  else $uw = "";
  if(substr($acc, 3, 1) == 'x') $ux = "checked";
  else $ux = "";
  // ������������ ������ ���� ������� ������
  if(substr($acc, 4, 1) == 'r') $gr = "checked";
  else $gr = "";
  if(substr($acc, 5, 1) == 'w') $gw = "checked";
  else $gw = "";
  if(substr($acc, 6, 1) == 'x') $gx = "checked";
  else $gx = "";
  // ������������ ������ ���� ������� ��������� �������������
  if(substr($acc, 7, 1) == 'r') $or = "checked";
  else $or = "";
  if(substr($acc, 8, 1) == 'w') $ow = "checked";
  else $ow = "";
  if(substr($acc, 9, 1) == 'x') $ox = "checked";
  else $ox = "";
  // ����������� ����� �� ����������� ��������
  // ����� � ��� ���� �������
  if(!isset($action)) $action = "chdir.php";
  if(!isset($button)) $button = "���������";
  if(!isset($title)) $title = "������������� �����";
  // �������� HTML-�����
  include "uploadform.php";
?>