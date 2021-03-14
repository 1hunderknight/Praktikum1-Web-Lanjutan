<?php 
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$tugas=$_POST['tugas'];

$data_nilai = [$nama, $nim, $uts, $uas, $tugas];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" type="image/png" href="https://png.pngitem.com/pimgs/s/525-5251797_chibi-chibi-nezuko-easy-drawing-hd-png-download.png">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
    <style>
        body{
            background-image: url('https://4.bp.blogspot.com/-1MoPN1cdIWU/XQaWJhC6bHI/AAAAAAAAHTY/3VVDEk0xShsH8vHvS3Y6ci4eg3l5Ba9sgCKgBGAs/w1366-h768-p-k-no-nu/nezuko-kamado-kimetsu-no-yaiba-uhdpaper.com-4K-122.jpg');
            background-size: cover;
            padding: 30px;
            opacity: 0.9;
        }
   
    </style>
</head>
<body>
    <div class="container">
        <div class="well">
            <table class="table">
            <thead>
                <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                    echo '<tr>
                    <td>'.$nomor.'</td>';
                    echo '<td>'.$nama.'</td>';
                    echo '<td>'.$nim.'</td>';
                    echo '<td>'.$uts.'</td>';
                    echo '<td>'.$uas.'</td>';
                    echo '<td>'.$tugas.'</td>';
                    // $nilai_akhir = ($uts + $uas + $tugas)/3;
                    $nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '</tr>';
            
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>