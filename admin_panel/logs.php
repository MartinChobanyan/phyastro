<html>
<head>
	<title>ADMIN PANEL - Logs</title>

<? include_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_head.html' ?>

<style type='text/css'>
    td.zz { padding-left: 3px; font-size: 9pt; padding-top: 2px; font-family: Arial; }
</style>
</head>
<body>

<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_header.html' ?>

<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/adm_Top-Nav.php' ?>

<?
$file=file("logs/base.log"); // Путь к файлу с ВХОДАМИ
if (isset($_GET[col]) || isset($_GET[clean]))
{
	$col=$_GET[col];
	$clean=$_GET[clean];
}
else
{
	$col=50;
	$clean=False;
}
?>

<center>
<?
    if ($col>sizeof($file)) $col=sizeof($file);
    if ($clean) { file_get_contents('logs/base.log'); file_put_contents('logs/base.log', ''); $col=0; }
    echo "Последние <b>".$col."</b> посещений сайта:"; 
?>

<table width="680" cellspacing="1" cellpadding="1" border="0" style="table-layout:fixed">
<tr bgcolor="#eeeeee">
 <td class="zz" width="100"><b>Ժամանակ, ամսաթիվ</b></td>
 <td class="zz" width="200"><b>Այցելուի տվյալներ</b></td>
 <td class="zz" width="100"><b>IP, Proxy</b></td>
 <td class="zz" width="280"><b>Այցելված հղումը</b></td>
</tr>

<?
   for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
   $string=explode("|",$file[$si]);
   $q1[$si]=$string[0];
   $q2[$si]=$string[1];
   $q3[$si]=$string[2];
   $q4[$si]=$string[3];
echo '<tr bgcolor="#eeeeee"><td class="zz">'.$q1[$si].'</td>';
echo '<td class="zz">'.$q2[$si].'</td>';
echo '<td class="zz">'.$q3[$si].'</td>';
echo '<td class="zz">'.$q4[$si].'</td></tr>';
}
echo '</table>';
echo '<br>Արտածել <a href=?col='.sizeof($file).'>բոլոր այցելումները</a>:';
echo '<br>Ցուցակը <a href=?clean=True>մաքրել</a>:</center>';
echo '</body></html>';
?>

</body>
</html>
