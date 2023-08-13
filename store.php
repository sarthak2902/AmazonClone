<?php
$myfile = fopen("locates.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>
