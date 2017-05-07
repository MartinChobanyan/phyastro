<?php
if(!isset($_COOKIE['interval']))
{
	$ints=time()+(5*60);
	setcookie("interval", $ints, $ints);
	include_once 'connection.php';
	include_once 'filter.php';
	filt($string);

	if (mysqli_connect_errno()) {
		printf("Մի բան այնպես չէ: %s\n", mysqli_connect_error());
		exit();
	}

	mysqli_set_charset($link, "utf8");

	if($_POST['nameFF']!='')
	{
		$name = filt($_POST['nameFF']);
	}
	if($_POST['contactFF']!='')
	{
		$mail = $_POST['contactFF'];
	}

	$ip = $_SERVER['REMOTE_ADDR'];

	if($_POST['messageFF']!='') 
	{
		$mess = filt($_POST['messageFF']);
	}

	
	$query = "INSERT INTO `Offers` (`id`,`name`,`mail`,`ip`,`offer`) VALUES ('','$name','$mail','$ip','$mess')";

	$result = mysqli_query($link, $query);

	if($result===True)
	{
		echo "Ձեր առաջարկը ուղարկված է: Մեր խումբը կպատասխանի ձեզ 2 օրվա մեջ: Շնորհակալություն առաջարկի համար!";
	}
	else echo "Առաջարկը ուղարկված չէ տեխնիկական խնդիրների պատճառով։";

	mysqli_close($link);
} else 
{
	echo "Դուք չեք կարող ուղարկել նամակ ավելի քան 5 րոպե հաճախականությամբ, փորձեք ";
	echo round(($_COOKIE['interval']-time())/60, 1);
	echo " րոպեից:";
}
?>