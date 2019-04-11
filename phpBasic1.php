<?php

$a = 3;
$b = 2;
$c = $a + $b;
$d = '3';
echo $c;
$go_2_home = "haha";
$go_2_Home = 'hahaha';
echo $go_2_Home.$go_2_home;
/*
1. var dump berfungsi untuk membolehkan variable dengan nama yang sama dengan tipe data berbeda
2. (Type Juggling) Menjadikan tipe data yang berbeda menjadi satu tipe data ex: string ke integer atau sebaliknya ,, misal dengan + maka variabel akan dikenal sebagai integer dan . maka akan dikenal sebagai st
*/
$number = 123;
var_dump($number);
$number = "hha";
var_dump($number);
/*
Aritmatic operator 
1. +
2. - 
3. *
4. /
5. ++
6. -(Negation)
7. Modulo (%)
*/

var_dump($a + $b);
var_dump($a - $b);
var_dump($a * $b);
var_dump($a / $b);
var_dump($a ** $b);
var_dump($a % $b);
var_dump(-$a);
/*
Assigment operator berguna untuk mempersingkat proses dari perhitungan aritmatika
1. $a =  4 - 1 * 2;
2. +=,-=,*=
*/
var_dump($a += 1); // sama dengan $a + 1
var_dump($a -= 2); // sama dengan $a - 2
var_dump($a *= 3); // sama dengan $a * 3
/*
Comparison operator
<,>,>=,<=,<=>
-------------
perbedaan antara == dan === adalah terletak di tipe datanya == mengganggap tipe datanya sama atau di juggling jg bsa tapi jika === tak bisa dijuggling jadi lebih spesifik
!= menganggap bahwa 2 expressi memiliki tipe data yang sama
!== jika tipe data beda maka akan dianggap tidak sama jadi true
*/


var_dump(11 <=> 11); // hasilnya akan 0 yang artinya a dan b sama
var_dump(10 <=> 11); // hasilnya akan -1 artinya a lebih kecil dari b
var_dump(20 <=> 10); //hasilnya akan 1 artinya a lebih besar dr b

$e = 3;
$f = '3';
$g = 5;
var_dump($e == $f);
var_dump($e === $f);
var_dump($e != $f);
var_dump($e !== $f);
var_dump($e <> $g);
/*
Sederhananya jika t bertemu t && maka hasilnya t kalau salah satu f mka f
jika t bertemu f || maka hasilnya t
jika ada operand bertemu ! hasilnya terbalik 
*/
var_dump(true && true);
var_dump(true && false);
var_dump(true || false);
var_dump(!true);
/*
Increment ++ same like += increase +1
decrement -- same like -= decrease -1
jika ++ sebelah kiri maka akan langsung ditambah 1 jika sebelah kanan maka variable yang tampil adalah variable sblm ditambah 1
*/
$h = 3;
$i = $h++;
var_dump($h,$i);
$i = ++$h;
var_dump($h,$i);
/*
Operator Precedence
wajib hukumnya untuk lihat table simplenya ini sih kayak belajar matematika dasar
*/
$j = 1;
$k = 3;
$l = true;
$e = $j + $k > 5 || $l;
var_dump($e);
/*
Belajar manipulasi string
1. Strlen menghitung semua karakter
2. str_word_count menghitung jumlah kata
3. str_rev membalik urutan kata koyok bahasa ngalaman
4. str_replace mengganti sesuai dengan keinginan ("Kata yang diganti","Pengen diganti apa","kalimatnya");
5. Escape character memaksa string dalam suatu keadaan \ dua kali untuk kata dengan "" , \n ganti baris, \t menambah tab
6. Variable expanding memasukkan variable ke dalam string tinggal masukkan variable lengkap dengan $
*/
$kalimat = "aku suka dia";
echo strlen($kalimat);
echo str_word_count($kalimat). "<br />";
echo strrev($kalimat). "<br />";
echo str_replace("dia","AFL",$kalimat). "<br />";
echo "$kalimat adalah sebuah cerita \"fiktif\" \nyang ceritanya panjang \t begitu". "<br />";
/*
INISIASI ARRAY
=============
Ada 2 cara
1. $nama = [];
2. $nama = array();
*/
$names1 = ["Harry", "Ron", "Hermione"];
$names2 = array('Harry', 'Ron', 'Hermione');
$status1 = [
'name' => 'James Potter',
'status' => 'dead'
];
$status2 = array(
'name' => 'James Potter',
'status' => 'dead'
);
//Populating array
$names1[]='Faisal';
$status1['age']= 13;
print_r($names1,$status1);
//Update array
$names1[0]="Ja'far";
print_r($names1);
//Isset to know position of array and empty to know value of array is empty or not
echo '<br>';
echo "===========";
echo '<br>';
var_dump(empty($names1));
//pakai isset untuk tau exist or not sesuai dengan posisi yang diminta
var_dump(isset($names1[0]));

/*
Menampilkan isi ARRAY
=============
*/
//Akses isi array sesuai posisi
echo "<hr>";
//untuk mencari isi dari array bisa menggunakan 2 fungsi : 1. in_array untuk mengetahui apakah didalam array tersebut ada value yang kita cari atau tidak 2. array_search untuk mengetahui value dari yang kita cari posisinya dimana dari sebuah array
$cariFaisal = in_array("Ron",$names1);
$cariPosisiFaisal = array_search("Ron",$names1);
echo '<br> aaw';
var_dump($cariFaisal);
echo '<br>';
var_dump($cariPosisiFaisal);
echo 'Ordering array <br>';
$properties = [
    'Kelas X-A'=>'Savrida',
    'Kelas X-B'=>'Mila',
    'Kelas X-C'=>'Lina'];
$properties1=$properties2=$properties2=$properties3=$properties;
sort($properties1);
var_dump($properties1);//Sorting dari rendah ke besar tanpa key
echo "<br>";
asort($properties2);
var_dump($properties2);
echo "<br>";
ksort($properties3);
var_dump($properties3);
echo "<br>";
echo $names1[0]. "<br>";//atau
for($i=0;$i < count($names1);$i++){
    echo $names1[$i]."<br>";
};
echo "<hr>";
//atau dengan foreach dan while
foreach($names1 as $isi){
    echo $isi."<br>";
};
echo "<hr>";
$m = 0;
while($m < count($names1)){
    echo $names1[$m]."<br>";
    $m++;
};
//Menambah array atau mengganti
$names1[1] =  "Yogi" ;
print_r($names1);
echo "<pre>";
//Mengakses isi Array dengan kunci
echo $status1['name']."<br>";
//Array multi dimensi
$matrik = [
    [7,0,0],
    [0,2,1],
    [1,2,3],
];
print_r($matrik[0]);
print_r($matrik[0][1]);
?>
