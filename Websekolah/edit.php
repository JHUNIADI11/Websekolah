<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA 1 BAYAN</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        include 'navbar.php';
        ?>
        <h4 style="text-align: center;" class="alert alert-info mt-2"> Edit Data Guru</h4>
        <?php
        require 'setting.php';
        //menampilan data dalam table
        if (isset($_GET['url-nomor'])) {
            $input_id = $_GET['url-nomor'];
            $query = "SELECT * FROM tbl_guru WHERE nomor ='$input_id'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
        if (isset($_POST['simpan'])) {
            $txtfile = $_POST['txtfile'];
            $txtnama = $_POST['txtnama'];
            $txtnip = $_POST['txtnip'];
            $txtbidang_studi = $_POST['txtbidang_studi'];
            $txtalamat = $_POST['txtalamat'];
            //update syntax dalam mysql
            $sql = "UPDATE tbl_guru SET 
                         foto='$txtfile', nama='$txtnama',nip='$txtnip',bidang_studi='$txtbidang_studi'
                         ,alamat='$txtalamat' WHERE nomor = $input_id";
            $result = mysqli_query($koneksi, $sql);
            //perulangan jika dia berhasil maka ke index dan data diperbarui
            if ($result) {
                header('location:home.php');
                //jika salah data tidak berhasil diperbarui dan menghasilkan error
            } else {
                echo 'Query Error' . mysqli_error($koneksi);
            }
        }
        ?>

        <form action="#" method="Post">
            <div class="mb-3">
                <label for="">foto</label>
                <input type="hidden" name="txtnomor" class="form-control" value="<?= $data->nomor; ?>">
                <input type="file" name="txtfile" class="form-control" value="<?= $data->foto; ?>">
            </div>
            <div class="mb-3">
                <label for="">nama</label>
                <input type="text" name="txtnama" class="form-control" value="<?= $data->nama; ?>">
            </div>

            <div class="mb-3">
                <label for="">nip</label>
                <input type="text" name="txtnip" class="form-control" value="<?= $data->nip; ?>">
            </div>

            <div class="mb-3">
                <label for="">Bidang Studi</label>
                <input type="text" name="txtbidang_studi" class="form-control" value="<?= $data->bidang_studi; ?>">
            </div>

            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="txtalamat" class="form-control" value="<?= $data->alamat; ?>">
            </div>

            <input type="submit" name="simpan" value="Edit" class="btn btn-primary mb-3">
            <a href="home.php" class="btn btn-secondary mb-3">Kembali</a>

        </form>
        <?php
        include 'footer.php';
        ?>
    </div>
</body>

</html>