<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan Split</title>
</head>
<body>
	<?php
	$tanggal = "17-05-2010";
	list($hari, $bulan, $tahun) = split("-", $tanggal);
	echo "Hari = $hari";
	echo "<br />";
	echo "Bulan = $bulan";
	echo "<br />";
	echo "Tahun = $tahun";
	?>
</body>
</html>
