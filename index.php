<?php
//logika and
//logika and adalah logika yang bernilai benar jika semua input bernilai true. jika logika true maka yang dijalanka itu if, jika false maka yang dijalankan itu else.
//contoh
$username = "atmin";
$password = 123;
if($username == "atmin" && $password==123){ //dua duanya bernilai true
   echo "login berhasil <br>"; //yang dijalankan ini karena semuanya bernilai benar
} else {
   echo "login gagal";
}
$punya_sim=true;
$umur18=false;
if($punya_sim==true && $umur18==true){
echo "tidak ditilang";
} else{
echo "ditilang<br>"; //yang dijalankan ini karena salah 1 bernilai false
}
$sudahmakan = false;
$tidur = true;
var_dump($sudahmakan && $tidur);//ini akan bernilai false karena salah 1 false
echo "<br>";

//logika or
//logika or adalah logika yang bernilai benar jika 1 atau kedua inputan/kondisi bernilai true
//contoh
$tiket_digital = true;
$tiket_fisik = false;
if($tiket_digital == true || $tiket_fisik == true){ //ini kan 1 aja yanng benar
echo "boleh masuk konser<br>"; //maka yang dijalankan ini, yang penting 1 aja yang benar
} else {
   echo " g boleh";
}


//logika not adalah membalikan nilai input, true jaadi false dan sebaliknya
$korupsi = false; //ini kan false
if(!$korupsi){ //ini dibalik, yang tadinya false menjadi true
   echo "Indonesia maju <br>"; //karena true, yang dijalankan di blok if. kalau false yng dijalankan di else
} else{
   echo "indonesia bubar";

}
$hujan = true; //ini kan true
if (!$hujan) { //dibalik jadi false
   echo "Jalan-jalan";
} else{
   echo "dirumh aja <br>"; //karena false, yang dijalanin itu else
}


//LOGIKA XOR
//Salah 1 tapi tidak keduanya. jadi logika bernilai true jika hanya Salah 1 saja yang benar Dan jika keduanya benar Maka akan false. intinya harus beda
$es_teh=true;//diembat
$kopi=true;//diembat
//diembat semua
if($es_teh xor $kopi){
   echo "selamat menimati";
} else{
   echo "rakus lu ye";
}
?>