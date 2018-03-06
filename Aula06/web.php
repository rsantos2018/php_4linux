<?php
echo "<pre>";

//header('Location: http://www.4linux.com.br');

//header('Content-type: application/txt');

//print_r($_SERVER);

<form action = "#" method = "POST">
	<input type = "text" name = "idade">
	<input type = "submit" value = "ok">
</form>

echo "<hr>";
<form action = '#' enctype="multpart/form-data" method = 'POST'>
	<input type = "file" name = "arquivo">
	<input type = "submit" value = "ok">
</form>

echo "<hr>";
