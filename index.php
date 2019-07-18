<!DOCTYPE html>
<html>
	<head>
		<title>Пример использования Яндекс.XML: парсер сниппета поисковой системы Яндекс</title> 
	</head>
	<body>
		<form method="post" action="yandex-result.php">
			<p>
				<b>Введите поисковую фразу:</b><br/>
				<input name="key" type="text" size="20">
			</p>
			<p>
				<b>Введите регион:</b><br/>
				<select  name="city">
					<option value="193">Воронеж</option>
					<option value="213">Москва</option>
				</select>
			</p>
			<p>
				<input type="submit" value="Отправить">
			</p>
		</form>
	</body>
</html>
