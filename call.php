<?php
$telNum = GET['n'];
$url = "tel://" + $telNum;
header("Location: $url");
?>

