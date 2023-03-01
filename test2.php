<?php 
$siswa = [
    [
        "ID"=>1,
        "Nama"=>"Alex",
        "Kelas"=>"X-TKJ",
        "Nilai"=>70,
    ],
    [
        "ID"=>2,
        "Nama"=>"Bagas",
        "Kelas"=>"XI-RPL",
        "Nilai"=>75,
    ],
];
// menghitung nilai pada array siswa
$sum = array_sum(array_column($siswa,'Nilai'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
    <title>test 2</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nilai</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     foreach ($siswa as $s) {
        # code...
     }
    ?>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
   
  </tbody>
</table>
</body>
</html>