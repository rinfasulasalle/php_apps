<?php

$navegador = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];

echo "<h1>SATISFACTORIO: 😃</h1>";
echo "<br>";
echo "<h2>Navegador: $navegador</h2>";
echo "<br>";
echo "<h2>IP: $ip</h2>";

?>
