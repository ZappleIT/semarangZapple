<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%macbook pro%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service Macbook Pro di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi Macbook Pro di Semarang, Service Macbook Pro Semarang, Sparepart Macbook Pro Semarang, macbook Pro repair logicboard motherboard semarang, Macbook Pro LCD nya retak, bergaris dan ingin mengganti, Express Jasa Panggilan Pengerjaan Macbook Pro di Tempat, macbook pro rusak mati total (matot) masuk air servis repair, service ganti macbook pro keyboard repair" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service Macbook Pro di Semarang</title>

    
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
                    <img id="testStar" src="img/macbookpro/macbookRetina2016.jpg" alt="Macbook Retina 2016" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service Macbook Pro Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi Macbook Pro seperti Penggantian Baterai Macbook Pro, Perbaikan LCD Macbook Pro, Pemulihan Data Macbook Pro, Perbaikan Logicboard Macbook Pro dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service Macbook Pro yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini :</p>
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>Macbook Pro</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">Macbook Pro Retina A1706</option>
                            <option value="0">Macbook Pro Retina A1707</option>
                            <option value="0">Macbook Pro Retina A1708</option>
                            <option value="0">Macbook Pro Retina A1989</option>
                            <option value="0">Macbook Pro Retina A1990</option>
                            <option value="0">Macbook Pro Retina A2141</option>
                            <option value="0">Macbook Pro Retina A2159</option> 
                            <option value="1">Macbook Pro A1150 A1175</option>
                            <option value="1">Macbook Pro A1180 A1261</option>
                            <option value="2">Macbook Pro A1278 A1280</option>
                            <option value="2">Macbook Pro A1286 A1297</option>
                            <option value="3">Macbook Pro Retina A1425</option>
                            <option value="3">Macbook Pro Retina A1502</option>
                            <option value="3">Macbook Pro Retina A1398</option>
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
                <h6>Perbaikan Macbook Pro</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri Macbook Pro di Semarang, dan perbaikan perangkat keras lainnya, seperti Logicboard Macbook Pro yang rusak dan lain sebagainya.</p> 
                    
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
                                <td>Bios Password</td>
                                <td><b id="CHANGE1">Rp 2,750,000</b></td>
                            </tr>
                            <tr>
                                <td>Bridge Chipset</td>
                                <td><b id="CHANGE28">Rp 3,750,000</b></td>
                            </tr>
                            <tr>
                                <td>Bypass Graphic vga Ati Radeon dengan hanya menggunakan Intel (Macbook Pro tahun 2009 ~ 2012)</td>
                                <td><b>Rp 2,200,000</b></td>
                            </tr>
                            <tr>
                                <td>*Cannot detect Harddisk</td>
                                <td><b id="CHANGE2">Rp 3,750,000</b></td>
                            </tr>
                            <tr>
                                <td>Clear Vram memory dan Baterai (biasa condisi masuk mati total dan tidak bisa charging)</td>
                                <td><b>Rp 1,850,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Auto Restart</td>
                                <td><b id="CHANGE3">Rp 3,750,000</b></td>
                            </tr>
                            <tr>
                                <td>Membuat Jalur Baru di Logicboard</td>
                                <td><b>Rp 5,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Kernel Panic Error</td>
                                <td><b>Rp 3,050,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard Heating Hot (Cpu menyatu di Logicboard)</td>
                                <td><b id="CHANGE4">Rp 5,150,000</b></td>
                            </tr>
                            <tr>
                                <td>No Power (Ic Power Charging)</td>
                                <td><b id="CHANGE5">Rp 3,750,000</b></td>
                            </tr>
                            <tr>
                                <td>Memory (Nyala tidak ada display dan ada bunyi beep)</td>
                                <td><b id="CHANGE5">Macbook Pro - *Lihat harga Memory Macbook Retina - Rp 4,950,000</b></td>
                            </tr>
                            <tr>
                                <td>Power On No Display</td>
                                <td><b id="CHANGE6">Rp 3,750,000</b></td>
                            </tr>
                            <tr>
                                <td>SMC System Management Controller</td>
                                <td><b>Rp 3,150,000</b></td>
                            </tr>
                            <tr>
                                <td>System Stuck at Apple Logo</td>
                                <td><b id="CHANGE7">Rp 3,750,000</b></td>
                            </tr>
                            <tr>
                                <td>System Slow</td>
                                <td><b id="CHANGE8">Rp 3,050,000</b></td>
                            </tr>
                            <tr>
                                <td>Vga Radeon Nvidia Problem</td>
                                <td><b id="CHANGE9">Rp 4,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Waterdamage</td>
                                <td><b id="CHANGE10">Rp 200,000 ++</b></td>
                            </tr> 
                            <tr>
                                <td>*Cannot use Wifi (Tidak ada airport error)</td>
                                <td><b id="CHANGE11">Rp 1,550,000</b></td>
                            </tr>   
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service ada tambahan Level Low - <b>Rp 200,000</b> Level Medium/High - <b>Rp 500,000</b></br>
                    *note: Macbook Pro yg Masuk Mati, Uang Pengecekan - <b>Rp 100,000</b> Macbook Pro yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.</br>
                    *note: Biaya pemasangan untuk sparepart yang dibawa sendiri oleh customer dikenakan biaya double</br>
                    *note: Macbook Pro yg ada component kecil yg hilang, salah solder ataupun penggunaan mesin pemanas dengan asal2an oleh teknisi liar akan dikenakan Uang Pemulihan - <b>Rp 100,000 - RP 500,000</b>
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart Macbook Pro</h6>
                    
                <p>Kami mengganti sparepart / melakukan upgrade untuk berbagai model Macbook Pro Series, dan perbaikan perangkat keras lainnya seperti LCD Macbook Pro retak, baterai Macbook Pro kembung atau rusak, dan lain sebagainya.</p> 
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
                                <td><b>Rp 200,000 Macbook Pro Retina - *Harus ganti Led Top System</b></td>
                            </tr>
                            <tr>
                                <td>Casing A (casing depan)</td>
                               <td><b id="CHANGE12">Rp 250,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing B (bezel)</td>
                                <td><b id="CHANGE13">Karet Samping - Rp 250,000 Kaca Bezel - *Harus ganti Led Top System</b></td>
                            </tr>
                            <tr>
                                <td>Casing C (keyboard side)</td>
                                <td><b id="CHANGE14">Rp 1,950,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing D (casing bawah)</td>
                                <td><b id="CHANGE15">Rp 450,000</b></td>
                            </tr>
                            <tr>
                                <td>Charging Port</td>
                                <td><b>Non Retina - Rp 600,000 Retina - Rp 850,000</b></td>
                            </tr>
                            <tr>
                                <td>Fan Kipas</td>
                                <td><b id="CHANGE16">Rp 550,000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable HDD/SSD</td>
                                <td><b id="CHANGE31">Rp 550,000</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable Lcd/Led</td>
                                <td><b id="CHANGE32">*Harus ganti Led Top System</b></td>
                            </tr>
                            <tr>
                                <td>Flexicable Wifi</td>
                                <td><b id="CHANGE33">Rp 600,000</b></td>
                            </tr>
                            <tr>
                                <td>Front Glass Kaca Depan</td>
                                <td><b id="CHANGE17">*Harus ganti Lcd atau Led Top System</b></td>
                            </tr>
                            <tr>
                                <td>Keyboard</td>
                                <td><b id="CHANGE18">Rp 3,450,000</b></td>
                            </tr>
                            <tr>
                                <td>Hdd with OS</td>
                                <td><b id="CHANGE19">Msata SSD 128GB - 1,850,000 256GB - Rp 3,500,000 512GB - Rp 5,000,000</b></td>
                            </tr>
                            <tr>
                                <td>Hinge Engsel</td>
                                <td><b id="CHANGE20">*Harus ganti Led Top System</b></td>
                            </tr>
                            <tr>
                                <td>LCD/LED</td>
                                <td><b id="CHANGE21">Top System, LCD A1706 A1708 A1989 - Rp 8,800,000 | Top System A1707 A1990 - Rp 10,400,000</b></td>
                            </tr>
                            <tr>
                                <td>LCD/LED Top System (Casing A + Bezel + Engsel)</td>
                                <td><b id="CHANGE29">Flexicable LCD (Macbook Pro Retina flexgate issue) Reparasi - Rp 3,800,000, LCD Top System 13 INCI A1706 A1708 A1989 - Rp 6,800,000 15 INCI A1707 A1990 - Rp 7,500,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE22">A1706 A1708 i5 - Rp 8,400,000 i7 - Rp 9,800,000 A1707 A1708 i7 8GB - Rp 11,700,000 i7 16GB - Rp 12,800,000 A1709 & A1989 - tanya Customer Servis</b></td>
                            </tr>
                            <tr>
                                <td>Magsafe Connector ke Logicboard</td>
                                <td><b>Magsafe 1 - Rp 345,000 Retina Magsafe 2 - Rp 750,000</b></td>
                            </tr>
                            <tr>
                                <td>Memory upgrade</td>
                                <td><b id="CHANGE24">-</b></td>
                            </tr>
                            <tr>
                                <td>New Battery</td>
                                <td><b id="CHANGE25">13 INCI - Rp 2,050,000 15 INCI - Rp 2,250,000 16 INCI - Rp 2,650,000 (Original Baterai 6 bulan Garansi)</b></td>
                            </tr>
                            <tr>
                                <td>Small Board (SDXC card slot, HDMI dan USB3)</td>
                                <td><b>Retina 13 - Rp 900,000 Retina 15 - Rp 1,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td><b id="CHANGE26">Rp 900,000</b></td>
                            </tr>
                            <tr>
                                <td>Sensor Touch</td>
                                <td><b id="CHANGE35">Rp 2,050,000</b></td>
                            </tr>
                            <tr>
                                <td>DVD Drive</td>
                                <td><b id="CHANGE27">-</b></td>
                            </tr>
                            <tr>
                                <td>Trackpad</td>
                                <td><b id="CHANGE30">Force Touch trackpad - Rp 1,050,000</b></td>
                            </tr>
                            <tr>
                                <td>Wifi & Bluetooth Airport Card</td>
                                <td><b id="CHANGE34">1000MB - Rp 950,000</b></td>
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
                <h6>Service Macbook Pro</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan Macbook Air di Semarang dan perbaikan perangkat lunak seperti pemulihan data Macbook Air dan lain sebagainya.</p> 
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
                                <td>Reinstall new OS</td>
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
                            <tr>
                                <td>Usb Mac Osx Installer</td>
                                <td><b>Rp 300,000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami menyediakan berbagai aksesoris seperti pelindung Keyboard dan Casing untuk Macbook Pro, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris Macbook Pro</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Baut sekrup bawah satu set Macbook Pro</td>
                                <td><b>Rp 100,000</b></td>
                            </tr>
                            <tr>
                                <td>Casing Plastik A + D</td>
                                <td><b>Rp 350,000</b></td>
                            </tr>
                            <tr>
                                <td>Full skin protector (casing A + C + D)</td>
                                <td><b>Rp 300,000</b></td>
                            </tr>
                            <tr>
                                <td>Karet casing bawah Macbook Pro</td>
                                <td><b>Rp 25,000</b></td>
                            </tr>
                            <tr>
                                <td>Keyboard protector (12 warna)</td>
                                <td><b>Rp 100,000</b></td>
                            </tr>
                            <tr>
                                <td>Keypad sticker untuk casing C (silver)</td>
                                <td><b>Rp 75,000</b></td>
                            </tr>
                            <tr>
                                <td>Lcd screen protector</td>
                                <td><b>Rp 100,000</b></td>
                            </tr>
                            <tr>
                                <td>Magsafe Adaptor</td>
                                <td><b id="CHANGE23">65W Kw1 1 tahun garansi - Rp 650,000 65W Ori 6 bulan garansi - Rp 800,000 85W Kw1 1 tahun garansi - Rp 650,000 85W Ori 6 bulan garansi - Rp 850,000</b></td>
                            </tr>
                            <tr>
                                <td>Mini Dvi to dvi/hdmi/vga</td>
                                <td><b> Dvi - Rp 600,000 Hdmi - Rp 550,000 Vga - Rp 450,000</b></td>
                            </tr>
                            <tr>
                                <td>Sticker keren untuk casing A</td>
                                <td><b>Rp 150,000</b></td>
                            </tr>
                            <tr>
                                <td>Sticker untuk casing A + D (silver)</td>
                                <td><b>Rp 200,000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service Macbook Pro terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk semua versi Macbook Pro. 
                        Jadi tunggu apalagi, jika mengalami masalah dengan Macbook Pro, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/macbookprobloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-macbookpro.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/macbookproIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>