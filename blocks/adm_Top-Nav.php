<? $adm_diectory='/admin_panel/' ?>
<ul class="topnav">
  <li><a <? if($_SERVER['REQUEST_URI']===$adm_diectory || $_SERVER['REQUEST_URI']===$adm_diectory.'index.php') echo 'class="active"' ?> href="index.php" title="Main">Գլխավոր</a></li>
  <li><a <? if($_SERVER['REQUEST_URI']===$adm_diectory.'news.php') echo 'class="active"' ?> href="news.php" title="News Redaction">News-Ռեդակցիա</a></li>
  <li><a <? if($_SERVER['REQUEST_URI']===$adm_diectory.'gradarak.php') echo 'class="active"' ?> href="gradarak.php" title="News Redaction">Գրադարակ</a></li>
  <li><a <? if($_SERVER['REQUEST_URI']===$adm_diectory.'logs.php') echo 'class="active"' ?> href="logs.php" title="Logs">Գրասենյակ</a></li>
  <li class="right"><a href="http://emma-sargsyan.xyz/" title="Page">Էջ</a></li>
  <li class="right"><a <? if($_SERVER['REQUEST_URI']===$adm_diectory.'offers.php') echo 'class="active"' ?> href="offers.php" title="Page">Առաջարկներ</a></li>
</ul>