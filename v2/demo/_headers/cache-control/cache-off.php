<?
header("Cache-control: no-cache, max-age=0");// Запрет кеширования при перезагрузке браузера
/* header("Cache-control: no-store"); // Полный запрет кеширования */
?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8" />
	<title>Запрет кеширования</title>
</head>

<body>
<h1>Запрет кеширования</h1>
<h1><?=date("H:i:s")?></h1>

</body>
</html>
