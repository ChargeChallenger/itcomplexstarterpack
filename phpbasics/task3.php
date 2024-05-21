<?php

if (!empty($_POST['username'])) {
	$chararray = str_split(strip_tags($_POST['username']), 1);
	$chararray = array_unique($chararray);
	if (count($chararray) % 2 == 0) {
		echo "Girl!";
	} else {
		echo "Boy!";
	}
} else
	echo '
<form action="/phpbasics/task3.php" method="POST">
	<label>Имя пользователя</label>
	<input type="text" name="username">
	<button type="submit">Проверить</button>
</form>
';
