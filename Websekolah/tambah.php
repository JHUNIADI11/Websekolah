<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 BAYAN </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <?php
        include 'navbar.php';
        ?>
        <h4 style="text-align: center;" class="alert alert-info mt-2"> TAMBAH DATA GURU </h4>
        <?php
        require 'setting.php';
        if (isset($_POST['simpan'])) {
            $txtfoto = $_POST['txtfoto'];
            $txtnama = $_POST['txtnama'];
            $txtnip = $_POST['txtnip'];
            $txtbidang_studi = $_POST['txtbidang_studi'];
            $txtalamat = $_POST['txtalamat'];
            $sql = "INSERT INTO tbl_guru VALUES (NULL, '$txtfoto', '$txtnama', '$txtnip', '$txtbidang_studi','$txtalamat')";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                header('location: home.php');
            } else {
                echo 'Query Error : ' . mysqli_error($koneksi);
            }
        }

        ?>
        <form action="#" method="POST">
            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="txtfoto" class="form-control">
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="txtnama" class="form-control">
            </div>

            <div class="mb-3">
                <label>Nip</label>
                <input type="text" name="txtnip" class="form-control">
            </div>

            <div class="mb-3">
                <label>Bidang Studi</label>
                <input type="text" name="txtbidang_studi" class="form-control">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="txtalamat" class="form-control">
            </div>

            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary mb-3">
            <a href="home.php" class="btn btn-secondary mb-3"> HOME </a>
        </form>

        <?php
        include 'footer.php';
        ?>
    </div>
</body>
