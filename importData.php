<?php 
include 'koneksi.php';
$data = olahData(getData("dt_training.txt"));    
$a = [];
$b = [];
$c = [];
$d = [];
$e = [];
function getData($file){
    $fh = fopen($file, "r");
    $i = 0;

    while (!feof($fh)) {
        $line[$i] = fgets($fh);
        //echo "<table><tr><td>".$line[$i]."</td></tr></tabel>";
        $i++;
    }
           
    fclose($fh);
    return $line;
}
function olahData($data){
    $i = 0;
    $olah = null;
    foreach($data as $d){
        $olah[$i] = array_map("trim",explode(" ",$d));
        //print_r($olah[$i]);
        $a = $olah[0];
        $b = $olah[1];
        $c = $olah[2];
        $d = $olah[3];
        $e = $olah[4]; 
	$i++;
    }
    return $olah;
}
foreach($a as $data){
    echo $a;
}