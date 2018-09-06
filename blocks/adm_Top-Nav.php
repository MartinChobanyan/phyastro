<ul class="topnav">
  <li><a <? if($_SERVER['REQUEST_URI']===ADMIN_PANEL_DIR || $_SERVER['REQUEST_URI']===ADMIN_PANEL_DIR.'index.php') echo 'class="active"' ?> href="index.php" title="Main">Գլխավոր</a></li>
  <li><a <? if($_SERVER['REQUEST_URI']===ADMIN_PANEL_DIR.'news.php') echo 'class="active"' ?> href="news.php" title="News Redaction">News-Ռեդակցիա</a></li>
  <li><a <? if($_SERVER['REQUEST_URI']===ADMIN_PANEL_DIR.'gradarak.php') echo 'class="active"' ?> href="gradarak.php" title="News Redaction">Գրադարակ</a></li>
  <li><a <? if($_SERVER['REQUEST_URI']===ADMIN_PANEL_DIR.'logs.php') echo 'class="active"' ?> href="logs.php" title="Logs">Գրասենյակ</a></li>
  <li class="right"><a href="<?=URL?>" title="Page">Էջ</a></li>
  <li class="right"><a <? if($_SERVER['REQUEST_URI']===ADMIN_PANEL_DIR.'offers.php') echo 'class="active"' ?> href="offers.php" title="Page">Առաջարկներ</a></li>
</ul>