<?
  ///////////////////////////////////////////////////
  // Image Java Editor v1.1.#
  // 2005 - 2006 (C) Выскорко М.С. (aspid02@ngs.ru)
  // описание работы скрипты Вы можете прочитать по адресу http://www.mv.hut2.ru/?caption=article&id=3&num=4
  ///////////////////////////////////////////////////
$path="images/";//путь дериктории куда будут копироваться отредактированные картинки
$size_img = getimagesize($_FILES["load"]["tmp_name"]);

$dest_img = imagecreatetruecolor($_POST["w"], $_POST["h"]);   

$r=(int)hexdec(substr($_POST["qq"],0,2));
$g=(int)hexdec(substr($_POST["qq"],2,2));
$b=(int)hexdec(substr($_POST["qq"],4,2));

$color = imagecolorallocate($dest_img, $r, $g, $b);  

imagefill($dest_img,0,0,$color);

if ($size_img[2]==2)  $src_img = imagecreatefromjpeg($_FILES["load"]["tmp_name"]);                       
	elseif ($size_img[2]==1) $src_img = imagecreatefromgif($_FILES["load"]["tmp_name"]);                       
		elseif ($size_img[2]==3) $src_img = imagecreatefrompng($_FILES["load"]["tmp_name"]);
		
imagecopyresampled($dest_img, $src_img, $_POST["pos_x"], $_POST["pos_y"], 0, 0, $_POST["img_x"], $_POST["img_y"], $size_img[0], $size_img[1]); 

$name_pic=$path.$_FILES["load"]["name"];

if ($size_img[2]==2)  imagejpeg($dest_img, $name_pic);                       
	elseif ($size_img[2]==1) imagegif($dest_img, $name_pic);
		elseif ($size_img[2]==3) imagepng($dest_img, $name_pic);
		
imagedestroy($dest_img);
imagedestroy($src_img);
print "<center><font color='green'><b>Загрузка завершена!</b></font></center>";
print ("<meta http-equiv=\"refresh\" content=\"2;URL=index.html\">");
?>