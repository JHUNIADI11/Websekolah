<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 BAYAN</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

    <div class="container mt-2">
        <?php
        include 'navbar.php';
        ?>
        <h2 style="text-align: center;" class="alert alert-info mt-3 ">HALAMAN DATA GURU</h2>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Bidang Studi</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-info">
                <?php
                require 'setting.php';
                $query = "SELECT * FROM tbl_guru";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <a href="gambar/<?= $data->foto; ?>"><?= $data->foto; ?></a></td>
                        <td> <?php echo $data->nama; ?> </td>
                        <td> <?php echo $data->nip; ?> </td>
                        <td> <?php echo $data->bidang_studi; ?> </td>
                        <td> <?php echo $data->alamat; ?> </td>
                        <td>


                            <a href="edit.php?url-nomor=<?= $data->nomor; ?>">
                                <input type="submit" value="Edit" class="btn btn-warning">
                            </a>
                            <?php
                            if ($_SESSION['role'] == 'admin') {
                            ?>
                                <a href="hapus.php?nomor=<?= $data->nomor; ?>">
                                    <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
                                </a>

                            <?php
                            }
                            ?>
                        </td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <a href="tambah.php" class="btn btn-primary mb-3"> TAMBAH DATA </a>

        </a>
        <?php
        include 'footer.php';
        ?>
    </div>
</body>

</html>