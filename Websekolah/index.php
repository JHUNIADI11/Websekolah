<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMAN 1 BAYAN </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>



  <div class="container">
    <?php
    include 'navbar.php';
    ?>
    <div class="row mt-2">
      <div class="col-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="gambar/sma1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="gambar/sma2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="gambar/sma3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-9" style="text-align: justify;">
        <h5><strong> Assalamualaikum WrWb </strong></h5>

        Puji Syukur ke hadirat Allah SWT, karena berkat karunia rahmat dan hidayah-Nya, pada akhirnya website SMAN 1 BAYAN dapat diluncurkan di dunia maya.

        Sebagaimana diketahui bersama bahwa perkembangan teknologi, khususnya teknologi Informasi dan Komunikasi saat ini sudah sedemikian pesat dan sudah merambah ke semua sektor kehidupan termasuk di dalamnya adalah sektor pendidikan. Internet sebagai salah satu bagian dari perkembangan teknologi informasi dan komunikasi dari hari ke hari juga menunjukkan perkembangan yang sangat signifikan.
        Melalui internet kita dapat menjumpai aneka referensi, jurnal, maupun hasil penelitian dalam jumlah yang melimpah. Materi-materi yang disajikan di internet cenderung lebih up to date dibandingkan dengan yang disajikandalam bentuk buku. Sehubungan dengan hal tersebut SMAN 1 BAYAN berupaya mengoptimalkan penggunaan jaringan internet yang sudah ada di sekolah, agar peningkatan mutu sumber daya manusia dan mutu pendidikan dapat segera tercapai.

        Kelebihan lain dari internet adalah dapat menghadirkan informasi yang dibutuhkan tanpa mengenal batas geografis. Para pengguna internet dapat tukar menukar informasi dengan berbagai pihak disegala penjuru dunia dalam waktu singkat dan dengan biaya yang relatif murah. Salah satu fasilitas yang ada di internet yang dapat dipakai untuk tukar menukar informasi adalah dengan menggunakan website. Untuk itulah website ini dibuat, tujuannya adalah agar pihak sekolah dapat menyampaikan informasi tentang SMAN 1 BAYAN dan sekaligus menjalin komunikasi antara pihak sekolah dengan guru, orang tua/ wali murid, siswa, alumni dan stakeholder.

        Mudah-mudahan dengan optimalisasi penggunaan internet dan website ini peningkatan mutu pendidikan dan komunikasi global dapat segera terwujud.

        <h5>Wassalamualaikum Wr Wb</h5>
      </div>
    </div>


    <h2 style="text-align: center;"> DATA GURU</h2>
    <div class="row mt-3">
      <?php
      require 'setting.php';
      $query = "SELECT * FROM tbl_guru";
      $sql = mysqli_query($koneksi, $query);
      while ($data = mysqli_fetch_object($sql)) {
      ?>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">

            <img src="gambar/<?= $data->foto; ?>" class="card-img-top" style="height: 13rem;">
            <div class="card-body">
              <h5 style="text-align: center;"><?= $data->nama; ?></h5>
              <hr>
              <p class="card-text"><?= $data->nip; ?></p>
              <p class="card-text"><?= $data->bidang_studi; ?></p>
              <p class="card-text"><?= $data->alamat; ?></p>

            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <?php
    include 'footer.php';
    ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>