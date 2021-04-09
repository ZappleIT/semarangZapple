<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%imac%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service iMac di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi iMac di Semarang, Service iMac Semarang, Sparepart iMac Semarang, iMac repair logicboard motherboard semarang, iMac LCD nya retak, bergaris dan ingin mengganti, Express Jasa Panggilan Pengerjaan iMac di Tempat, iMac rusak mati total (matot)." />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service iMac di Semarang</title>

    
  </head>
  <?php
  include 'header.php';
  ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav navigasi mx-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Service Apple</a>
                      <div class="dropdown-menu dropdown-menu-center mt-2" aria-labelledby="navbarDropdown">
                        <div class="d-md-flex align-items-start justify-content-center" >
                          <div>
                            <a class="dropdown-item" href="ipadrepair">iPad</a>
                            <a class="dropdown-item" href="iphonerepair">iPhone</a>
                            <a class="dropdown-item" href="ipodrepair">iPod</a>
                            <a class="dropdown-item" href="iwatchrepair">iWatch</a>
                            <a class="dropdown-item" href="macbookrepair">Macbook</a>
                          </div>
                          <div>
                            <a class="dropdown-item" href="macbookairrepair">Macbook Air</a>
                            <a class="dropdown-item" href="macbookprorepair">Macbook Pro</a>
                            <a class="dropdown-item" href="macminirepair">Mac Mini</a>
                            <a class="dropdown-item" href="imacrepair">iMac</a>
                            <a class="dropdown-item" href="macprorepair">Mac Pro</a>
                          </div>
                          <div>
                            <a class="dropdown-item" href="cinemarepair">Cinema Display</a>
                            <a class="dropdown-item" href="appletvrepair">Apple Home</a>
                            <a class="dropdown-item" href="beatsrepair">Beats</a>
                          </div> 
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="surfacerepair">Service Surface</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="antar-jemput-macbook-ipad-iphone-ipod-repair-home-service.html">Service di Tempat</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="sparepart">Penjualan Sparepart</a>
                    </li>
                    </ul>
                </div>
            </div>   
        </nav>
    </header>
