<?
include_once 'admin_panel/scripts/conf.php';
include_once 'admin_panel/scripts/logreader.php';
?>
<html lang="hy">
<head>
<title><?=$name?> գրադարան | Հետադարձ կապ</title>

<? require_once 'blocks/head.html' ?>

<!-- Additional styles -->
<link href="css/Request_Form.css" rel="stylesheet">
<!-- ~~~~~~~~~~~~~~~~~ -->

</head>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<body>

<? require_once ('blocks/header.php') ?>
<? require_once ('blocks/Top-Nav.php') ?>

<div style="height: 70vh">

<div class="Y-Back">
<noindex><h1><i class="Y-Glux">Հետադարձ կապ</i></h1></noindex>
<p class="Text"><i>&nbsp;&nbsp;Այստեղ դուք կարող եք կապ հաստատել մեզ հետ և ներկայացնել ձեր առաջարկները։ Կարող եք արտահայտել ձեր կարծիքը և հագեցնել գրադարանը։ Մեր խումբը կուսումնասիրի ձեր առաջարկը և երկու օրվա ընթացքում կապ կհաստատի ձեզ հետ։ Գիրք առաջարկելու դեպքում ցանկալի է ավելացնել հղումն, որպեսզի գիրքն ավելի արագ կերպով հայտնվի ցանկում։</i></p><hr>

<p style="text-align: center; font-size: 18px; color: #44D5EB">Բոլոր spam անողների IP adress-ները կարգելափակվեն։</p>

<center><form method="POST" id="feedback-form">
<!-- <i style="font-size: 37px; font-stretch: ultra-expanded; color:#d6cbd1">հետադարձ կապ</i><br><br> -->
<span style="color: #FFEAEA">Ձեր անուն ազգանունը:</span>
<input type="text" name="nameFF" maxlength="25" required placeholder="Անուն Ազգանուն" x-autocompletetype="name">
<span style="color: #FFEAEA">E-mail կապի համար:</span>
<input type="email" name="contactFF" maxlength="54" required placeholder="Էլեկտրոնային հասցե" x-autocompletetype="email">
<span style="color: #FFEAEA">Ձեր նամակը:</span>
<textarea name="messageFF" maxlength="260" required rows="5"></textarea>
<input type="submit" value="Ուղարկել">
</form></center>
<hr> <?require_once ('blocks/footer.php') ?> <!--FOOTER PART-->  </div> </div>

<script>
function RandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
document.getElementById('feedback-form').addEventListener('submit', function(evt)
{
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  var a = RandomInt(1, 11);
  var b = RandomInt(0, 11);
  check = prompt(a + " + " + b + " =");
  if((a+b)==check)
  {
    http.open("POST", "admin_panel/scripts/contacts.php", true);
    http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
    http.onreadystatechange = function() {
      if (http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
        f.messageFF.removeAttribute('value');
        f.messageFF.value='';
      }
    }
    http.onerror = function() {
      alert('Ձեր նամակն ուղարկված չէ։ Ստուգեք ձեր ինտերնետային միացությունը կամ փորձեք մի փոքր ուշ։');
    }
  }
  else{
    alert('Դուք չանցաք ստուգումը, ձեր նամակն ուղարկված չէ։');
    f.contactFF.removeAttribute('value');
    f.contactFF.value='';
    f.messageFF.removeAttribute('value');
    f.messageFF.value='';
  }
}, false);
</script>

</body>
</html>