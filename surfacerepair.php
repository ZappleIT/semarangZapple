<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%surface%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service Windows Surface di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi Windows Surface di Semarang, Service Windows Surface Semarang, Sparepart Windows Surface Semarang, Windows Surface repair logicboard motherboard semarang, Windows Surface LCD nya retak, Windows Surface LCD nya bergetar flicker, Express Jasa Panggilan Pengerjaan Windows Surface di Tempat, Windows Surface rusak mati total (matot) masuk air servis repair, service ganti Windows Surface keyboard repair" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service Windows Surface di Semarang</title>

    
  </head>
  <?php
  include 'header.php';
  ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav navigasi mx-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
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
                    <li class="nav-item active">
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
                    <img id="testStar" src="img/surface/Surface Pro 7.jpg" alt="Surface Pro 7" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service Windows Surface Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi Surface seperti perbaikan Surface Pro, Surface Book, Surface Go dan Surface Laptop.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service Windows Surface yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini :</p>
                    <p>Selected Brand : <b>Windows Surface</b>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">Surface Pro 7</option>
                            <option value="1">Surface 1</option>
                            <option value="2">Surface 2</option>
                            <option value="3">Surface 3</option>
                            <!--<option value="4">Surface RT</option>-->
                            <!--<option value="5">Surface Pro 1</option>-->
                            <option value="6">Surface Pro 3</option>
                            <option value="7">Surface Pro 4</option>
                            <option value="8">Surface Pro 5</option>
                            <option value="9">Surface Pro 6</option>
                            <option value="10">Surface Pro X</option>
                            <option value="11">Surface Book</option>
                            <option value="12">Surface Book 2</option>
                            <option value="13">Surface Go</option>
                            <option value="17">Surface Go 2</option>
                            <option value="14">Surface Laptop</option>
                            <option value="15">Surface Laptop 2</option>
                            <option value="16">Surface Laptop 3</option>
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
                <h6>Perbaikan Windows Surface</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri Windows Surface di Semarang, dan perbaikan perangkat keras lainnya, seperti Logicboard Surface yang rusak dan lain sebagainya.</p> 
                    
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
                                <td>Bisa nyala tapi Flashing Error</td>
                                <td><b id="CHANGE1">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Bisa nyala tapi no Diplay</td>
                                <td><b id="CHANGE2">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Dead (tidak bisa nyala)</td>
                                <td><b id="CHANGE3">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Graphic Vga Nvidia atau Ati</td>
                                <td><b id="CHANGE4">Rp 3,750,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Auto Restart</td>
                                <td><b id="CHANGE5">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Hang di Logo Screen</td>
                                <td><b id="CHANGE6">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Motherboard Heating Hot</td>
                                <td><b id="CHANGE7">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>System Slow (bukan masalah software)</td>
                                <td><b id="CHANGE8">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>TouchScreen tidak Sensitive atau tidak berfungsi</td>
                                <td><b id="CHANGE9">Rp 3,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Waterdamage</td>
                                <td><b id="CHANGE10">Rp 200,000 ++</b></td>
                            </tr>     
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service ada tambahan Level Low - <b>Rp 200,000</b> Level Medium/High - <b>Rp 500,000</b> harus tambah ongkos membuka lcd Rp 600,000</br>
                    *note: Biaya pemasangan untuk sparepart yang dibawa sendiri oleh customer dikenakan biaya double</br>
                    *note: Windows Surface yg Masuk Mati, Uang Pengecekan tanpa membuka lcd - <b>Rp 100,000</b> Uang Pengecekan dengan membuka lcd - <b>Rp 600,000</b>
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart Windows Surface</h6>
                    
                <p>Kami mengganti sparepart / melakukan upgrade untuk semua seri Windows Surface, dan perbaikan perangkat keras lainnya seperti LCD Surface retak, baterai Surface kembung atau rusak, dan lain sebagainya.</p> 
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
                                <td>New Battery</td>
                                <td><b id="CHANGE11">Rp 1,950,000</b></td>
                            </tr>
                            <tr>
                                <td>Bios Uefi Bitlocker chipset</td>
                                <td><b>Rp 1,950,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing Atas (Surface Pro Casing Belakang)</td>
                                <td><b id="CHANGE12">Rp 1,950,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing C (keyboard side)</td>
                                <td><b id="CHANGE14">-</b></td>
                            </tr>
                            <tr>
                                <td>Casing D (casing bawah)</td>
                                <td><b id="CHANGE15">-</b></td>
                            </tr>
                            <tr>
                                <td>Engsel</td>
                                <td><b>Rp 1,950,000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable</td>
                                <td><b id="CHANGE16">lcd - Rp 850,000 touchscreen - Rp 850,000</b></td>
                            </tr>
                            <tr>
                                <td>Fan</td>
                                <td><b id="CHANGE17">Rp 550,000</b></td>
                            </tr>
                            <tr>
                                <td>Flexible Connector Keyboard to tab</td>
                                <td>Surface Book 1  <b>Rp. 1.750.000 </b></td>
                            </tr>
                            <tr>
                                <td>Hdd with OS</td>
                                <td><b id="CHANGE18">*Satu set dengan motherboard</b></td>
                            </tr>
                            <tr>
                                <td>Keyboard Konektor</td>
                                <td><b id="CHANGE20">Tukar motherboard yang tidak bermasalah menggunakan keyboard, <br>Surface 3: Rp 2,200,000 Surface Pro 3: Rp 3,400,000 <br>Surface Pro 4: Rp 3,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Keyboard Bottom System Bawah (tidak perlu ditambah ongpas)</td>
                                <td><b id="CHANGE13">-</b></td>
                            </tr>
                            <tr>
                                <td>Layar bergetar</td>
                                <td><b id="CHANGE19">-</b></td>
                            </tr>
                            <tr>
                                <td>LCD/LED</td>
                                <td><b id="CHANGE21">Compatible lcd Surface Pro 5 versi 032 - Rp 5,650,000 Original Surface Pro 7 - Rp 6,500,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE22">Mobile i5 8gb 128GB - Rp 6,700,000 i5 8gb 256GB - Rp 7,200,000 i7 8gb 256GB - Rp 9,100,000 i7 16gb 512GB - Rp 11,800,000 (harga tukar tambah dengan logicboard yang rusak)</b></td>
                            </tr>
                            <tr>
                                <td>Memory upgrade</td>
                                <td><b id="CHANGE23">*Satu set dengan motherboard</b></td>
                            </tr>
                            <tr>
                                <td>Port Charging</td>
                                <td><b id="CHANGE27">Rp 950,000</b></td>
                            </tr>
                            <tr>
                                <td>Power button</td>
                                <td><b>Rp 200,000</b></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td><b id="CHANGE24">Rp 550,000</b></td>
                            </tr>
                            <tr>
                                <td>Ssd dengan OS</td>
                                <td><b id="CHANGE25">*Satu set dengan motherboard</b></td>
                            </tr>
                            <tr>
                                <td>TouchPanel Smallboard</td>
                                <td><b id="CHANGE19">Rp 1,950,000</b></td>
                            </tr>
                            <tr>
                                <td>TouchScreen LCD</td>
                                <td><b id="CHANGE26">*Satu set dengan lcd</b></td>
                            </tr>
                            <tr>
                                <td>Usb port</td>
                                <td><b id="CHANGE28">Rp 1,550,000</b></td>
                            </tr>   
                        </tbody>  
                    </table>
                </div>
                    <p class="note">
                        *note: Harga Sparepart Belum termasuk Ongkos Pemasangan <b>Rp 600,000</b><br>
                        *note: <a href="https://zapplerepair.com/syarat-ketentuan-garansi-sukucadang-zapplerepair.html">Ketentuan Garansi Suku Cadang Zapplerepair Indonesia</a>
                    </p>
            </div>

            <div class="list-title mt-5">
                <h6>Service Windows Surface</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan Macbook di Semarang dan perbaikan perangkat lunak seperti pemulihan data Surface, Penggantian LCD Surface bergetar, dan lain sebagainya.</p> 
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
                                <td>Calibration Touchscreen</td>
                                <td><b>Rp 150,000</b></td>
                            </tr>
                            <tr>
                                <td>Claim garansi Windows Surface Go / Surface Pro / Surface Laptop International</td>
                                <td><b>Rp 4,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Claim garansi Windows Surface Book International</td>
                                <td><b>Rp 4,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Penggantian Unit Windows Surface Pro 4 LCD bergetar</td>
                                <td><b>Rp 2,000,000</b></td>
                            </tr>
                            <tr>
                                <td>Data Recovery Harddisk Bad Sector</td>
                                <td>Surface Pro 3 kebawah - <b>Rp 1,500,000</b> Surface Pro 4 - <b>Tanya?</b></td>
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
                                <td>Software Auto Restart</td>
                                <td><b>Rp 250,000</b></td>
                            </tr>
                            <tr>
                                <td>Software Errors Problem</td>
                                <td><b>Rp 250,000</b></td>
                            </tr>
                            <tr>
                                <td>Software Optimization</td>
                                <td><b>Rp 250,000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami menyediakan berbagai aksesoris Windows Surface seperti pelindung Keyboard dan Charger, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris Windows Surface</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Windows Surface Pro 6 Charger</td>
                                <td><b>Rp 1.000,000</b></td>
                            </tr>
                            <tr>
                                <td>Dock Surface Pro</td>
                                <td>Seken - <b>Rp 800,000</b> New - <b>Rp 1,100,000</b></td>
                            </tr>
                            <tr>
                                <td>Lcd Screen Protector</td>
                                <td><b>Rp 150,000</b></td>
                            </tr>
                            <tr>
                                <td>Windows Surface Adaptor</td>
                                <td>Surface Pro/2 - <b>Rp 450,000</b> Surface Pro3/Pro4 36W- <b>Rp 750,000</b> Surface Book - <b>Rp 850,000</b> Surface Book Custom 102W - <b>Rp 1,050,000</b> Surface Go 24W - <b>Rp 750,000</b> *Untuk baru ada tambahan Rp 150,000 stock limited</td>
                            </tr>
                            <tr>
                                <td>Windows Surface Keyboard</td>
                                <td>Seken - <b>Rp 800,000</b> New - <b>Rp 1,100,000</b></td>
                            </tr>
                            <tr>
                                <td>Windows Surface Keyboard Bluetooth (bukan original)</td>
                                <td><b>Rp 800,000</b></td>
                            </tr>
                            <tr>
                                <td>Windows Surface Alcantara Keyboard Type Cover</td>
                                <td><b>Rp 1,500,000</b></td>
                            </tr>
                            <tr>
                                <td>Windows Surface Pen</td>
                                <td>Surface Pro 3 Seken - <b>Rp 650,000</b> Baru - <b>Rp 850,000</b> Surface Pro 4 & Book Seken - <b>Rp 750,000</b> Baru - <b>Rp 900,000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service Windows Surface terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk Surface Book, Surface Pro, Surface Laptop, dan Surface Go. 
                        Jadi tunggu apalagi, jika mengalami masalah dengan Windows Surface, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/surfacebloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div> 
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-surface.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/surfaceIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>