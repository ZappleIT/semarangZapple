<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%iwatch%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service iWatch di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi iWatch di Semarang, Service iWatch Semarang, Reparasi iWatch Semarang, Sparepart iWatch Semarang, iWatch repair logicboard motherboard pcb, ganti iWatch lcd touchpanel kaca pecah retak, service antar jemput repair servis iwatch semarang, iwatch LCD nya retak, iwatch logicboard rusak mati total (matot) masuk air servis repair, ganti baterai iwatch semarang" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service iWatch di Semarang</title>

    
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
                    <img id="testStar" src="img/iwatch/Apple Watch 3.jpg" alt="Apple Watch 3" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service iWatch Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi iWatch seperti Penggantian baterai iWatch, Perbaikan iWatch Mati total, Perbaikan Logicboard iWatch dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service iWatch yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini 
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>iWatch</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">iWatch Series 4</option>
                            <option value="1">iWatch Edition</option>
                            <option value="2">iWatch Series 0</option>
                            <option value="3">iWatch Series 1</option>
                            <option value="4">iWatch Series 2</option>
                            <option value="5">iWatch Series 3</option>
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
                <h6>Perbaikan iWatch</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri iWatch di Semarang, dan perbaikan perangkat keras lainnya, seperti iWatch mati total/kerusakan air, kerusakan pada logicboard iWatch dan lain sebagainya.</p> 
                    
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
                                <td>Accelerometer Sensor Chipset</td>
                                <td><b id="CHANGE1">Rp 1.000.000</b></td>
                            </tr>
                            <tr>
                                <td>Berhenti di Apple Logo</td>
                                <td><b id="CHANGE2">Rp 1.600.000</b></td>
                            </tr>
                            <tr>
                                <td>Bios Password</td>
                                <td><b id="CHANGE3">Rp 1.100.000</b></td>
                            </tr>
                            <tr>
                                <td>Cpu & Memory</td>
                                <td><b id="CHANGE4">*S1 Cpu masih belum bisa diganti</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Auto Restart</td>
                                <td><b id="CHANGE5">Rp 1.600.000</b></td>
                            </tr>
                            <tr>
                                <td>Heart Sensor Chipset</td>
                                <td><b id="CHANGE6">Rp 1.000.000</b></td>
                            </tr>
                            <tr>
                                <td>Kompas Chipset</td>
                                <td><b id="CHANGE7">Rp 1.000.000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard tiba2 panas</td>
                                <td><b id="CHANGE8">Rp 1.600.000</b></td>
                            </tr>
                            <tr>
                                <td>Nyala tidak ada Display</td>
                                <td><b id="CHANGE9">Rp 1.600.000</b></td>
                            </tr>
                            <tr>
                                <td>Power iC Chipset</td>
                                <td><b>Rp 1.600.000</b></td>
                            </tr>
                            <tr>
                                <td>System Pelan</td>
                                <td><b id="CHANGE10">Rp 1.600.000</b></td>
                            </tr> 
                            <tr>
                                <td>Waterdamage</td>
                                <td><b id="CHANGE11">Rp 200.000 ++</b></td>
                            </tr> 
                            <tr>
                                <td>Wifi & Bluetooth Chipset</td>
                                <td><b id="CHANGE12">Rp 1.000.000</b></td>
                            </tr>  
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service - <b>Rp 200.000</b></br>
                    *note: iWatch yg Masuk Mati, Uang Pengecekan - <b>Rp 100.000</b> iWatch yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.   
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart iWatch</h6>
                    
                <p>Kami mengganti suku cadang / melakukan upgrade untuk berbagai model iWatch dan perbaikan perangkat keras lainnya seperti LCD iWatch retak, baterai iWatch kembung atau rusak, dan lain sebagainya.</p> 
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
                                <td>Battery Original</td>
                                <td><b id="CHANGE13">Rp 800.000</b></td>
                            </tr>
                            <tr>
                                <td>Bezel Casing Samping</td>
                                <td><b id="CHANGE14">Rp 1.800.000</b></td>
                            </tr>
                            <tr>
                                <td>Casing penutup dengan charging module</td>
                                <td><b id="CHANGE16">Rp 1.400.000</b></td>
                            </tr>
                            <tr>
                                <td>Cpu</td>
                                <td><b id="CHANGE17">*S1 Cpu masih belum bisa diganti</b></td>
                            </tr>
                            <tr>
                                <td>Crown Rotasi Samping</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable Antena</td>
                                <td><b id="CHANGE18">Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable On/Off</td>
                                <td><b id="CHANGE19">Rp 500.000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable Rotasi Crown</td>
                                <td><b id="CHANGE20">Rp 300.000</b></td>
                            </tr>
                            <tr>
                                <td>Haptic Vibrator</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>Lcd & Touchpanel Kaca</td>
                                <td><b id="CHANGE21">38mm - Rp 3.500.000, 42mm - Rp 3.900.000 (perlu 14 - 20 hari kerja)</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE15">Rp 2.500.000</b></td>
                            </tr>
                            <tr>
                                <td>Strap Band Watch Apple</td>
                                <td><b id="CHANGE22">Classic Plastik Buckle - Rp 500.000, Kulit Loop Buckle - Rp 1.000.000, Link Bracelet - Rp 1.600.000</b></td>
                            </tr>
                            <tr>
                                <td>Tombol Samping</td>
                                <td><b>Rp 150.000</b></td>
                            </tr> 
                        </tbody>  
                    </table>
                </div>
                    <p class="note">
                        *note: Harga Sparepart Belum termasuk Ongkos Pemasangan <b>Rp 250.000</b></br>
                        *Peringatan: Semua iWatch series 2 ke atas setelah reparasi akan kehilangan fungsi waterproof, untuk Customer yg perlu waterproof harus menambah <b>Rp 500.000</b><br>
                        *note: <a href="https://zapplerepair.com/syarat-ketentuan-garansi-sukucadang-zapplerepair.html">Ketentuan Garansi Suku Cadang Zapplerepair Indonesia</a>
                    </p>
            </div>

            <div class="list-title mt-5">
                <h6>Service iWatch</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan iWatch di Semarang dan perbaikan perangkat lunak seperti pemulihan data iWatch dan lain sebagainya.</p> 
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
                                <td><b>Rp 1.850.000</b></td>
                            </tr>
                            <tr>
                                <td><a href="https://zapplerepair.com/jasa-Recovery-data-pengembalian-dan-perbaikan-harddisk-hdd-Macbook-iMac-jakarta.html" target="_blank">Data Recovery iWatch</a></td>
                                <td><b>Rp 1.500.000 - 3.000.000</b></td>
                            </tr>
                            <tr>
                                <td>Claim Original Garansi di Australia Hongkong dan Singapore (sudah bisa claim di Indonesia)</td>
                                <td><b>Rp 800.000</b></td>
                            </tr>
                            <tr>
                                <td>Game dan Lagu</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                            <tr>
                                <td>Reinstall WatchOS</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Software Auto Restart</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Software Errors Problem</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Software Optimization</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami menyediakan berbagai aksesoris untuk seri iWatch seperti Charger, Casing, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris iWatch</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Casing Plastik</td>
                                <td><b>Rp 150.000</b></td>
                            </tr>
                            <tr>
                                <td>Original wireless charger Apple Watch</td>
                                <td><b>Baru - Rp 450.000 Seken - Rp 350.000</b></td>
                            </tr>
                            <tr>
                                <td>Temper Glass Kaca</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service iWatch terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk semua versi iWatch.
                       Jadi tunggu apalagi, jika mengalami masalah dengan iWatch, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/iwatchbloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-iwatch.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/iwatchIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>