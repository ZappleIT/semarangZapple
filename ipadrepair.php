<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%ipad%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service iPad di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi iPad di Semarang, Service iPad Semarang, Reparasi iPad Semarang, Sparepart iPad Semarang, iPad repair logicboard motherboard pcb, ganti ipad lcd touchpanel kaca pecah retak, service antar jemput repair servis iphone ipad macbook semarang, ipad LCD nya retak, bergaris dan ingin mengganti, ipad logicboard rusak mati total (matot) masuk air servis repair, ganti baterai iPad semarang" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service iPad di Semarang</title>

    
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
    <section id="box-top" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 image">
                    <img id="testStar" src="img/ipad/ipadPro2.jpg" alt="iPad Pro 2" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service iPad Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi iPad seperti Penggantian baterai iPhone, Pemulihan data dari iPad, Perbaikan iPad Mati total, dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service iPad yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini 
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>iPad</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">iPad Pro 2</option>
                            <option value="1">iPad 1</option>
                            <option value="2">iPad 2</option>
                            <option value="3">iPad 3</option>
                            <option value="4">iPad 4</option>
                            <option value="5">iPad Air</option>
                            <option value="6">iPad Air 2</option>
                            <option value="7">iPad Mini</option>
                            <option value="8">iPad Mini 2</option>
                            <option value="9">iPad Mini 3</option>
                            <option value="10">iPad Mini 4</option>
                            <option value="11">iPad Pro</option>
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
                    <h6>Perbaikan iPad</h6>
                    
                    <p>Kami menyediakan layanan untuk semua perbaikan seri iPad di Semarang, dan perbaikan perangkat keras lainnya, seperti kamera rusak, layar LCD mati, iPad mati total/kerusakan air, kerusakan pada logicboard iPad dan lain sebagainya.</p> 
                     
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
                                    <td>Camera Chipset</td>
                                    <td><b id="CHANGE1">Rp 850,000</b></td>
                                </tr>
                                <tr>
                                    <td>Casing Ketok Magic</td>
                                    <td><b>Rp 150,000 ~ Rp 200,000</b></td>
                                </tr>
                                <tr>
                                    <td>Charging Power Circuit</td>
                                    <td><b id="CHANGE3">Rp 1.300.000</b></td>
                                </tr>
                                <tr>
                                    <td>Dead (tidak bisa nyala, penggantian power ic)</td>
                                    <td><b id="CHANGE4">Rp 1.700.000</b> By pass 3G/4G module -  <b>Rp 900.000</b> (unit nyala tapi tidak bisa pakai 3G 4G lagi)</td>
                                </tr>
                                <tr>
                                    <td>Front Camera Chipset</td>
                                    <td><b id="CHANGE5">Rp 650.000</b></td>
                                </tr>
                                <tr>
                                    <td>Hardware Auto Restart</td>
                                    <td><b id="CHANGE6">Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>Hardware Stuck at Apple Logo</td>
                                    <td><b id="CHANGE7">Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>Hardware Stuck at Connect to iTune</td>
                                    <td><b id="CHANGE8">Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>Imei Missing (harus ganti cpu dan memory tapi 3G tidak bisa di pakai lagi)</td>
                                    <td><b id="CHANGE9">*Cpu A10X masih belum bisa dikerjakan</b></td>
                                </tr>
                                <tr>
                                    <td>Intermittent auto restart / mati (kadang2 Imei berubah)</td>
                                    <td><b>Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>iPad bypass (masuk biasanya iPad condisi mati total)</td>
                                    <td><b id="CHANGE2">Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>Lcd no Display</td>
                                    <td><b id="CHANGE10">Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>Lcd Redup (no backlight / ic display)</td>
                                    <td><b>Rp 1.150.000</b></td>
                                </tr>
                                <tr>
                                    <td>Motherboard Heating (bisa menyebabkan battery cepat habis)</td>
                                    <td><b id="CHANGE11">Rp 1.750.000</b></td>
                                </tr>
                                <tr>
                                    <td>Putus Jalur Reparasi</td>
                                    <td><b>Rp 300.000 ~ Rp 550.000</b></td>
                                </tr>
                                <tr>
                                    <td>Sim Card no Network(Logicboard dan 3G tidak rusak)</td>
                                    <td><b id="CHANGE12">Rp 900,000</b></td>
                                </tr>
                                <tr>
                                    <td>Touchpanel tidak sensitif / tidak bisa sama sekali</td>
                                    <td><b id="CHANGE39">Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>Transmitter Receiver</td>
                                    <td><b id="CHANGE13">Rp 1.350.000</b></td>
                                </tr>
                                <tr>
                                    <td>Waterdamage</td>
                                    <td><b id="CHANGE14">Rp 200,000 ++</b></td>
                                </tr>
                                <tr>
                                    <td>Weak Signal atau No Signal</td>
                                    <td><b id="CHANGE15">Rp 1.350.000</b></td>
                                </tr> 
                                <tr>
                                    <td>Wifi</td>
                                    <td><b id="CHANGE16">Rp 950.000</b></td>
                                </tr>   
                            </tbody>  
                        </table>
                    </div>
                    <p class="note">
                        *note: Waterdamage (Kemasukan air) Cleaning Service ada tambahan Level Low - <b>Rp 200,000</b> Level Medium/High - <b>Rp 500,000</b></br>			
                        *note: iPad yang Masuk Mati, Uang Pengecekan - <b>Rp 100,000</b> iPad yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.</br>
                        *note: iPad yang ada component kecil yg hilang, salah solder ataupun penggunaan mesin pemanas dengan asal2an oleh teknisi liar akan dikenakan Uang Pemulihan - <b>Rp 100,000 - RP 500,000</b> </br>			               
                        *promo: Pengerjaan reparasi masalah di logicboard iPad secara cepat dan bisa ditunggu lalu kami utamakan dari barang servis yang lain akan ada penambahan - <b>Rp 300,000</b> 
                    </p>
                </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart iPad</h6>   
                <p>Kami mengganti suku cadang / melakukan upgrade untuk berbagai model iPad dan perbaikan perangkat keras lainnya seperti LCD iPad retak, baterai iPad kembung atau rusak, dan lain sebagainya.</p> 
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
                                <td><b id="CHANGE17">Rp 450,000</b></td>
                            </tr>
                            <tr>
                                <td>Antenna</td>
                                <td><b>Rp 400,000</b></td>
                            </tr>
                            <tr>
                                <td>Border List</td>
                                <td><b id="CHANGE40">-</b></td>
                            </tr>
                            <tr>
                                <td>Camera</td>
                                <td><b id="CHANGE18">Rp 500,000</b></td>
                            </tr>
                            <tr>
                                <td>Charging Dock Flexicable</td>
                                <td><b id="CHANGE19">Rp 750,000</b></td>
                            </tr>
                            <tr>
                                <td>Connector di Logicboard (Batterai. Flexicable. Lcd dan Touch screen connector)</td>
                                <td><b>Rp 100.000</b></td>
                            </tr>
                            <tr>
                                <td>Home Button</td>
                                <td><b id="CHANGE20">Rp 400,000 fingerprint - Rp 2,550,000</b></td>
                            </tr>
                            <tr>
                                <td>Hearing Speaker</td>
                                <td><b id="CHANGE21">Rp 375,000</b></td>
                            </tr>
                            <tr>
                                <td>LCD Broken atau Crack</td>
                                <td><b id="CHANGE22">10.5 - Rp 4,750,000 12.9 - Rp 5,750,000 | Lcd dan controller flexicable sudah tersolder ++ Rp 900.000</b></td>
                            </tr>
                            <tr>
                                <td>LCD Flexicable</td>
                                <td><b>Rp 700,000 (iPad 3 dan Seterusnya Flexicable dan Lcd Satu Set)</b></td>
                            </tr>
                            <tr>
                                <td>LCD Proximity Sensor</td>
                                <td><b id="CHANGE23">Rp 350,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE38">16 GB - Rp 4.100.000, 64 GB - Rp 5,050,000, 128 GB - Rp 7,050,000 | 4G ++ Rp 450,000</b></td>
                            </tr>
                            <tr>
                                <td>Mic</td>
                                <td><b id="CHANGE24">Rp 350,000</b></td>
                            </tr>
                            <tr>
                                <td>New Battery</td>
                                <td><b id="CHANGE25">Rp 875,000</b></td>
                            </tr>
                            <tr>
                                <td>Power on/off Button atau On/off flexicable</td>
                                <td><b id="CHANGE26">Rp 475,000</b></td>
                            </tr>
                            <tr>
                                <td>Replacement Midplate</td>
                                <td><b id="CHANGE27">-</b></td>
                            </tr>
                            <tr>
                                <td>Replacement Complete housing</td>
                                <td><b id="CHANGE28">10.5 - Rp 6.100.000 12.9 - Rp 7.100.000</b></td>
                            </tr>
                            <tr>
                                <td>Replacement Backcover (ukiran Serial Imei tambah Rp 50.000 5~7 hari kerja harus order dulu)</td>
                                <td><b id="CHANGE29">Rp 1.400.000</b></td>
                            </tr>
                            <tr>
                                <td>Sim Card Reader (tidak bisa Read atau Stuck)</td>
                                <td><b id="CHANGE30">Rp 500.000</b></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td><b id="CHANGE31">Rp 375,000</b></td>
                            </tr>
                            <tr>
                                <td>Touch Panel Digitizer</td>
                                <td><b id="CHANGE32">*Lcd dan Touch Panel Satu Set</b></td>
                            </tr>
                            <tr>
                                <td>Vibrator</td>
                                <td><b id="CHANGE33">Rp 400.000</b></td>
                            </tr>
                            <tr>
                                <td>Volume Button or Volume Flexicable</td>
                                <td><b id="CHANGE34">Rp 500.000</b></td>
                            </tr> 
                            <tr>
                                <td>Wifi Antena</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Harga Sparepart Belum termasuk Ongkos Pemasangan <b>Tanya</b></br>
                    *note: iPad 3G/4G sim module terlalu gampang rusak maka semua servis tiba2 bermasalah di 3G/4G kami tidak bertanggung jawab</br> 
                    *promo: Pengerjaan reparasi masalah di logicboard iPad secara cepat dan bisa ditunggu lalu kami utamakan dari barang servis yang lain akan ada penambahan - <b>Rp 300,000</b></br>
                    *note: <a href="https://zapplerepair.com/syarat-ketentuan-garansi-sukucadang-zapplerepair.html">Ketentuan Garansi Suku Cadang Zapplerepair Indonesia</a>
                </p>
            </div>

            <div class="list-title mt-5">
                <h6>Service iPad</h6>   
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan iPad di Semarang dan perbaikan perangkat lunak seperti pemulihan data iPad dan lain sebagainya.</p> 
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
                                <td><a href="https://zapplerepair.com/jasa-Recovery-data-pengembalian-dan-perbaikan-harddisk-hdd-Macbook-iMac-jakarta.html" target="_blank">Data Recovery iPad</a></td>
                                <td><b>Rp 1.500.000 - 3.000.000</b></td>
                            </tr>
                            <tr>
                                <td>Claim Original Garansi di Australia Hongkong dan Singapore (sudah bisa claim di Indonesia)</td>
                                <td><b>-</b></td>
                            </tr>
                            <tr>
                                <td>Game dan Lagu</td>
                                <td><b>Rp 200.000</b></td>
                            </tr>
                            <tr>
                                <td>Gevey Network Unlock</td>
                                <td><b id="CHANGE35">-</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Network Unlock ( Cpu Memory dan mabien)</td>
                                <td><b id="CHANGE36">-</b></td>
                            </tr>
                            <tr>
                                <td>Network Software Unlock (Clear Apple id lock)</td>
                                <td><b id="CHANGE37">-</b></td>
                            </tr>
    
                            <tr>
                                <td>Software Auto Restart</td>
                                <td><b>Rp 250,000</b></td>
                            </tr>
                            <tr>
                                <td>Software Errors Problem</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>Software Optimization</td>
                                <td><b>Rp 250.000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami menyediakan berbagai aksesoris untuk seri iPad seperti adapter, Apple Pen, dan lain sebagainya.</p>
                <div class="wrapper mb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Aksesoris iPad</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Apple Pen Stylus</td>
                                <td><b>Rp 1.250.000</b></td>
                            </tr>
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
                                <td><b>Rp 80.000</b></td>
                            </tr>
                            <tr>
                                <td>Sim Tray</td>
                                <td><b>iPad - Rp 75.000 iPad Air - Rp 150.000 iPad Mini - Rp 100.000 iPad Pro - Rp 250.000</b></td>
                            </tr>
                            <tr>
                                <td>Tempered Glass Screen Protector</td>
                                <td><b>iPad - Rp 150.000 iPad Air - Rp 200.000 iPad Mini - Rp 150.000 iPad Pro - Rp 250.000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Kami adalah pusat service iPad terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk semua versi iPad.
                       Jadi tunggu apalagi, jika mengalami masalah dengan iPad, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/ipadbloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-ipad.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/ipadIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>

</body>
</html>