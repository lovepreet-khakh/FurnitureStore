<?php
require('mysqli_connect.php');
$q="truncate table inventoryorders";
$r1=@mysqli_query($dbc,$q);
?>