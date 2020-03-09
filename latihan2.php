<html>
<head>
	<title>Latihan 2</title>
</head>
<body>
		<?php
		$A = 123 ; // variable global
		function Test() {
		global $A ; // variable local
		echo"Nilai A dalam fungsi = $A \n";  print("<br>");
		}
		Test();
		echo"Nilai A luar fungsi = $A \n";
		?>
</body>
</html>