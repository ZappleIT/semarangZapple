<?php
require_once "../indonesia/zapple-blog/config/database.php";
$sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%mac pro%' OR tag LIKE '%apple servis%' ORDER BY created_at DESC LIMIT 9");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="Pusat Service Mac Pro di Semarang" />
    <meta name="keywords" content="Pusat Jasa Servis Reparasi Mac Pro di Semarang, Service Mac Pro Semarang, Sparepart Mac Pro Semarang, Mac Pro repair logicboard motherboard semarang, Express Jasa Panggilan Pengerjaan Mac Pro di Tempat, Mac Pro rusak mati total (matot) masuk air servis repair, service ganti Mac Pro Harddisk repair" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | Pusat Service Mac Pro di Semarang</title>

    
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
                    <img id="testStar" src="img/macpro/newMacpro.jpg" alt="Mac Pro" name="testStar">
                </div>
                <div class="col-md-8 detail">
                    <h5 class="title">Pusat Jasa Service Mac Pro Semarang</h5><br>

                    <p>Kami menerima perbaikan dan penggantian sparepart semua versi Mac Pro seperti Perbaikan Mac Pro yang mati total, Perbaikan Bios Password Mac Pro, Penggantian Harddsik atau Memory Mac Pro, Penggantian Power Supply Mac Pro, Perbaikan Logicboard Mac Pro dan lain sebagainya.
                        Kami juga menyediakan spare part lengkap dan original, yang didukung oleh staf ahli reparasi profesional.
                        Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT, yang menjadikan kami sebagai tempat service Mac Pro yang terbaik di Semarang.<br>
                        Untuk mengetahui lebih lanjut tentang harga perbaikan, silakan pilih model di bawah ini :</p>
                    <p>Selected Brand : <b>Apple</b> &nbsp; &nbsp; &nbsp;Selected Product: <b>Mac Pro</b></p>
                    <form action="#" method="post" id="menuForm" name="menuForm" enctype="application/x-www-form-urlencoded">
                        <label for="model">Select Model :</label>
                        <select id="select1" onchange="changeTest()" name="select1">
                            <option value="0" selected="selected">Mac Pro 6.1 A1481</option>
                            <option value="1">Mac Pro 1.1 MA356</option>
                            <option value="2">Mac Pro 3.1 MA970</option>
                            <option value="3">Mac Pro 4.1 MB871</option>
                            <option value="4">Mac Pro 5.1 MC560</option>
                            <option value="5">Mac Pro 5.1 MD770</option>
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
                <h6>Perbaikan Mac Pro</h6>
                    
                <p>Kami menyediakan layanan untuk semua perbaikan seri Mac Pro di Semarang, dan perbaikan perangkat keras lainnya, seperti Logicboard Mac Pro yang rusak dan lain sebagainya.</p> 
                    
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
                                <td><b id="CHANGE1">Rp 4,100,000</b></td>
                            </tr>
                            <tr>
                                <td>*Cannot detect Harddisk</td>
                                <td><b id="CHANGE2">Rp 5,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Hardware Auto Restart</td>
                                <td><b id="CHANGE3">Rp 4,100,000</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard Heating Hot</td>
                                <td><b id="CHANGE4">Rp 4,100,000</b></td>
                            </tr>
                            <tr>
                                <td>No Power</td>
                                <td><b id="CHANGE5">Rp 4,100,000</b></td>
                            </tr>
                            <tr>
                                <td>Power On No Display (ganti Vga Graphic chipset)</td>
                                <td><b id="CHANGE6">Rp 4,100,000</b></td>
                            </tr>
                            <tr>
                                <td>System Stuck at Apple Logo</td>
                                <td><b id="CHANGE7">Rp 4,100,000</b></td>
                            </tr>
                            <tr>
                                <td>System Slow</td>
                                <td><b id="CHANGE8">Rp 5,800,000</b></td>
                            </tr>
                            <tr>
                                <td>Vga Radeon Nvidia Problem</td>
                                <td><b id="CHANGE9">Rp 6,100,000</b></td>
                            </tr>
                            <tr>
                                <td>Waterdamage</td>
                                <td><b id="CHANGE10">Rp 200,000 ++</b></td>
                            </tr> 
                            <tr>
                                <td>*Cannot use Wifi (bukan Airport Error)</td>
                                <td><b id="CHANGE11">Rp 3,000,000</b></td>
                            </tr>    
                        </tbody>  
                    </table>
                </div>
                <p class="note">
                    *note: Waterdamage (Kemasukan air) Cleaning Service - <b>Rp 200,000</b> Level Medium/High - <b>Rp 500,000</b></br>
                    *note: Biaya pemasangan untuk sparepart yang dibawa sendiri oleh customer dikenakan biaya double</br>
                    *note: Mac Pro yg Masuk Mati, Uang Pengecekan - <b>Rp 100,000</b> Mac Pro yang Masuk Mati apabila sudah dinyalakan tanpa ada kerusakan yang lain akan dikenakan biaya power ic.
                </p>
            </div>
            
            <div class="list-title mt-5">
                <h6>Ganti Sparepart Mac Pro</h6>
                    
                <p>Kami mengganti sparepart / melakukan upgrade untuk berbagai model Mac Pro Series, dan perbaikan perangkat keras lainnya seperti Penggantian CPU Mac Pro, kerusakan Power Supply Mac Pro, Logicboard Mac Pro rusak, dan lain sebagainya.</p> 
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
                                <td>CPU</td>
                                <td><b id="CHANGE12">Rp 14,400,000</b></td>
                            </tr>
                            <tr>
                                <td>Full Casing</td>
                                <td><b id="CHANGE13">Rp 4,200,000</b></td>
                            </tr>
                            <tr>
                                <td>Fan</td>
                                <td><b id="CHANGE14">Rp 900,000</b></td>
                            </tr>
                            <tr>
                                <td>Hdd with OS</td>
                                <td><b id="CHANGE15">256GB - Rp 3,500,000 512GB - Rp 5,500,000 1TERA - TANYA</b></td>
                            </tr>
                            <tr>
                                <td>Logicboard</td>
                                <td><b id="CHANGE16">Rp 18,000,000</b></td>
                            </tr>
                            <tr>
                                <td>Powersupply</td>
                                <td><b id="CHANGE17">Rp 5,500,000</b></td>
                            </tr>
                            <tr>
                                <td>Memory Upgrade</td>
                                <td><b id="CHANGE18">4GB - Rp 1,400,000 8GB - Rp 2,200,000</b></td>
                            </tr>
                            <tr>
                                <td>Memory Slot (Riser Mac Pro sering rusak)</td>
                                <td><b id="CHANGE19">-</b></td>
                            </tr>
                            <tr>
                                <td>Sata Slot</td>
                                <td><b id="CHANGE20">Rp 800,000</b></td>
                            </tr>
                            <tr>
                                <td>Super Drive</td>
                                <td><b id="CHANGE21">-</b></td>
                            </tr>
                            <tr>
                                <td>Vga Display</td>
                                <td><b id="CHANGE22">Rp 9,900,000</b></td>
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
                <h6>Service Mac Pro</h6>
                    
                <p>Kami menyediakan layanan dukungan teknis untuk perbaikan Mac Pro di Semarang dan perbaikan perangkat lunak seperti pemulihan data Mac Pro dan lain sebagainya.</p> 
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
                <p>Kami adalah pusat service Mac Pro terbaik di Semarang yang melayani perbaikan dan penggantian sparepart untuk semua versi Mac Pro. 
                    Jadi tunggu apalagi, jika mengalami masalah dengan Mac Pro, atau ingin membeli sparepart segera hubungi kami.</p>
            </div>
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-sm-10">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="https://indonesia.zapplerepair.com/macprobloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <?php while ($rst = $sql->fetch_assoc()) { ?>
                    <div class="col-sm-4 content-blog">
                        <a href="https://indonesia.zapplerepair.com/detail-list-macpro.php?id=<?=$rst['id']?>&slug=<?=$rst['slug']?>">
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
    <script src="js/macproIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
</body>
</html>