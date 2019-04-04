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


