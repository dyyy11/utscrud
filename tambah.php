<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM Mahasiswa");


//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<style>
            legend {
                color: #black;
                padding: 5px;
                background: #black;
                border-radius: 5px;
            }
            fieldset {
                max-width: 400px;
                border-radius: 10px;
                border-color: #black;
                background: #white;
            }
            label {
                float: left;
                color: black;
            }
            input {
                border:none;
                border-radius: 10px;
                height: 30px;
            }
           
            button{
                background:white;

            }       
</style>

<body>

    
        <div align="center">
            <form action="" method="POST">
        <fieldset>
            <legend>Tambah Data Mahasiswa</legend>
                <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
                <ul>
                    <p>
                        <label for="nama" style="margin-right: 25px;"> 
                            NAMA : </label>
                            <input type="text" name="nama" id="nama" required> 
                    </p>
                    <p>
                        <label for="npm" style="margin-right: 39px;"> 
                            NPM : </label>
                            <input type="text" name="npm" id="npm" required >
                    </p>
                    <p>
                        <label for="jurusan" style="margin-right: 1px;"> 
                            JURUSAN : </label>
                            <input type="text" name="jurusan" id="jurusan" required >
                    </p>
                    <p>
                        <label for="email" style="margin-right: 25px;"> 
                            EMAIL : </label>
                            <input type="text" name="email" id="email" required>
                    </p>
                    <p>
                        <label for="gambar" style="margin-right: 23px;">
                             FOTO : </label>
                        <input type="text" name="gambar" id="gambar" required>
                    </p>
                    <p>
                        <button type="submit" name="submit">Tambah Data</button>
                    </p>
                </ul>
        </fieldset>
            </form>
        </div>
        
  </div>

</body>