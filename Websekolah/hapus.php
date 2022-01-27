<?php
include 'setting.php';
$id = $_GET['nomor'];
$query="DELETE FROM tbl_guru WHERE nomor=$id";
$sql= mysqli_query($koneksi,$query);
if($sql){
    echo "data berhasil di hapus";
    header('location:home.php');
}else{
    echo "data gagal terhapus";
}