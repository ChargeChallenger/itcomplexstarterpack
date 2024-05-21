<h1 id="header">Отзывы:</h1>
<? for ($i = 0; $i < 5; $i++) :
	$currentrate = random_int(1, 5); ?>
	<input type="hidden" name="rate<?= $i ?>" value="<?= $currentrate ?>">
	<h4>Отзыв <?= $i + 1 ?>. Текущая оценка (1-5): <b><?= $currentrate ?></b></h4>
<? endfor; ?>
<script>
	var allRatingInputs = document.querySelectorAll('input[type="hidden"]');
	var sum = 0;
	for (i = 0; i < allRatingInputs.length; i++) {
		sum += Number(allRatingInputs[i].value);
	}
	var average = sum / allRatingInputs.length;
	alert(average);
	if (average > 4) {
		var colorRate = "green";
	} else if (average < 4 && average > 3) {
		var colorRate = "yellow";
	} else {
		var colorRate = "red";
	}
	document.getElementById("header").style.color = colorRate;
</script>