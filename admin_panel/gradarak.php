<?
  include_once '../scripts/getrow.php';
  $result=mysqli_query($link, "SELECT * FROM `Gradaran` ORDER BY `title`") or die(mysqli_error($link));
?>
<html>
  <head>
    <title>ADMIN PANEL - Bookcase</title>

    <? include_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_head.html' ?>
    <link href="/css/adm_PostForm.css" rel="stylesheet">
  </head>

  </head>
  <body>

    <? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_header.html' ?>
    <? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/adm_Top-Nav.php' ?>

    <div class="Y-Back">
      <h1><i class="Y-Glux">Գրադարակ</i></h1>
        <p class="Text"><i>&nbsp;&nbsp;Այստեղ դուք կարող եք կապ հաստատել MySQL գրադարանի հետ և կատարել կայքի <b>գրադարանի</b> հետ կապված աշխատանք։ Կարող եք կատարել փոփոխություն, հեռացնել կամ ավելացնել գրքեր։ Կատարված գործողությունը միանգամից կմտնի ուժի մեջ։ Այս կամ այն գործողությունը կատարելիս եղեք ուշադիր, բոլոր օգտվողները միանգամից կաշխատեն փոփոխված տարբերակի հետ։</i></p>
      <hr>
        <p style="text-align: center; font-size: 18px; color: #44D5EB">Բոլոր ոչ ադեկվատ գործողություն կատաողների IP adress-ները կարգելափակվեն և դուրս կգան ադմինիստրատիվ կամ մոդեռատոր խմբերից։</p>
      <hr><br>

      <center>
        <table id="Proekcia" border="1" bgcolor="#FFFFFF" cellpadding="1">
          <caption style="font-size: 30px; font-stretch: ultra-expanded; color:#d6cbd1">MySQL Գրադարանի պրոեկցիա</caption>
          <tr>
            <th>ID</th>
            <th>Անվանում(title)</th>
            <th>Հղում(link)</th>
            <th>type</th>
            <th>Hidden?</th>
          </tr>
          <?
            mysqli_close($link);
            while ($row=getrow()):
              echo '<tr '; if(!$row['visible']) echo 'class="hidden" '; echo 'id='.$row['id'].'>
                <td>'.$row['id'].'</td>
                <td>'.$row['title'].'</td>
                <td>'.$row['link'].'</td>
                <td>
                  <select id='.$row['id'].'>
                    <option value="0" ';if($row['type']==0) echo 'selected disabled'; echo '>Դպրոցական</option>
                    <option value="1" ';if($row['type']==1) echo 'selected disabled'; echo '>Համալսարանական</option>
                    <option value="2" ';if($row['type']==2) echo 'selected disabled'; echo '>Մասնագիտացված</option>
                  </select>
                </td>
                <td style="padding-left:22.5px">
                  <form><input type="checkbox" id="'.$row['id'].'"';
                    if(!$row['visible']) echo 'checked value="0"'; else echo 'value="1"';echo '>
                  </form>
                </td>
              </tr>';
            endwhile;
          ?>
        </table>
        <br>

        <form method="POST" id="Girq-make" class="Post-form">
          <span style="color: #FFEAEA">Գրքի ID<span style="color: #9BA3A9">(փոփոխում)</span>:</span>
            <input type="text" onkeyup="Completer()" autocomplete="off" pattern="[0-9]{0,3}" name="id" placeholder="ID համար[0-3 թվանշան]">
          <span style="color: #FFEAEA">Գրքի անվանում:</span>
            <input type="text" name="title" required placeholder="Գրքի անվանում">
          <span style="color: #FFEAEA">Հղում:</span>
            <input type="text" name="link" required placeholder="Հղում">
          <span style="color: #FFEAEA">Type of the book:</span>
            <select name="book-type">
              <option value="0">Դպրոցական</option>
              <option value="1">Համալսարանական</option>
              <option value="2">Մասնագիտացված</option>
            <select><br>
          <input type="submit" value="Ավելացնել|Փոփոխել">
        </form>
      </center>
      <br>

      <center>
        <form method="POST" id="Girq-del" class="Post-form">
          <span style="color: #FFEAEA">Գրքի ID:</span>
          <input type="text" autocomplete="off" pattern="[0-9]{0,3}" name="id" required placeholder="ID համար[0-3 թվանշան]">
          <input type="submit" value="հեռացնել">
        </form></center>
        <br>
    </div>
    <script>
      document.getElementById('Girq-make').addEventListener('submit', function(evt){
        var http = new XMLHttpRequest(), f = this, o = document.getElementsByName('book-type')[0];
        evt.preventDefault();
        http.open("POST", "../scripts/girq-maker.php", true);
        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        http.send("&id=" + f.id.value + "&title=" + f.title.value + "&link=" + f.link.value + "&type=" + o.value);
        http.onreadystatechange = function() {
          if (http.readyState == 4 && http.status == 200) {
            alert(http.responseText);
            f.id.value=f.link.value=f.title.value='';
            o.value=0;
            location.reload();
          }
        }
      }, false);
      document.getElementById('Girq-del').addEventListener('submit', function(evt){
        var http = new XMLHttpRequest(), f = this;
        evt.preventDefault();
        http.open("POST", "../scripts/girq-deleter.php", true);
        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        http.send("&id=" + f.id.value);
        http.onreadystatechange = function() {
          if (http.readyState == 4 && http.status == 200) {
            alert(http.responseText);
            f.id.value='';
            document.getElementById(f.id.value).style.display = "none";
          }
        }
      }, false);
      function Completer(){
        var t, c = document.getElementsByName('id')[0].value;
        if(t = document.getElementById(c)){
          var e = t.getElementsByTagName('select')[0]; 
          t = t.getElementsByTagName('td');
          document.getElementsByName('title')[0].value = t[1].innerHTML;
          document.getElementsByName('link')[0].value = t[2].innerHTML;
          document.getElementsByName('book-type')[0].value = e.value;
        }else document.getElementsByName('title')[0].value = document.getElementsByName('link')[0].value = '', document.getElementsByName('book-type')[0].value=0;
      };
      </script>
      <!-- jquery -->
        <script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script>
      <script>
      jQuery(document).ready(function(e) {
        jQuery("td input[type=checkbox]").change(function() {
          id = $(this).attr('id');
          vle = $(this).val();
          aj("../scripts/hidder.php", false, "html", {
            "id": id,
            "value": vle
          }, function(){
            location.reload(); // peridical change on this(wait for optimization)
          });
        });
        jQuery("td select").change(function() {
          id = $(this).attr('id');
          t = $(this).val();
          aj("../scripts/bktch.php", false, "html", {
            "id": id,
            "type": t
          }, function(){
            location.reload(); // peridical change on this(wait for optimization)
          });
        });
        /*=======Функция универсального ajax запроса=======*/
        function aj(url, async, datatype, data, success) {
          $.ajax({
            type: "POST",
            url: url,
            async: async,
            timeout: 20000,
            dataType: datatype,
            data: data,
            success: success,
            error: function(err) {
              console.log(err);
            }
          });
        }
        }); //конец ожидания DOM
    </script>
  </body>
</html>