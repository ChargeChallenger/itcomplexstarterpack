<?php

class TextDisplayer
{
	public $text;
	function __construct($text)
	{
		$this->text = $text;
	}

	function displayText()
	{
		echo $this->text;
	}
}

class TextPrinter extends TextDisplayer
{
	function printText()
	{
		echo "Отправляем на принтер текст:" . $this->text; //образно печатаем
	}
}

class TextDisplayertoScreen extends TextDisplayer
{
	function displayToScreen()
	{
		echo "<h1>Вывод на экран: " . $this->text . "</h1>";
	}
}

$tp = new TextPrinter('тестовый текст');
$tp->displayText();
$tp->printText();
$tds = new TextDisplayertoScreen('второй текст');
$tds->displayToScreen();
