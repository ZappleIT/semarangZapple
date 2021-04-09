<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%macbook,%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service Macbook di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi Macbook di Semarang, Service Macbook Semarang, Sparepart Macbook Semarang, macbook repair logicboard motherboard semarang, Macbook LCD nya retak, bergaris dan ingin mengganti, Express Jasa Panggilan Pengerjaan Macbook di Tempat, macbook rusak mati total (matot) masuk air servis repair, service ganti macbook keyboard repair" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service Macbook di Semarang</title>

    
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
                    <img id="testStar" src="img/macbook/macbookRetina12.jpg" alt="Macbook Retina 2012" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service Macbook Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi Macbook seperti Penggantian Baterai Macbook, Perbaikan LCD Macbook, Pemulihan Data Macbook, Perbaikan Logicboard Macbook dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service Macbook yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini :</p>
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>Macbook</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                        <option value="0" selected="selected">Macbook Retina 12</option>
                        <option value="1">Macbook White 2007</option>
                        <option value="2">Macbook Black 2007</option>
                        <option value="3">Macbook White Unibody</option> 
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
                <h6>Perbaikan Macbook</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri Macbook di Semarang, dan perbaikan perangkat keras lainnya, seperti Logicboard Macbook yang rusak dan lain sebagainya.</p> 
                    
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
                                <td>Bios Password/Reset</td>
                                <td><b id="CHANGE1">Rp 1,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Bridge Chipset</td>
                                <td><b id="CHANGE29">Rp 2,700,000</b></td>
                            </tr>
                            <tr>
                                <td>*Cannot detect Harddisk</td>
                                <td><b id="CHANGE2">Rp 2,300,000</b></td>
                            </tr>
                            <tr>
                                <td>*Cannot use Wifi (bukan Airport Error)</td>
                                <td><b id="CHANGE3">Rp 1,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Auto Restart</td>
                                <td><b id="CHANGE4">Rp 2,300,000</b></td>
                            </tr>
                            <tr>
                                <td>Jalur logicboard</td>
                                <td><b>Rp 550.000 - Rp 1.450.000</b></td>
                            </tr>
                            <tr>
                                <td>Kernel Panic Error</td>
                                <td><b id="CHANGE34">Rp 2,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard Heating Hot (Cpu menyatu di Logicboard)</td>
                                <td><b id="CHANGE5">Rp 3,100,000</b></td>
                            </tr>
                            <tr>
                                <td>No Power (Ic Power Charging)</td>
                                <td><b id="CHANGE6">Rp 1,450,000</b></td>
                            </tr>
                            <tr>
                                <td>Power On No Display</td>
                                <td><b id="CHANGE7">Rp 2,700,000</b></td>
                            </tr>
                            <tr>
                                <td>SMC System Management Controller</td>
                                <td><b>Rp 2,150,000</b></td>
                            </tr>
                            <tr>
                                <td>System Stuck at Apple Logo</td>
                                <td><b id="CHANGE8">Rp 2,300,000</b></td>
                            </tr>
                            <tr>
                                <td>System Slow</td>
                                <td><b id="CHANGE9">Rp 2,300,000</b></td>
                            </tr>
                            <tr>
                                <td>Usb Tidak bisa Baca (bukan Usb Port yg rusak)</td>
                                <td><b id="CHANGE10">Rp 2,300,000</b></td>
                            </tr> 
                            <tr>
                                <td>Vga Radeon Nvidia Problem</td>
                                <td><b id="CHANGE11">Rp 2,700,000</b></td>
                            </tr>
                            <tr>
                                <td>Waterdamage</td>
                                <td><b id="CHANGE12">Rp 200,000 ++</b></td>
                            </tr>    
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service ada tambahan Level Low - <b>Rp 200,000</b> Level Medium/High - <b>Rp 500,000</b></br>
                    *note: Macbook yg Masuk Mati, Uang Pengecekan - <b>Rp 100,000</b> Macbook yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.</br>
                    *note: Biaya pemasangan untuk sparepart yang dibawa sendiri oleh customer dikenakan biaya double</br>
                    *note: Macbook yg ada component kecil yg hilang, salah solder ataupun penggunaan mesin pemanas dengan asal2an oleh teknisi liar akan dikenakan Uang Pemulihan - <b>Rp 100,000 - RP 500,000</b>  
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart Macbook</h6>
                    
                <p>Kami mengganti sparepart / melakukan upgrade untuk berbagai model Macbook Series, dan perbaikan perangkat keras lainnya seperti LCD Macbook retak, baterai Macbook kembung atau rusak, dan lain sebagainya.</p> 
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
                                <td>Camera</td>
                                <td><b>Rp 200,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing A (casing depan)</td>
                                <td><b id="CHANGE13">Rp 1,500,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing B (bezel)</td>
                                <td><b id="CHANGE14">*LCD/LED Satu Set</b></td>
                            </tr>
                            <tr>
                                <td>Casing C (keyboard side)</td>
                                <td><b id="CHANGE15">*Satu set dengan logicboard</b></td>
                            </tr>
                            <tr>
                                <td>Casing D (casing bawah)</td>
                                <td><b id="CHANGE16">Rp 700,000</b></td>
                            </tr>
                            <tr>
                                <td>Fan Kipas</td>
                                <td><b id="CHANGE17">Rp 425,000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable HDD/SSD</td>
                                <td><b id="CHANGE31">Rp 650,000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable Lcd/Led</td>
                                <td><b id="CHANGE32">Rp 700,000</b></td>
                            </tr>
                            <tr>
                                <td>Front Glass</td>
                                <td><b id="CHANGE18">*LCD/LED Satu Set</b></td>
                            </tr>
                            <tr>
                                <td>Keyboard</td>
                                <td><b id="CHANGE19">Rp 1,650,000</b></td>
                            </tr>
                            <tr>
                                <td>Hdd dengan Mac OSX</td>
                                <td><b id="CHANGE20">*Satu set dengan Logicboard</b></td>
                            </tr>
                            <tr>
                                <td>Hinge Engsel</td>
                                <td><b id="CHANGE21">Rp 400,000</b></td>
                            </tr>
                            <tr>
                                <td>LCD/LED</td>
                                <td><b id="CHANGE22">Rp 5,675,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE23">Rp 7,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Magsafe Connector ke Logicboard</td>
                                <td><b id="CHANGE24">Rp 450,000</b></td>
                            </tr>
                            <tr>
                                <td>Memory upgrade</td>
                                <td><b id="CHANGE25">*Harus ganti Logicboard</b></td>
                            </tr>
                            <tr>
                                <td>New Battery</td>
                                <td><b id="CHANGE26">Rp 1,350,000 (Ori 6 bulan Garansi)</b></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td><b id="CHANGE27">Rp 750,000</b></td>
                            </tr>
                            <tr>
                                <td>Super Drive</td>
                                <td><b id="CHANGE28">-</b></td>
                            </tr>
                            <tr>
                                <td>Trackpad</td>
                                <td><b id="CHANGE30">Rp 700,000</b></td>
                            </tr>
                            <tr>
                                <td>Wifi & Bluetooth Airport Card</td>
                                <td><b id="CHANGE33">Rp 725,000</b></td>
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
                <h6>Service Macbook</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan Macbook di Semarang dan perbaikan perangkat lunak seperti pemulihan data Macbook dan lain sebagainya.</p> 
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
                                <td>Data Recovery Harddisk Bad Sector</td>
                                <td><b>Dibawah 200GB - Rp 300.000, Diatas 200GB - Rp 600.000</b></td>
                            </tr>
                            <tr>
                                <td><a href="https://zapplerepair.com/jasa-Recovery-data-pengembalian-dan-perbaikan-harddisk-hdd-Macbook-iMac-jakarta.html">Data Recovery Harddisk Rusak</a></td>
                                <td><b>Rp 800.000 - Rp 2.500.000 ke atas</b></td>
                            </tr>
                            <tr>
                                <td>Game dan Lagu</td>
                                <td><b>Rp 100.000</b></td>
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
                <p>Kami menyediakan berbagai aksesoris seperti pelindung Keyboard dan Casing untuk Macbook, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris Macbook</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Baut sekrup bawah satu set Macbook</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                            <tr>
                                <td>Casing Plastik A + D</td>
                                <td><b>Rp 350.000</b></td>
                            </tr>
                            <tr>
                                <td>Full skin protector (casing A + C + D)</td>
                                <td><b>Rp 300.000</b></td>
                            </tr>
                            <tr>
                                <td>Karet casing bawah Macbook</td>
                                <td><b>Rp 25.000</b></td>
                            </tr>
                            <tr>
                                <td>Keyboard protector (12 warna)</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                            <tr>
                                <td>Keypad sticker untuk casing C (silver)</td>
                                <td><b>Rp 75.000</b></td>
                            </tr>
                            <tr>
                                <td>Lcd screen protector</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                            <tr>
                                <td>Magsafe Adaptor</td>
                                <td><b id="CHANGE23">Kw1 - Rp 650.000 1 tahun garansi, Ori - Rp 800.000 6 bulan garansi</b></td>
                            </tr>
                            <tr>
                                <td>Mini Dvi to dvi/hdmi/vga</td>
                                <td><b> Dvi - Rp 600.000, Hdmi - Rp 550.000, Vga - Rp 450.000</b></td>
                            </tr>
                            <tr>
                                <td>Sticker keren untuk casing A</td>
                                <td><b>Rp 150.000</b></td>
                            </tr>
                            <tr>
                                <td>Sticker untuk casing A + D (silver)</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service Macbook terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk Macbook Retina, Macbook White, Macbook Black, dll. 
                    Jadi tunggu apalagi, jika mengalami masalah dengan Macbook, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/macbookbloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div> 
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-macbook.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/macbookIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>