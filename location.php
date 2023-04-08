<?php
$my_file = fopen("locacccin.txt","w");
$information = "lat:" .$_GET["lat"] . "long:" .$_GET["long"];
fwrite($my_file , $information);
fclose($my_file);

?>