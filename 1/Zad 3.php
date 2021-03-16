<?php
$zle_slowa =array("kupe","pupe");
$c = "Ala ma pupe i robi kupe";
$d = "****";
$cenzura = str_replace($zle_slowa,$d, $c);
echo $cenzura;
?>
