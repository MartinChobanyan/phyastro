<?php
///////////////////////////////////////////////////
// FTP-manager
// 2004 (C) IT-������ SoftTime (http://www.softtime.ru)
// �������� �.�. (simdyanov@softtime.ru)
// ������� �.�. (softtime@softtime.ru)
///////////////////////////////////////////////////
  // ����� FTP-�������
  $ftp_server = "31.170.165.233";
  // ������������
  $ftp_user = "u557977471";
  // ������
  $ftp_password = "martin55";
  // ������ Web-����������
  $version = "1.0.0";
  // ������������� ����� ���������� ������� 120 �
  set_time_limit(120);
  // �������� ���������� ���������� � FTP-�������� 
  $link = ftp_connect($ftp_server); 
  if(!$link) puterror("� ���������, �� ������� ���������� ���������� � FTP-�������� $ftp_server");
  // ������������ ����������� �� �������
  $login = ftp_login($link, $ftp_user, $ftp_password);
  if(!$login) puterror("� ���������, �� ������� ������������������ �� �������");
  // ��������� ��������������� �������, ������� ������� ��������� �� ������
  // � ���� ��������
  function puterror($message)
  {
    echo "<center><p class=help>$message</p>";
    exit();
  }
?>