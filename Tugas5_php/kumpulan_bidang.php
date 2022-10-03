<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="background-color:gainsboro;">
  	<br>
    <h3 align="center">Data Bangun Datar</h3><br>
    <style>
            table,tr,td{
                border: 1px solid black;
            }
        </style>
    <table align="center" cellpadding="12" class="table-bordered">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Bidang</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Luas Bidang</th>
      <th scope="col">Keliling Bidang</th>
    </tr>
  </thead>
  <tbody>

<?php 
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

  $lingkaran = new Lingkaran();
  $persegipanjang = new PersegiPanjang();
  $segitiga = new Segitiga();
 ?>

     <tr>
      <th scope="row">1</th>
      <td><?php echo $lingkaran->namaBidang() ?></td>
      <td><?php echo $lingkaran->ket() ?></td>
      <td><?php echo $lingkaran->luasBidang() ?></td>
      <td><?php echo $lingkaran->kelilingBidang() ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $persegipanjang->namaBidang() ?></td>
      <td><?php echo $persegipanjang->ket() ?></td>
      <td><?php echo $persegipanjang->luasBidang() ?></td>
      <td><?php echo $persegipanjang->kelilingBidang() ?></td>
    </tr>
     <tr>
      <th scope="row">3</th>
      <td><?php echo $segitiga->namaBidang() ?></td>
      <td><?php echo $segitiga->ket() ?></td>
      <td><?php echo $segitiga->luasBidang() ?></td>
      <td><?php echo $segitiga->kelilingBidang() ?></td>
    </tr>
  </tbody>
  <tfoot>
  	<th colspan="5"><h6 align="center">Erlina Nasrinatun Ni'mah</h6></th>
  </tfoot>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>