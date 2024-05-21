<?php

$totalbalance = random_int(10000, 20000);
echo "Изначальный баланс: " . $totalbalance . "<br>";
$maxbalance = $totalbalance;
$maxday = null;

class BalanceByDay
{
	public $increase, $decrease;
}

$daysArray = [];
echo "Список серий (дней) P.S. Не совсем понял, что подразумевается по сериями, надеюсь, что дни.:<br>";
for ($i = 0; $i < 10; $i++) {
	$day = new BalanceByDay;
	$day->increase = random_int(0, 1000);
	$day->decrease = random_int(0, 1000);
	echo "День " . ($i + 1) . ": Пополнение: " . $day->increase . "; Расход: " . $day->decrease . ". ";
	$totalbalance = $totalbalance + $day->increase - $day->decrease;
	if ($totalbalance > $maxbalance) {
		$maxbalance = $totalbalance;
		$maxday = $i;
	}
	echo "Баланс на этот день: " . $totalbalance . ".<br>";
	array_push($daysArray, $day);
}

if (is_null($maxday)) {
	echo "Максимальный баланс был до трат сотрудника";
} else {
	echo "Максимальный баланс был в день " . ($maxday + 1);
}
