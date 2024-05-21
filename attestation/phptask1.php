<?php

class Good
{
	public $name, $weight;
}

$goodsArray = [];
echo "Массив товаров:<br>";
for ($i = 0; $i < 10; $i++) {
	$good = new Good;
	$good->name = "Good" . ($i + 1);
	$good->weight = random_int(1, 6);
	echo ($i + 1) . ". Название: " . $good->name . "; Вес: " . $good->weight . ".<br>";
	array_push($goodsArray, $good);
}

$i = 0;
while ($i < count($goodsArray)) {
	$good1 = $goodsArray[$i];
	for ($j = $i + 1; $j < count($goodsArray); $j++) {
		$good2 = $goodsArray[$j];
		if ($good1->weight == $good2->weight) {
			echo "Найдена пара по весу:<br>";
			echo ($i + 1) . ". Название: " . $good1->name . "; Вес: " . $good1->weight . "; и ";
			echo ($j + 1) . ". Название: " . $good2->name . "; Вес: " . $good2->weight . ".<br>";
		}
	}
	$i++;
}
