<?
include_once 'scripts/getrow.php';
include_once 'scripts/filter.php';
$result=mysqli_query($link, "SELECT * FROM `Offers` ORDER BY `id` DESC") or die(mysqli_error($link));
?>
<html>
<head>
  <title>ADMIN PANEL - Offers</title>

  <? include_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_head.html' ?>
    <link href="/css/adm_PostForm.css" rel="stylesheet">
</head>

</head>
<body>

<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_header.html' ?>

<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/adm_Top-Nav.php' ?>

<div class="Y-Back">
<h1><i class="Y-Glux">Առաջարկներ</i></h1>
<p class="Text"><i>&nbsp;&nbsp;Այստեղ դուք կարող եք կապ հաստատել MySQL գրադարանի հետ և կատարել կայքի առաջարկների հետ կապված աշխատանք։ Կարող եք կատարել աղյուսակի մաքրում(այն մեխանիկորեն կատարվում է ամեն ամիս)։</i></p><hr>
<br>
<center>
  <table id="Proekcia" border="1" bgcolor="#FFFFFF" cellpadding="1">
   <caption style="font-size: 30px; font-stretch: ultra-expanded; color:#d6cbd1">MySQL Գրադարանի պրոեկցիա</caption>
   <tr>
    <th>ID</th>
    <th>Անուն(Name)</th>
    <th>Առաջարկ(Offer)</th>
    <th>mail</th>
    <th>IP</th>
   </tr>
  <?
    while ($row=getrow()):
      echo '<tr><td>'.$row['id'].'</td><td>'.filt($row['name']).'</td><td>'.filt($row['offer']).'</td><td><a href="mailto:'.filt($row['mail']).'">'.$row['mail'].'</a></td><td>'.$row['ip'].'</td></tr>';
    endwhile; 
  ?>
  </table>
</center><br>
<br>
<center>
    <input type="submit" class="Post-form" style="font-size: 2em; color: white;" onclick="window.location.href='scripts/TRUNCATE-table.php'" value="Մաքրել"></form>
</center> 
<br>
</div>
</body>
</html>