<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%ipod%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service iPad di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi iPod di Semarang, Service iPod Semarang, Reparasi iPod Semarang, Sparepart iPod Semarang, iPod repair logicboard motherboard pcb, ganti ipod lcd touchpanel kaca pecah retak, service antar jemput repair servis ipod semarang, ipod LCD nya retak, ipod logicboard rusak mati total (matot) masuk air servis repair, ganti baterai iPod semarang" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service iPod di Semarang</title>

    
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
                    <img id="testStar" src="img/ipod/iPodTouch6.jpg" alt="iPod Pro 2" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service iPod Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi iPod seperti Penggantian baterai iPod, Pemulihan data dari iPod, Perbaikan iPod Mati total, dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service iPod yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini 
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>iPod</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">iPod Touch 6</option>
                            <option value="1">iPod Classic 5</option>
                            <option value="2">iPod Classic 6</option>
                            <option value="3">iPod Nano 3</option>
                            <option value="4">iPod Nano 6</option>
                            <option value="5">iPod Nano 7</option>
                            <option value="6">iPod Touch 4</option>
                            <option value="7">iPod Touch 5</option>
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
                <h6>Perbaikan iPod</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri iPod di Semarang, dan perbaikan perangkat keras lainnya, seperti iPad mati total/kerusakan air, dan lain sebagainya.</p> 
                    
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
                                <td>No Power</td>
                                <td><b id="CHANGE0">Rp 1.150.000</b></td>
                            </tr>
                            <tr>
                                <td>Nyala Apple Logo kemudian Mati</td>
                                <td><b id="CHANGE1">Rp 950,000</b></td>
                            </tr>
                            <tr>
                                <td>Waterdamage</td>
                                <td><b id="CHANGE2">Rp 100,000 ++</b></td>
                            </tr>
                            <tr>
                                <td>Wifi & Bluetooth module</td>
                                <td><b>Rp 450.000</b></td>
                            </tr>
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service ada tambahan Level Low - <b>Rp 100.000</b> Level Medium/High - <b>Rp 200.000</b></br>
                    *note: iPod yang Masuk Mati, Uang Pengecekan - <b>Rp 50.000</b>iPod yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.<br>
                    *note: Biaya pemasangan untuk sparepart yang dibawa sendiri oleh customer dikenakan biaya double.
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart iPod</h6>
                    
                <p>Kami mengganti suku cadang / melakukan upgrade untuk berbagai model iPod dan perbaikan perangkat keras lainnya seperti LCD iPod retak, baterai iPod kembung atau rusak, dan lain sebagainya.</p> 
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
                                <td>Audiojack atau Audio Flexicable</td>
                                <td><b id="CHANGE3">Rp 650,000</b></td>
                            </tr>
                            <tr>
                                <td>New Battery</td>
                                <td><b id="CHANGE4">Rp 650.000</b></td>
                            </tr>
                            <tr>
                                <td>Power On/Off Flexicable</td>
                                <td><b id="CHANGE5">Rp 450.000</b></td>
                            </tr>
                            <tr>
                                <td>Casing A (casing depan)</td>
                                <td><b id="CHANGE6">-</b></td>
                            </tr>
                            <tr>
                                <td>Casing D (casing belakang)</td>
                                <td><b id="CHANGE7">Rp 950.000</b></td>
                            </tr>
                            <tr>
                                <td>Click Wheel</td>
                                <td><b id="CHANGE8">-</b></td>
                            </tr>
                            <tr>
                                <td>Front Glass Kaca Depan</td>
                                <td><b id="CHANGE9">*Satu set dengan lcd</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable selain Power dan Audio</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>SSD/HDD with iOS</td>
                                <td><b id="CHANGE10">*Satu set dengan motherboard</b></td>
                            </tr>
                            <tr>
                                <td>SSD flash penggantian HDD khusus iPod Classic 5 ~ 7</td>
                                <td><b id="CHANGE11">-</b></td>
                            </tr>
                            <tr>
                                <td>LCD/LED</td>
                                <td><b id="CHANGE12">Rp 1.150.000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE13">8GB - Rp 1.500.000, 16GB - Rp 1.800.000, 32GB - Rp 2.200.000, 64GB - Rp 2.800.000</b></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td><b id="CHANGE14">Rp 600.000</b></td>
                            </tr>
                            <tr>
                                <td>Usb Dock Connector</td>
                                <td><b id="CHANGE15">Rp 600.000</b></td>
                            </tr>     
                        </tbody>  
                    </table>
                </div>
                    <p class="note">
                        *note: <a href="https://zapplerepair.com/cara-ganti-sparepart-iPod-susah.html">Zapplerepair tidak menerima servis repair iPod Nano 4 & 5</a> </br>
                        *note: Harga Sparepart Belum termasuk Ongkos Pemasangan <b>Rp 50.000</b></br>
                        *note: Pemasangan iPod Classic setelah selesai pengerjaan tidak akan sesempurna yang belum pernah dibuka karena dibagian kanan ada sedikit dent pada saat pengerjaan.</br>
                        *note: <a href="https://zapplerepair.com/syarat-ketentuan-garansi-sukucadang-zapplerepair.html">Ketentuan Garansi Suku Cadang Zapplerepair Indonesia</a>
                    </p>
            </div>

            <div class="list-title mt-5">
                <h6>Service iPod</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan iPod di Semarang dan perbaikan perangkat lunak seperti pemulihan data iPod dan lain sebagainya.</p> 
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
                                <td><a href="https://zapplerepair.com/jasa-Recovery-data-pengembalian-dan-perbaikan-harddisk-hdd-Macbook-iMac-jakarta.html" target="_blank">Data Recovery iPod</a></td>
                                <td><b>Rp 1.500.000 - 3.000.000</b></td>
                            </tr>
                            <tr>
                                <td>Claim Original Garansi di Australia Hongkong dan Singapore (sudah bisa claim di Indonesia)</td>
                                <td><b>Rp 800.000</b></td>
                            </tr>
                            <tr>
                                <td>Game dan Lagu</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Reinstall new OS</td>
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
                <p>Kami menyediakan berbagai aksesoris untuk seri iPod seperti adapter, Tempered Glass, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris iPod</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Original Adaptor</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>Original Data Cable</td>
                                <td><b>30Pins - Rp 150.000 Lightning - Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Original Earpiece</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                            <tr>
                                <td>Screen Protector</td>
                                <td><b>Rp 50.000</b></td>
                            </tr>
                            <tr>
                                <td>Tempered Glass Screen Protector</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service iPod terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk semua versi iPod.
                       Jadi tunggu apalagi, jika mengalami masalah dengan iPod, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/ipodbloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-ipod.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/ipodIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>