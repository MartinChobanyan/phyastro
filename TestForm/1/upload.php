<html>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES['file']['tmp_name']);
$ok = false;
	switch ($mime) {
	   case 'image/jpeg':
	   case 'application/pdf'
	        $ok = true;
	}
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]) && $ok==true)
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/home/u557977471/public_html/TestForm/".$_FILES["filename"]["name"]);
     echo "Файл успешно загружен на сервер!";
   } else {
      echo "Ошибка загрузки файла";
   }
?>
</body>
</html>