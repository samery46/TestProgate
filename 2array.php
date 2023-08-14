<?php

$data[1] = "Amir";
$data[2] = "Ferry";
$data[3] = "Johan";
$data[4] = "Siska";
$data[5] = "Velly";

//cari data
$cari = array_search("Johan", $data);
echo "Hasil pencarian di index : ".$cari;
