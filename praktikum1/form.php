<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai</title>
    <link rel="icon" type="image/png" href="https://png.pngitem.com/pimgs/s/525-5251797_chibi-chibi-nezuko-easy-drawing-hd-png-download.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    body{
        background-image: url('https://4.bp.blogspot.com/-1MoPN1cdIWU/XQaWJhC6bHI/AAAAAAAAHTY/3VVDEk0xShsH8vHvS3Y6ci4eg3l5Ba9sgCKgBGAs/w1366-h768-p-k-no-nu/nezuko-kamado-kimetsu-no-yaiba-uhdpaper.com-4K-122.jpg');
        background-size: cover;
        padding-top: 7rem;
        }
    .mid{
        text-align: center;
        margin: 5px;
    }
    .box{
        background-color: white;
        opacity: 0.9;
        border-radius: 4px;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
    }
    
</style>
<body>
    <div class="container box">
        <form method="post" action="array_siswa.php">
        <div class="d-flex flex-column bd-highlight mb-3">
        
    
        </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" required>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group mid">
                    <label>Nilai UTS</label>
                    <input type="text" class="form-control" name="uts" required>
                </div>
                <div class="form-group mid">
                    <label>Nilai UAS</label>
                    <input type="text" class="form-control" name="uas" required>
                </div>
                <div class="form-group mid">
                    <label>Nilai Tugas</label>
                    <input type="text" class="form-control" name="tugas" required>
                </div>
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-success">Submit Nilai</button>
            </div>
        </form>
    </div>
</body>
</html>