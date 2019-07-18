<?php
	//Подключаем библиотеку парсера
	include "simple_html_dom.php";
	//Выводим введенный нами поисковой запрос
	echo('<b>Результат по запросу:</b> '.$_POST['key'].'<br/><br/>');
	$url = "https://yandex.ru/search/xml?user=sizov73ul&key=03.184190486:147b5f2696a2f6c1c2650a24e9c7e7b4&query=".urlencode($_POST['key']).'&lr='.$_POST['city'];
	//Парсим страницу по сформированному запросу:
	echo $url;
	$html = file_get_html($url);
	echo $html;
	//Выводим результат в текстовое поле
	echo('<textarea name="comment" cols="40" rows="3">'.$html.'</textarea>');
	
	//Вывод всех слов из подстветки сниппета
	foreach($html->find('a', 0) as $element) {
		echo $element->innertext.' / ';
	}
