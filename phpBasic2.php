<?php
/*
===================
Working with String
===================

Different between '' and "" is functional for functional to show value of variable and ' ' cannot show
*/

$text = "Aku suka dia";
$name = "Achmad";
$proffesion = "Progammer";
$text2 = "Sublime Text 3 includes an auto-upgrade mechanism on Windows and OS X to make upgrades a snap. Instead of going against the grain of the Linux ecosystem, packages and package repositories are provided for most of the major distributions.";
var_dump(strlen($text)); //mengihtung jumlah huruf
echo '<br>';
var_dump(trim($text)); //Remove blank space dari kanan sampai kiri
echo '<br>';
var_dump(strtoupper($text)); //Semunya jadi kapital
echo '<br>';
var_dump(strtolower($text));//Semunya jadi kecil
echo '<br>';
var_dump(str_replace("Aku","Achmad",$text));
echo substr($text, 2, 6);// Menampilkan sesuai dengan kebutuhan mulai dari start dan jumlah huruf
echo '<br>';
var_dump(strpos($text2,"includes"));//Menampilkan posisi dari string dimulai dari 0
echo 'Halo saya ' . $name . '  '.'Saya seorang '.$proffesion.' yang lagi kerja di perusahaan b Jakarta Barat'; // , adalah cara penggabungan dari string
echo '<br>';
echo "My name is $name $proffesion.\nI am a master of time and space. \"Yatta!\"";

/*
Variable Scoope .. Bagaimana sebuah variable dapat diakses darimanapun
-> Variable diluar function tidak dapat diakses didalam function begitu juga sebaliknya
jika masih ngeyel pengen akses lewat fungsi tambahkan global didalam fungsi
Static Variable .. Jika variable dididefinisikan sebagai static maka ketika dijalankan fungsi 
tersebut nilai variable akan selalu tetap biasanya cocok untuk ngetes berapa kali fungsi tersebut dijalankan contoh dibawah
*/

$b = 7;

function coba(){
    $a = 10;
    echo '<br>';
    echo $a;
    echo $b;
}

coba();

function cobaStatic(){
    static $a = 0;
    $a = $a + 1;
    echo $a;
}
cobaStatic();
cobaStatic();
cobaStatic();
cobaStatic();
/*
STATIC Method (Function) dan Property (Variable)
seluruh property dan method hanya bisa diakses dari objek, maka static property dan static method adalah pengecualiannya.
Static property dan static method adalah property (variabel) dan method (function) yang melekat kepada class, bukan kepada objek. 
Konsep static property memang ‘agak keluar’ dari konsep objek sebagai tempat melakukan proses, karena sebenarnya class hanya 
merupakan ‘blueprint’ saja.
*/
class yoman {
    public static $member;

    public static function beli_laptop() {
        echo "Beli laptopnya om";
    }
}
yoman::$member=400000;
echo "<br>";
echo "Harga beli Rp.".yoman::$member;
echo "<br>";
echo yoman::beli_laptop();




echo '<br>';
echo '<br>';
echo "Contoh Pengkondisian :";
echo '<hr>';
if(11 > 10){
    echo "Kondisi yang kita inginkan"; //true
  }
  
if(3 > 4){
    echo ""/"Kondisi yang kita inginkan tidak jalan";//false
}

?>

