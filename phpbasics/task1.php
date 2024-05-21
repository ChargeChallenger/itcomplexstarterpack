<?php

$arraySource = [
	"This is a test string",
	"Another example string",
	"test cases are important",
	"Just a random sentence",
	"Make sure to test thoroughly",
	"No relevant substring here",
	"Completely unrelated string",
	"The quick brown fox",
	"Jumps over the lazy dog"
];

$substring = "test";

$arrayA = [];
$arrayB = [];

echo "<b>Изначальный массив:</b><br>";
foreach ($arraySource as $string) {
	echo $string . "<br>";
	if (strpos($string, $substring) !== false) {
		array_push($arrayA, $string);
	} else {
		array_push($arrayB, $string);
	}
}

echo "<b>Подстрока:</b> " . $substring . "<br>";

echo "<b>Массив А:</b><br>";
foreach ($arrayA as $string) {
	echo $string . "<br>";
}

echo "<b>Массив B:</b><br>";
foreach ($arrayB as $string) {
	echo $string . "<br>";
}