<!-- PRODUCT SELECTED -->
    <section id="box-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 image">
                    <img id="testStar" src="img/imac/imac2012.jpg" alt="iMac 2012" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service iMac Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi iMac seperti Perbaikan iMac yang mati total, Pemulihan Data iMac, Perbaikan Logicboard iMac dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service iMac yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini :</p>
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>iMac</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">iMac 2012 (Slim)</option>
                            <option value="1">iMac (Intel plastic) </option>
                            <option value="2">iMac (Aluminum Black)</option>
                            <option value="3">iMac (Aluminum Unibody)</option>
                        </select>                       
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
    <main>
        <div id="content">
            <div class="list-title mt-5">
                <h6>Perbaikan iMac</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri iMac di Semarang, dan perbaikan perangkat keras lainnya, seperti Logicboard iMac yang rusak dan lain sebagainya.</p> 
                    
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Kerusakan</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>EMC controller ic chipset (input seperti kabel internet lan)</td>
                                <td><b id="CHANGE23">iMac A1418 - Rp 3,650,000 iMac A1419 - Rp 4,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Gambar pecah atau distorted (masalah Vga)</td>
                                <td><b id="CHANGE2">Rp 2,450,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Auto Restart</td>
                                <td><b id="CHANGE3">Rp 2,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Kernel Panic Error</td>
                                <td><b id="CHANGE4">Rp 2,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Layar hitam bersuara error 3 x beep memory</td>
                                <td><b>masalah audio jack - Rp 2,150,000 (audio jack tidak bisa dipakai lagi) masalah bridge chipset iMac A1418 - Rp 3,650,000 iMac A1419 - Rp 4,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard Heating Hot</td>
                                <td><b id="CHANGE5">Rp 2,450,000</b></td>
                            </tr>
                            <tr>
                                <td>No Power</td>
                                <td><b id="CHANGE6">Rp 2,450,000</b></td>
                            </tr>
                            <tr>
                                <td>Power On No Display (ganti Vga Graphic chipset)</td>
                                <td><b id="CHANGE7">Rp 2,700,000</b></td>
                            </tr>
                            <tr>
                                <td>System Stuck at Apple Logo</td>
                                <td><b id="CHANGE8">Rp 2,150,000</b></td>
                            </tr>
                            <tr>
                                <td>System Slow</td>
                                <td><b id="CHANGE9">Rp 2,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Tidak bisa detect Harddisk (muncul folder question mark tanda tanya)</td>
                                <td><b id="CHANGE1">Rp 2,450,000</b></td>
                            </tr>
                            <tr>
                                <td>Waterdamage</td>
                                <td><b id="CHANGE10">Rp 200,000 ++</b></td>
                            </tr> 
                            <tr>
                                <td>Wifi Chipset (bukan masalah di Airport)</td>
                                <td><b id="CHANGE11">Rp 1,550,000</b></td>
                            </tr>  
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service ada tambahan Level Low - <b>Rp 200,000</b> Level Medium/High - <b>Rp 500,000</b></br>
                    *note: Biaya pemasangan untuk sparepart yang dibawa sendiri oleh customer dikenakan biaya double</br>
                    *note: iMac yang Masuk Mati, Uang Pengecekan - <b>Rp 100,000</b> iMac yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart iMac</h6>
                    
                <p>Kami mengganti sparepart / melakukan upgrade untuk berbagai model iMac Series, dan perbaikan perangkat keras lainnya seperti LCD iMac retak, Logicboard iMac rusak, dan lain sebagainya.</p> 
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Sparepart</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Audio Jack</td>
                                <td><b id="CHANGE12">Rp 325,000</b></td>
                            </tr>
                            <tr>
                                <td>AC Power Supply</td>
                                <td><b id="CHANGE13">A1418 - Rp Rp 2,300,000 A1419 - Rp Rp 2,700,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing A (bezel gelas depan)</td>
                                <td><b id="CHANGE15">*Satu set dengan LCD</b></td>
                            </tr>
                            <tr>
                                <td>Casing D (casing belakang)</td>
                                <td><b id="CHANGE16">Satu Set dengan Engsel 21 INCI - Rp 2,900,000 27 INCI - Rp Rp 3,900,000</b></td>
                            </tr>
                            <tr>
                                <td>Drive Dvd RW</td>
                                <td><b>2006 sampai 2012 - Rp Rp 300,000 Slim 2012 - No Drive</b></td>
                            </tr>
                            <tr>
                                <td>Engsel hinge iMac tipis</td>
                                <td><b>Reparasi A1418 - Rp Rp 500,000 A1419 - Rp 700,000</b></td>
                            </tr>
                            <tr>
                                <td>Fan (bunyi atau tidak berfungsi)</td>
                                <td><b>Rp 600,000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable Lcd</td>
                                <td><b id="CHANGE14">Rp 1,200,000</b></td>
                            </tr>
                            <tr>
                                <td>Hdd with MacOS</td>
                                <td><b id="CHANGE17">500GB HDD - Rp 900,000 1TB HDD - Rp 1,250,000 2TB HDD - Rp 1,750,000 3TB HDD - Rp 2,350,000 120GB SSD - Rp 1,250,000 <br> 240GB SSD - Rp 1,850,000 480GB SSD - Rp 2,650,000 980GB SSD - Rp 4,400,000 Caddy HDD/SSD yg kedua + Rp 200,000 Configurasi <br> BootCamp/Fushion/Refit + Rp 250,000 Merek Samsung Evo + Rp 300,000 Merek Samsung Pro + Rp 1,200,000</b></td>
                            </tr>
                            <tr>
                                <td>LCD/LED</td>
                                <td><b id="CHANGE18">21 INCI - Rp Rp 4,500,000 27 INCI - Rp 7,700,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE19">A1418 DC i5 - Rp 5,850,000 QC i5 - Rp 7,100,000 QC i7 - Rp 9,400,000 A1419 QC i5 - Rp 8,700,000 QC i7 - Rp 13,400,000</b></td>
                            </tr>
                            <tr>
                                <td>Power backlight UVF</td>
                                <td><b>Rp 900,000</b></td>
                            </tr>
                            <tr>
                                <td>Memory</td>
                                <td><b id="CHANGE20">4GB - Rp 400,000 8GB - Rp 850,000 16GB - Rp 1,700,000</b></td>
                            </tr>
                            <tr>
                                <td>Sensor suhu temperature</td>
                                <td><b>tahun 2012 kebawah - Rp 150,000 tahun 2012 keatas - Rp 1,100,000</b></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td><b id="CHANGE21">Rp 800,000</b></td>
                            </tr>
                            <tr>
                                <td>Tombol Power Button</td>
                                <td><b>iMac tebal tahun 2012 kebawah - Rp 850,000 iMac Slim A1418 - Rp 2,300,000 A1419 - Rp 2,700,000 kalau perlu penggantian Casing ada tambahan Rp 3,400,000</b></td>
                            </tr>
                            <tr>
                                <td>Usb port (bukan karena bridge)</td>
                                <td><b>Rp 350,000</b></td>
                            </tr>
                            <tr>
                                <td>Vga Graphic Module</td>
                                <td><b id="CHANGE22">*Satu set dengan Logicboard</b></td>
                            </tr>
                            <tr>
                                <td>Wifi Airport</td>
                                <td><b>Rp 800,000</b></td>
                            </tr>
                        </tbody>  
                    </table>
                </div>
                    <p class="note">
                        *note: Harga Sparepart Belum termasuk Ongkos Pemasangan <b>Rp 150,000</b><br>
                        *note: <a href="https://zapplerepair.com/syarat-ketentuan-garansi-sukucadang-zapplerepair.html">Ketentuan Garansi Suku Cadang Zapplerepair Indonesia</a>
                    </p>
            </div>

            <div class="list-title mt-5">
                <h6>Service iMac</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan iMac di Semarang dan perbaikan perangkat lunak seperti pemulihan data iMac dan lain sebagainya</p> 
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Layanan Teknis</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Configuration for Lion Server &amp; Window Server Data Application</td>
                                <td><b>Rp 1,850,000</b></td>
                            </tr>
                            <tr>
                                <td>Data Recovery Harddisk Bad Sector</td>
                                <td><b>Dibawah 200GB - Rp 300,000  Diatas 200GB - Rp 600,000</b></td>
                            </tr>
                            <tr>
                                <td><a href="https://zapplerepair.com/jasa-Recovery-data-pengembalian-dan-perbaikan-harddisk-hdd-Macbook-iMac-jakarta.html">Data Recovery Harddisk Rusak</a></td>
                                <td><b>Rp 800,000 - Rp 2,500,000 ke atas</b></td>
                            </tr>
                            <tr>
                                <td>Game dan Lagu</td>
                                <td><b>Rp 100,000</b></td>
                            </tr>
                            <tr>
                                <td>Reinstall new MacOS</td>
                                <td><b>Rp 200,000</b></td>
                            </tr>
                            <tr>
                                <td>Software Auto Restart</td>
                                <td><b>Rp 200,000</b></td>
                            </tr>
                            <tr>
                                <td>Software Errors Problem</td>
                                <td><b>Rp 200,000</b></td>
                            </tr>
                            <tr>
                                <td>Software Optimization</td>
                                <td><b>Rp 200,000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami menyediakan berbagai aksesoris iMac seperti pelindung screen LCD, Mac Bluetooth Mouse / Keyboard, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris iMac</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lcd screen protector</td>
                                <td><b>Rp 300,000</b></td>
                            </tr>
                            <tr>
                                <td>Mac Bluetooth Keyboard</td>
                                <td>Magic Keyboard 2 - <b>Rp 1,300,000</b> Magic Keyboard 1 - <b>Rp 950,000</b> Magic Keyboard 1 seken - <b>Rp 600,000</b></td>
                            </tr>
                            <tr>
                                <td>Mac Bluetooth Mouse</td>
                                <td>Magic Mouse 2 - <b>Rp 850,000</b> Magic Mouse 1 - <b>Rp 750,000</b> Magic Mouse 1 seken - <b>Rp 400,000</b></td>
                            </tr>
                            <tr>
                                <td>Mac Bluetooth Trackpad</td>
                                <td>Magic Trackpad - <b>Rp 1,150,000</b> Magic Trackpad seken - <b>Rp 700,000</b></td>
                            </tr>
                            <tr>
                                <td>Mini Dvi to dvi/hdmi/vga</td>
                                <td><b> Dvi - Rp 600,000 Hdmi - Rp 550,000 Vga - Rp 450,000</b></td>
                            </tr>
                            <tr>
                                <td>Original Sticker LCD iMac Slim</td>
                                <td>A1418 - <b>Rp 150,000</b> A1419 - <b>Rp 200,000</b></td>
                            </tr>
                            <tr>
                                <td>TouchScreen Zapple for iMac</td>
                                <td><b>A1311 A1418 -  Rp 3,500,000 A1312 A1419 -  Rp 3,900,000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service iMac terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk semua versi iMac. 
                        Jadi tunggu apalagi, jika mengalami masalah dengan iMac, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/imacbloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-imac.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/<?= $rst['foto']?>" class="card-img-top mt-3 mb-2" alt="<?= $rst['judul']?>">
                            <div class="text-blog">
                                <h7><?= $rst['judul']?></h7><br>
                                <p class="mt-2">
                                <?php
                                   $split = explode(" ", strip_tags($rst['isi']));
                                   $take = array_slice($split,0,30);
                                   $group = implode(" ",$take);
                                   echo $group?>...</p>
                            </div>    
                        </a>
                    </div>
                <?php }?>      
            </div>
        </div><br>
        <aside id="sidebar" >
            <?php
                include 'contact.php';
                include 'promo.php';
                include 'footer.php';
            ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/imacIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>