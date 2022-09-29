<?php 
$m1 = ['nim'=>2013020120,'nama'=>'Erlina Nasrinatun Nimah','nilai'=>75];
$m2 = ['nim'=>2013020046,'nama'=>'Siti Alvi nikmah','nilai'=>85];
$m3 = ['nim'=>2013020211,'nama'=>'Miranda Putri Arifin','nilai'=>80];
$m4 = ['nim'=>2013020175,'nama'=>'Miftakul Wulandari','nilai'=>60];
$m5 = ['nim'=>2013020191,'nama'=>'Marsha Auriel Prasetya','nilai'=>50];
$m6 = ['nim'=>2013020185,'nama'=>'Rizki Azhar','nilai'=>60];
$m7 = ['nim'=>2013020075,'nama'=>'Moch Anas Toyibah','nilai'=>80];
$m8 = ['nim'=>2013020107,'nama'=>'Muhammad Farid Wijayanto','nilai'=>95];
$m9 = ['nim'=>2013020020,'nama'=>'Nur Mohamad Iqbal Jauhari','nilai'=>55];
$m10 = ['nim'=>2013020169,'nama'=>'M. Farij Amrulloh','nilai'=>85];

$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

$mhs=[$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlah_mhs = count($mhs);
$nilai_mhs = array_column($mhs, 'nilai');
$total_nilai = array_sum($nilai_mhs);
$nilai_tinggi= max($nilai_mhs);
$nilai_rendah= min($nilai_mhs);
$rata2= $total_nilai/$jumlah_mhs;

$keterangan=[
'Jumlah Mahasiswa' => $jumlah_mhs,
'Nilai Tertinggi' => $nilai_tinggi,
'Nilai Terendah' => $nilai_rendah,
'Rata-rata' => $rata2
];
 ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 3 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body><br>
	<h3 class="text-center">Daftar Nilai Mahasiswa</h3>
	<br>
	<table class="table table-striped" align="center" cellpadding="12">
		<thead>
		<tr class="table-dark">
			<?php 
			foreach ($ar_judul as $judul) {
				?>
				<th><?= $judul ?></th>
			<?php } ?>
		</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($mhs as $mahasiswa) {
				$ket = ($mahasiswa['nilai'] >=60)?"Lulus" : "Gagal";
				$grade = 0;
				if ($mahasiswa['nilai'] >=85 && $mahasiswa['nilai'] <= 100){
					$grade = "A";
				}elseif ($mahasiswa['nilai'] >=75 && $mahasiswa['nilai'] < 85){
					$grade = "B";
				}
				elseif ($mahasiswa['nilai'] >=60 && $mahasiswa['nilai'] < 75){
					$grade = "C";
				}elseif ($mahasiswa['nilai'] >=50 && $mahasiswa['nilai'] < 60){
					$grade = "D";
				}else{
					$grade ="E";
				}

				$predikat="";
				switch ($grade) {
					case 'A':
						$predikat = "Memuaskan";
						break;
					case 'B':
						$predikat = "Bagus";
						break;
					case 'C':
						$predikat = "Cukup";
						break;
					case 'D':
						$predikat = "Kurang";
						break;
					case 'E':
						$predikat = "Buruk";
						break;
					default:
						break;
				}
				?>
			 <tr>
			 	<td><?= $no ?></td>
			 	<td><?= $mahasiswa['nim'] ?></td>
			 	<td><?= $mahasiswa['nama'] ?></td>
			 	<td><?= $mahasiswa['nilai'] ?></td>
			 	<td><?= $ket ?></td>
			 	<td><?= $grade ?></td>
			 	<td><?= $predikat ?></td>
			 </tr>
			 <?php $no++; } ?>
		</tbody>
		<tfoot class="table table-dark">
			<?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                	<th></th>
                    <th colspan="5"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
		</tfoot>
	</table>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
</body>
</html>