
<?php

$code = highlight_string('
<?php
	$version = phpversion();
	$ip = $_SERVER["REMOTE_ADDR"];
	$temp = sys_get_temp_dir();
?>',1);
echo $code;

echo phpinfo();
?>

