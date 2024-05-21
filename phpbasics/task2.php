<?php

$arraySource = [7, 4, 2, 8, 1, 5, 9, 3, 10, 6];
echo "Изначальный массив: ";
foreach ($arraySource as $number) {
	echo $number . ", ";
}

for ($j = 1; $j < count($arraySource); $j++) { //сортировка вставками
	$key = $arraySource[$j];
	$i = $j - 1;
	while ($i >= 0 and $arraySource[$i] > $key) {
		$arraySource[$i + 1] = $arraySource[$i];
		$i = $i - 1;
	}
	$arraySource[$i + 1] = $key;
}

echo "<br>Сортированный массив:";
foreach ($arraySource as $number) {
	echo $number . ", ";
}
