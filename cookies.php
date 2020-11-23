<?php

//print_r($_COOKIE);
$besuch = 1;
if (isset($_COOKIE['besuch'])) {
    $besuch = $_COOKIE['besuch'];
}
setcookie("besuch", $besuch+1, time() + "5");
echo "{$besuch}. Mal";
?>