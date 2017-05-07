<?
	function filt($string) // Фильтр
	{
		$string = trim($string);
		$string = htmlspecialchars($string); // Чистим по 1 кругу
		$string = str_replace("\xC2\xA0", " ", $string); // Удаляем неразрывные пробелы
		return $string;
	}
?>