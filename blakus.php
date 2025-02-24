<?php

sleep(20);
(float)$xcoord=$_POST['x'];
(float)$ycoord=$_POST['y'];
$id=$_POST['id'];
(integer)$periodType=$_POST['periodType'];
echo $xcoord." ".$ycoord." ".$id." ".$periodType;
?>