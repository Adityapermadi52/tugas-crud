<?php
    include "../koneksi.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toya Bungkah</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styleuser.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Toya Bungkah Kintemani</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/aditya.jpeg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#userdatapengunjung">User Data Pengunjung</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- Home-->
            <section class="resume-section" id="home">
                <div class="resume-section-content">
                    <h2 class="mb-0">
                    Toya Bungkah
                        <span class="text-primary">Kintemani</span>
                    </h2>
                    <img src="../img/toyabungkah.jpg" width=500px; height=250px;   alt="">
                    <p align="justify" class="lead mb-5">Batur Natural Hot Spring menjadi salah satu tempat wisata pemandian air panah 
                        yang cukup populer di pulau Dewata Bali. Memang terdapat sejumlah pemandian air panas di Bali, sekaligus menawarkan 
                        sebuah pemandangan indah yang memanjakan dan memikat mata pengunjungnya, selain bisa menyegarkan tubuh juga menrefresh pikiran anda,
                        melepaskan segala penat, menenggelamkan kejenuhan, sehingga menambah kesegaran tubuh untuk aktifitas berikutnya.
                        Batur Natural Hot Spring di desa Toya Bungkah dikelola secara profesional oleh desa Pekraman Batur, sehingga anda
                        bisa merasa nyaman, aman dan tenang untuk berada di lokasi, walaupun untuk masuk ke tempat pemandian ini dikenakan tiket masuk,
                        hanya sebesar Rp 60.000/orang/WNI, harga tiket ini cukup masuk akal apalagi dengan berbagai fasilitas yang di dapatkan pengunjung seperti welcome drink, sampo, sabun dan handuk.
                        Sehingga pemandian di desa Toya Bungkah menjadi tempat lebih ideal untuk berendam dibandingkan di tempat pemandian umum.
                    </p><br>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Data Pengunjung-->
            <section class="resume-section" id="userdatapengunjung">
                <div class="resume-section-content">
                    <h2 class="mb-5">User Data Pengunjung</h2>
            <?php
            $tampil = mysqli_query($conn,"SELECT * FROM datapengunjung")
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
                <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            </head>
            <body>
            <div class="container">
            <table class="table table-dark table-hover">
                <head>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No.Telepon</th>
                    <th class="text-center">Email</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                while($r=mysqli_fetch_array($tampil)){
                    echo 
                    "<tr>
                        <td>$no</td>
                        <td >$r[nama]</td>
                        <td>$r[alamat]</td>
                        <td>$r[notelepon]</td>
                        <td>$r[email]</td>
                </tr>";
                $no++;
                }
                ?>
    </tbody>
  </table>
  <p><a href ="logout.php"><button type="button" class="btn btn-primary">Logout</button></p></a>
</div>
</body>
</html>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

