<?php 
require 'Pegawai.php';
//object
$p1 = new Pegawai('1234515685','Sultan Syarif','Manager','Islam','Belum Menikah');
$p2 = new Pegawai('3248796678','Erlina NN','Asisten Manager','Islam','Belum Menikah');
$p3 = new Pegawai('8327823799','Rani Maharani','Kabag','Hindu','Menikah');
$p4 = new Pegawai('1223124345','Syarif Al-Bakri','Staff','Islam','Menikah');
$p5 = new Pegawai('1234232125','Rendy Hardiansyah','Manager','Budha','Menikah');


$p1->cetak();
$p2->cetak();
$p3->cetak();
$p4->cetak();
$p5->cetak();
echo 'Jumlah Pegawai : '.Pegawai::$jumlah;

 ?>