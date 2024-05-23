<script>
	var string = "0111011111100000111";
	if (string.match(/(?=(.))\1{7,}/g)) {
		alert('YES')
	} else {
		alert('NO')
	}
</script>