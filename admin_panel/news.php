<?
include_once 'scripts/getrow.php';
$result=mysqli_query($link, "SELECT * FROM `News`") or die(mysqli_error($link));
?>
<html>
<head>
<title>ADMIN PANEL - News Redaction</title>
<? include_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_head.html' ?>
<link href="/css/adm_PostForm.css" rel="stylesheet">
</head>
</head>
<body>
<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_header.html' ?>
<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/adm_Top-Nav.php' ?>
<div class="Y-Back">
<h1><i class="Y-Glux">Նորույթների Ռեդակցիա</i></h1>
<p class="Text"><i>&nbsp;&nbsp;Այստեղ դուք կարող եք կապ հաստատել MySQL գրադարանի հետ և կատարել կայքի նորույթների հետ կապված աշխատանք։ Կարող եք կատարել փոփոխություն, հեռացնել կամ ստեղծել նորություն։ Կատարված գործողությունը միանգամից կմտնի ուժի մեջ։ Այս կամ այն գործողությունը կատարելիս եղեք ուշադիր, բոլոր օգտվողները միանգամից կտեսնեն ձեր անփույթությունը։</i></p><hr>
<p style="text-align:center;font-size:18px;color:#44D5EB">Բոլոր ոչ ադեկվատ գործողություն կատաողների IP adress-ները կարգելափակվեն և դուրս կգան ադմինիստրատիվ կամ մոդեռատոր խմբերից։</p>
<hr><br>
<center>
<table id="Proekcia" border="1" bgcolor="#FFFFFF" cellpadding="1">
<caption style="font-size:30px;font-stretch:ultra-expanded;color:#d6cbd1">MySQL Գրադարանի պրոեկցիա</caption>
<tr>
<th>ID</th>
<th>Անվանում(Title)</th>
<th>Նորություն(Description)</th>
</tr>
<?
    mysqli_close($link);
      while ($row=getrow()):
        echo '<tr id='.$row['id'].'><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td style="text-align: justify; white-space: pre-wrap;">'.$row['description'].'</td></tr>';
      endwhile;
  ?>
</table>
</center><br>
<center><form method="POST" id="News-make" class="Post-form">
<span style="color:#FFEAEA">Նորության ID<span style="color:#9BA3A9">(վերադրում/փոփոխում)</span>:</span>
<input type="text" autocomplete="off" max-length="3" pattern="[0-9]{0,3}" name="id" placeholder="ID[0-3 թվանշան]">
<span style="color:#FFEAEA">Նորության անվանում:</span>
<input type="text" name="title" required placeholder="Ապագա նորության անվանում">
<span style="color:#FFEAEA">Նորություն:</span>
<textarea name="description" required rows="5"></textarea>
<input type="submit" value="Ստեղծել|Փոփոխել">
</form></center>
<br>
<center><form method="POST" id="News-del" class="Post-form">
<span style="color:#FFEAEA">Նորության ID:</span>
<input type="text" autocomplete="off" max-length="3" pattern="[0-9]{0,3}" name="id" required placeholder="ID համար[0-3 թվանշան]">
<input type="submit" value="հեռացնել">
</form></center>
<br>
</div>
<script>/*<![CDATA[*/document.getElementById("News-make").addEventListener("submit",function(a){var b=new XMLHttpRequest(),c=this;a.preventDefault();b.open("POST","scripts/news-maker.php",true);b.setRequestHeader("Content-Type","application/x-www-form-urlencoded");b.send("&id="+c.id.value+"&title="+c.title.value+"&description="+c.description.value);b.onreadystatechange=function(){if(b.readyState==4&&b.status==200){alert(b.responseText);c.id.removeAttribute("value");c.id.value="";c.description.removeAttribute("value");c.description.value="";c.title.removeAttribute("value");c.title.value="";location.reload()}}},false);document.getElementById("News-del").addEventListener("submit",function(a){var b=new XMLHttpRequest(),c=this;a.preventDefault();b.open("POST","scripts/news-deleter.php",true);b.setRequestHeader("Content-Type","application/x-www-form-urlencoded");b.send("&id="+c.id.value);b.onreadystatechange=function(){if(b.readyState==4&&b.status==200){document.getElementById(c.id.value).style.display="none";alert(b.responseText);c.id.removeAttribute("value");c.id.value=""}}},false);/*]]>*/</script>
</body>
</html>
