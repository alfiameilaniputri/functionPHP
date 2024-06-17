<?php
//function bawaan dari php
//Tetapkan zona waktu sesuai kebutuhan
date_default_timezone_set('Asia/Jakarta');

echo "Today is ".date("l, d-M-Y")."<br>";

$waktu_sekarang = time();
echo "$waktu_sekarang";


echo "5 days from now is " . date("l", time() + 60*60*24*5)."<br>";

//USER DEFINED FUNCTION
// function non parameter
function perkenalan(){
  echo "Assalamulaikum, ";
  echo "Perkenalkan, Saya Alfia Meilani Putri<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

perkenalan();

//Function dengan parameter dan argument
function family($fname,$lname) {
  echo "$fname $lname.<br>";
}

family("Alfia","Meilani");
family("Zhimi", "Oktoputra");


//Function dengan parameter dan terdapat return
function luaspersegipanjang($panjang, $lebar){
  $luas = $panjang * $lebar;
  return $luas;
}
echo "Luas Persegi Panjang:".luaspersegipanjang(2,5)."<br>";


//function yang tidak diketahui jumlah parameternya 
function sum(...$input){
  $result = 0;
  foreach($input as $value){
    $result = $result + $value;
  }
  return $result;
}

echo "Jumlahnya:".sum(18,5,4,9,10,600)."<br>";

?>
