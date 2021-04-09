<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%iphone%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service iPhone di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi iPhone di Semarang, Service iPhone Semarang, Reparasi iPhone Semarang, Sparepart iPhone Semarang iphone repair logicboard motherboard pcb, service antar jemput iphone ipad macbook semarang, iphone LCD nya retak, bergaris dan ingin mengganti, iphone logicboard rusak mati total (matot) masuk air servis repair, ganti baterai iPhone semarang "/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service iPhone di Semarang</title>

    
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
                    <img id="testStar" src="img/iphone/XS.jpg" alt="iPhone XS" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service iPhone Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi iPhone seperti Penggantian baterai iPhone, Pemulihan data dari iPhone, Perbaikan Motherboard iPhone, dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service iPhone yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini 
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>iPhone</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">iPhone XS</option>
                            <option value="1">iPhone 2G</option>
                            <option value="2">iPhone 3G</option>
                            <option value="3">iPhone 3GS</option>
                            <option value="4">iPhone 4G</option>   
                            <option value="5">iPhone 4S</option>  
                            <option value="6">iPhone 5</option>   
                            <option value="7">iPhone 5C</option> 
                            <option value="8">iPhone 5S</option> 
                            <option value="9">iPhone SE</option> 
                            <option value="10">iPhone SE 2</option> 
                            <option value="11">iPhone 6</option> 
                            <option value="12">iPhone 6S</option> 
                            <option value="13">iPhone 7</option> 
                            <option value="14">iPhone 8</option> 
                            <option value="15">iPhone X</option>
                            <option value="16">iPhone XR</option> 
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
                <h6>Perbaikan iPhone</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri iPhone di Semarang, dan perbaikan perangkat keras lainnya, seperti kamera rusak, layar LCD mati, iPhone mati total/kerusakan air, kerusakan pada motherboard iPhone dan lain sebagainya.</p> 
                    
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
                                <td>Baseband Error (iMei lost/hilang harus restore semua data hilang dan ada kemungkinan masalah yg lain!)</td>
                                <td><b id="CHANGE14">Rp 1.700.000</b></td>
                            </tr>
                            <tr>
                                <td>Camera Chipset</td>
                                <td><b id="CHANGE1">Rp 1,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Camera Flash Error</td>
                                <td><b id="CHANGE2">Rp 1,400,000</b></td>
                            </tr>
                            <tr>
                                <td>Charging Power Circuit (IC Power chipset)</td>
                                <td><b id="CHANGE3">Rp 2,100,000</b></td>
                            </tr>
                            <tr>
                                <td>Cpu (Cpu dan Memory)</td>
                                <td><b id="CHANGE41">*Cpu A12 Bionic masih belum bisa dikerjakan</td>
                            </tr>
                            <tr>
                                <td>Dead (tidak bisa nyala bukan Power IC chipset)</td>
                                <td><b id="CHANGE4">Rp 1,900,000</b></td>
                            </tr>
                            <tr>
                                <td>Front Camera Chipset</td>
                                <td><b id="CHANGE5">Rp 1,200,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Auto Restart</td>
                                <td><b id="CHANGE6">Rp 1,900,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Stuck at Apple Logo</td>
                                <td><b id="CHANGE7">Rp 1,900,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Stuck at Connect to iTune</td>
                                <td><b id="CHANGE8">Rp 1,900,000</b></td>
                            </tr>
                            <tr>
                                <td>Ic Chipset Controller</td>
                                <td><b id="CHANGE43">Rp 600,000 ~ Rp 1,650,000</b></td>
                            </tr>
                            <tr>
                                <td>Imei Missing (bukan Baseband, harus ganti Cpu dan Memory)</td>
                                <td><b id="CHANGE9">*Cpu A11 Bionic masih belum bisa dikerjakan</b></td>
                            </tr>
                            <tr>
                                <td>Lcd no Display (Vga IC Display chipset)</td>
                                <td><b id="CHANGE10">Rp 1,900,000</b></td>
                            </tr>
                            <tr>
                                <td>Motherboard Heating (bisa menyebabkan Battery cepat habis)</td>
                                <td><b id="CHANGE11">Rp 1,500,000</b></td>
                            </tr>
                            <tr>
                                <td>Small Cpu</td>
                                <td><b id="CHANGE42">Small CPU terlalu mahal!</b></td>
                            </tr>
                            <tr>
                                <td>Sim Card Slot (tidak bisa baca)</td>
                                <td><b id="CHANGE12">Rp 1,600,000</b></td>
                            </tr>
                            <tr>
                                <td>Tidak Keluar Suara di Pihak Panggilan (Audio chipset)</td>
                                <td><b id="CHANGE40">Rp 1,635,000</b></td>
                            </tr>
                            <tr>
                                <td>Touchpanel Tidak Sensitif (bukan masalah Digitizer Kaca)</td>
                                <td><b id="CHANGE39">Rp 1,145,000</b></td>
                            </tr>
                            <tr>
                                <td>Transmitter Receiver (ada kemungkinan restore semua data hilang dan bisa muncul masalah yg lain!)</td>
                                <td><b id="CHANGE13">Rp 1,900,000</b></td>
                            </tr>
                            <tr>
                                <td>Waterdamage</td>
                                <td><b>Rp 200.000 ++</b></td>
                            </tr>
                            <tr>
                                <td>Weak Signal atau No Signal</td>
                                <td><b id="CHANGE15">Rp 1,250,000</b></td>
                            </tr>
                            <tr>
                                <td>Wifi</td>
                                <td><b id="CHANGE16">Rp 1,250,000</b></td>
                            </tr>  
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service ada tambahan Level Low - <b>Rp 200.000</b> Level Medium/High - <b>Rp 500.000</b></br>
                    *note: iPhone yang Masuk Mati. Uang Pengecekan - <b>Rp 50.000</b> iPhone yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.</br>
                    *note: iPhone yang ada component kecil yg hilang. salah solder ataupun penggunaan mesin pemanas dengan asal2an oleh teknisi liar akan dikenakan Uang Pemulihan - <b>Rp 100.000 - RP 750.000</b></br>
                    *promo: Pengerjaan reparasi masalah di logicboard iPhone secara cepat dan bisa ditunggu lalu kami utamakan dari barang servis yang lain akan ada penambahan - <b>Rp 300.000</b> 
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart iPhone</h6>
                    
                <p>Kami mengganti suku cadang / melakukan upgrade untuk berbagai model iPhone dan perbaikan perangkat keras lainnya seperti LCD retak, atau piksel mati pada LCD iPhone, baterai iPhone kembung atau rusak, dan lain sebagainya.</p> 
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
                                <td><b id="CHANGE17">Rp 650,000</b></td>
                            </tr>
                            <tr>
                                <td>Backlight film LCD</td>
                                <td><b>Harga Layar Sentuh ++ Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Camera Belakang</td>
                                <td><b id="CHANGE18">XS - Rp 1,250,000, XS Max - Rp 1,725,000</b></td>
                            </tr>
                            <tr>
                                <td>Charging 30 pins Dock Flexicable atau lightning Dock Flexicable</td>
                                <td><b id="CHANGE19">Rp 700,000</b></td>
                            </tr>
                            <tr>
                                <td>Connector di Logicboard (Batterai. Flexicable. Lcd dan Touch screen connector)</td>
                                <td><b>Rp 90,000</b></td>
                            </tr>
                            <tr>
                                <td>Home Button</td>
                                <td><b id="CHANGE20">Fingerprint + Home button flexicable - Rp 2,750,000, Home button flexicable - Rp 400,000, Fingerprint Flexicable - Rp 650,000</b></td>
                            </tr>
                            <tr>
                                <td>Hearing Speaker</td>
                                <td><b id="CHANGE21">Rp 400,000</b></td>
                            </tr>
                            <tr>
                                <td>LCD Broken atau Crack</td>
                                <td><b id="CHANGE22">iPhone XS Ori - Rp 5,350,000, iPhone XS Max Ori - Rp 5,850,000</b></td>
                            </tr>
                            <tr>
                                <td>LCD Proximity Sensor</td>
                                <td><b id="CHANGE23">Rp 700,000 (satu set dengan camera depan)</b></td>
                            </tr>
                            <tr>
                                <td>Lem LCD iPhone yg ngangkat terbuka lepas dari casing (karena Baterai melembung atau tertekan dari luar di bagian lensa kamera)</td>
                                <td><b>Rp 75,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE24">XS 256GB - Rp 9,050,000, 512GB - Rp 9,500,000, XS Max 256GB - Rp 11,000,000, 512GB - Rp 13.100.000</b></td>
                            </tr>
                            <tr>
                                <td>Mic</td>
                                <td><b id="CHANGE38">-</b></td>
                            </tr>
                            <tr>
                                <td>New Battery</td>
                                <td><b id="CHANGE25">Rp 1,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Power on/off Button atau On/off flexicable</td>
                                <td><b id="CHANGE26">Rp 850,000</b></td>
                            </tr>
                            <tr>
                                <td>Replacement Midplate</td>
                                <td><b id="CHANGE27">-</b></td>
                            </tr>
                            <tr>
                                <td>Replacement Backcover</td>
                                <td><b id="CHANGE29">Rp 1,150,000</b></td>
                            </tr>
                            <tr>
                                <td>Sim Card Reader (tidak bisa Read atau Stuck)</td>
                                <td><b id="CHANGE30">Rp 400,000</b></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td><b id="CHANGE31">Rp 500,000</b></td>
                            </tr>
                            <tr>
                                <td>Touch Panel Digitizer (kaca depan ori tapi retak dan lcd display touch masih bagus. lcd lama akan disimpan oleh Zapplerepair)</td>
                                <td><b id="CHANGE32">iPhone XS - Rp 4.500.000, iPhone XS Max - Rp 6.000.000 lcd yang lama harus Ori</b></td>
                            </tr>
                            <tr>
                                <td>Vibrator</td>
                                <td><b id="CHANGE33">Rp 450,000</b></td>
                            </tr>
                            <tr>
                                <td>Volume Button or Volume Flexicable</td>
                                <td><b id="CHANGE34">Rp 400,000</b></td>
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
                <h6>Service iPhone</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan iPhone di Semarang dan perbaikan perangkat lunak seperti pemulihan data iPhone dan lain sebagainya.</p> 
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
                                <td><a href="https://zapplerepair.com/jasa-Recovery-data-pengembalian-dan-perbaikan-harddisk-hdd-Macbook-iMac-jakarta.html" target="_blank">Data Recovery iPhone</a></td>
                                <td><b>Rp 1.500.000 - 3.000.000</b></td>
                            </tr>
                            <tr>
                                <td><a href="https://zapplerepair.com/AppleCare+iPhone5C5S-iPod5-Bantu-Claim-Garansi-Servis-China-Singapore-Hongkong-US-Japan.html" target="_blank">Claim Original Garansi di Australia Hongkong dan Singapore</a></td>
                                <td><b>Rp 1.000.000</b></td>
                            </tr>
                            <tr>
                                <td>Game dan Lagu</td>
                                <td><b>Rp 150.000</b></td>
                            </tr>
                            <tr>
                                <td>Gevey Network Unlock</td>
                                <td><b>Rp 450.000</b></td>
                            </tr>
                            <tr>
                                <td>Jail Break (semua resiko ditanggung customer)</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Network Unlock (Ganti Cpu Memory dan mabien)</td>
                                <td><b id="CHANGE36">*Cpu A10 masih belum bisa dikerjakan</b></td>
                            </tr>
                            <tr>
                                <td>Network Software Unlock (Clear Apple id lock)</td>
                                <td><b id="CHANGE37">Rp 3,000,000</b></td>
                            </tr>
    
                            <tr>
                                <td>Software Auto Restart</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>Software Errors Problem</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>Software Optimization</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td><a href="https://zapplerepair.com/Reset-IOS-7-Activasi-Lock-Iphone-5-5S-iCloud-Apple-id-password.html" target="_blank">Unlock reset lupa password Apple iCloud</a></td>
                                <td><b id="CHANGE35">iPhone X masih belum bisa di unlock</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami menyediakan berbagai aksesoris untuk seri iPhone seperti adapter, tempered glass, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris iPhone</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Original <a href="https://zapplerepair.com/review-kelebihan-Apple-Earpod.html">Apple Earpod</a></td>
                                <td>Baru - <b>Rp 2.400.000</b> Seken - <b>Rp 1.900.000</b></td>
                            </tr>
                            <tr>
                                <td>Original Adaptor</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Original Data Cable</td>
                                <td><b>30Pins - Rp 150.000, Lightning - Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Original Earpiece</td>
                                <td><b>Rp 150.000</b></td>
                            </tr>
                            <tr>
                                <td>Screen Protector</td>
                                <td><b>Rp 50.000</b></td>
                            </tr>
                            <tr>
                                <td>Sim Tray</td>
                                <td><b>iPhone 3G/3GS - Rp 35.000, iPhone 4/4S - Rp 25.000, iPhone 5/5S - Rp 35.000, iPhone 5C - Rp 45.0000, iPhone 6/6+ - Rp 75.000</b></td>
                            </tr>
                            <tr>
                                <td>Tempered Glass Screen Protector</td>
                                <td><b>iPhone 4/4S - Rp 80.000, iPhone 5/5C/5S - Rp 100.000, iPhone 6/6+ - Rp 120.000</b></td>
                            </tr>
                            <tr>
                                <td>Tempered Glass Screen Protector Combo dengan PVD backcover untuk Full Protection</td>
                                <td><b>iPhone 6 - Rp 200.000, iPhone 6+ - Rp 220.000</b></td>
                            </tr>
                            <tr>
                                <td>Extra</td>
                                <td><b id="CHANGE28">-</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service iPhone terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk semua versi iPhone.
                       Jadi tunggu apalagi, jika mengalami masalah dengan iPhone, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/iphonebloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div> 
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-iphone.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/iphoneIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>