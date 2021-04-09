<?php 
                    require_once "../indonesia/zapple-blog/config/database_smg.php";
                    $id = $_GET['id'];
                    $sql2 = $mysqli2->query("SELECT * FROM sparepart WHERE id=$id");
                    while ($k = $sql2->fetch_assoc()) { 
                    ?>
<!doctype html>
<html lang="en">
  <head>
      <input type="hidden" id="idsparepart" value="<?= $_GET['id']?>">
    <!-- Global site tag (gtag.js) - Google Ads: 1000187271 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1000187271">
    </script> 
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-1000187271');
    </script>
    <!-- Event snippet for Purchase conversion page --> 
    <script> 
    var id_sp = document.getElementById("idsparepart");
    var id = "sparepart-smg-"+ id_sp +"-"+Math.random().toString(16).slice(2)
    gtag('event', 'conversion', { 'send_to': 'AW-1000187271/wjCCCI6M_vQBEIfL9twD', 'transaction_id': '<%= id %>' }); 
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow" />
    <meta name="description" content="<?= $k['description']?>" />
    <meta name="keywords" content="<?= $k['keyword']?>" />
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=354175128014611&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    
    <link rel="shortcut icon" href="img/logo.ico">

    <title>Zapplerepair | <?= $k['description']?></title>

    
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
                    <li class="nav-item">
                      <a class="nav-link" href="surfacerepair">Service Surface</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="antar-jemput-macbook-ipad-iphone-ipod-repair-home-service.html">Service di Tempat</a>
                    </li>
                    <li class="nav-item active">
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
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img title="click to view detail" class="d-block" src="zapple-sparepart/img/sparepart/<?=$k['gambar']?>" alt="<?= $k['alt_gambar']?>">
                        </div>
                        <div class="carousel-item">
                          <img title="click to view detail" class="d-block" src="zapple-sparepart/img/belakang/<?=$k['belakang']?>" alt="<?= $k['alt_belakang']?>">
                        </div>
                        <div class="carousel-item">
                          <img title="click to view detail" class="d-block" src="zapple-sparepart/img/samping/<?=$k['samping']?>" alt="<?= $k['alt_samping']?>">
                        </div>
                        <div class="carousel-item">
                          <img title="click to view detail" class="d-block" src="zapple-sparepart/img/promo/<?=$k['promosi']?>" alt="<?= $k['alt_promosi']?>">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-5 detail">
                    <?php
                    $id_jenis = $k['id_jenis'];
                    $id_kategori = $k['id_kategori'];
                    
                    $sql3   = $mysqli2->query("SELECT * FROM jenis WHERE id_jenis = $id_jenis");
                    $a      = $sql3->fetch_assoc();
                    $jenis = $a['nama_jenis'];
                    
                    $sql4   = $mysqli2->query("SELECT * FROM kategori WHERE id_kategori = $id_kategori");
                    $b      = $sql4->fetch_assoc();
                    $kategori = $b['nama_kategori'];
                    
                    ?>
                    <h4 class="title"><?= $k['judul']?></h4><br>
                    <div style="position:relative;width:100%;height:auto;overflow:hidden;padding-top:56%">
                    <iframe style="position:absolute;top:0;right:0;left:0;bottom:0;" width="100%" height="100%" src="<?= $k['youtube']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <p style="border-bottom: 1px solid red;padding-bottom:20px;padding-top:20px;">
                        <b>Kondisi&nbsp;&nbsp;:</b> <?= $k['kondisi']?><br/>
                        <b>Berat&nbsp;&nbsp;: </b><?= $k['berat']?> Gram<br/>
                        <b>Kategori&nbsp;&nbsp;: </b> <?= $kategori ?><br/>
                        <b>Etalase&nbsp;&nbsp;: </b><?= $k['etalase'] ?><br/>
                        <b><?= $k['nama']?></b>
                    </p>
                    
                    <h5 class="title">Deskripsi</h5><br>
                    <?= $k['keterangan']?>
                    
                    <p style="border-bottom: 1px solid red;padding-bottom:20px;"></p>
                    <h5 class="title">Garansi</h5><br>
                    Garansi

                    Kami menerapkan garansi Original <?= $k['garansi']?> hari. 
                    Garansi berlaku apabila Anda :
                    <br/>
                    <a href="https://www.google.com/maps/place/Zapplerepair+Indonesia/@-6.1338896,106.7908129,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6a1d8b2100f357:0x44cfcc424b986e0!8m2!3d-6.1338896!4d106.7930016" target="_blank">Customer memberikan Review Google (bintang 5)</a> dan memilih salah satu sosial media :
                    <br/><a href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttp%253A%252F%252Findonesia.zapplerepair.com%26ret%3Dlogin&display=popup" target="_blank">Join Facebook</a> 
                    <br/><a href="https://instagram.com/zapplerepair" target="_blank">Follow Instagram</a> 
                    <br/><a target="_blank" href="https://www.linkedin.com/company/zapplerepair-indonesia">Follow Linkedin</a>
                    <br/><a href="https://twitter.com/Zapplerepair"> Follow Twitter</a> 
                    <br/><a href="https://www.tiktok.com/@zapplerepair_official?lang=en"> Follow TikTok</a>
                    <br/>
                    Menunjukkan bukti invoice pembelian yang sah
                    Dalam masa sebelum 8 bulan habis No Human Error, Bukan karena terbentur/benturan, Tidak ada Komponen yang Terbakar, Tidak ada pecah/retak, Tidak terkena cairan, Tidak ada cacat fisik barang.
                    <br/>
                    Silakan claim garansi dengan hubungi nomor kami di cabang terdekat
                    <br/>
                    Baca Juga : <a href="https://zapplerepair.com/syarat-ketentuan-garansi-sukucadang-zapplerepair.html"><strong style="font-family:sans-serif;font-weight: 900;">SK dan Garansi di Zapplerepair</strong></a>
                    </p>
                    
                    <h5 class="title">Pengiriman & Pemasangan & Pengerjaan di Tempat</h5><br>
                    <p style="border-bottom: 1px solid red;padding-bottom:20px;">
                    Kami melayani pengiriman dengan Ekspedisi JNE/GoJek/Grab Express hanya untuk area Jawa Tengah dan DIY. Harga diatas tidak termasuk harga ongkos pasang sebesar Rp 300,000 apabila Anda memilih untuk onsite pengerjaan penggantian di rumah ataupun di kantor ada biaya penambahan RP 100,000 hanya untuk area kota Semarang.<br/>
                    Baca juga : <a href="https://zapplerepair.com/antar-jemput-macbook-ipad-iphone-ipod-repair-home-service.html"> <strong style="font-family:sans-serif;font-weight: 900;">Jasa Onsite/Pengerjaan Ditempat</strong></a>
                    </p>
                    
                    <p>Selected Category : <code><?= $kategori ?></code> &nbsp; &nbsp; &nbsp;Selected Type: <code><?= $jenis?></code></p>
                    
                </div>
                <div class="col-md-3 beli">
                    <div class="promo-promo mt-3">
                        <div class="card card-promo text-center">
                            <div class="card-body card-text text-center">
                                <h5>Harga</h5>
                                <hr/>
                                <h6 style="font-weight:bold;" class="text-center">
                                    <i class="fa fa-money"></i><?= $k['harga'] ?>
                                </h6>
                                <hr/>
                                   
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <center>
                                  <a href="https://api.whatsapp.com/send?phone=6287788855868&text=Hi+Zapplerepair.+Saya+ingin+tanya-tanya+<?= $k['nama']?>+di+website+semarang.zapplerepair.com"><button type="button" class="btn btn-warning" style="width:100px;color:white"><i class="fa fa-question"></i> Tanya</button>
                                  </a>
                                  <a href="https://api.whatsapp.com/send?phone=6287788855868&text=Hi+Zapplerepair.+Saya+ingin+beli+<?= $k['nama']?>+sesuai+harga+di+website+semarang.zapplerepair.com"><button type="button" class="btn btn-success" style="width:100px"><i class="fa fa-shopping-cart"></i>Beli</button>
                                  </a>
                                 </center>
                                </div>
                                <hr/>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <button type="button" onclick="location.replace('https://www.zapplerepair.com/tradein-jualbeli-pricelist-iphone-ipad-macbook-notebook.html')" class="btn btn-danger"> Jual</button>
                                  <button onclick="location.replace('http://a1312.buron.my.id')" type="button" class="btn btn-danger"> Upgrade</button>
                                  <button onclick="CopyLink()" type="button" class="btn btn-danger">Share</button>
                                </div>
                            </div>  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <div class="container">
    <main>
        <div id="content">
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
                <?php 
                require_once "../indonesia/zapple-blog/config/database.php";
                $sql = $mysqli->query("SELECT * FROM artikel WHERE tag LIKE '%Apple%' OR tag LIKE '%Baterai%' ORDER BY created_at DESC LIMIT 6");
                while ($rst = $sql->fetch_assoc()) { ?>
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
            <div class="list-title mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Diskusi</h6>  
                        <div class="fb-comments" data-lazy="true" data-href="http://semarang.zapplerepair.com/detail-sparepart?id=<?= $_GET['id'];?>&slug=<?= $_GET['slug'];?>" data-mobile="true" data-numposts="10" data-width="600" data-colorscheme="light"></div>
                    </div>
                </div> 
            </div>  
        </div><br>
        <aside id="sidebar" >
            <?php
                include 'promo.php';
                echo '<hr/>';
                include 'outlet.php';
                include 'footer.php';
            ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ipadIndo.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/addclass.js"></script>
    <script src="assets/image-viewer-ezoom/ezoom.js"></script>
    <script>
        ezoom.onInit($('.d-block'), {
        });

        $('#carouselExampleSlidesOnly').carousel({
          interval: 2000
        })
    </script>
    <script>
        function copyTextToClipboard(text) {
              var textArea = document.createElement("textarea");
            
              //
              // *** This styling is an extra step which is likely not required. ***
              //
              // Why is it here? To ensure:
              // 1. the element is able to have focus and selection.
              // 2. if element was to flash render it has minimal visual impact.
              // 3. less flakyness with selection and copying which **might** occur if
              //    the textarea element is not visible.
              //
              // The likelihood is the element won't even render, not even a flash,
              // so some of these are just precautions. However in IE the element
              // is visible whilst the popup box asking the user for permission for
              // the web page to copy to the clipboard.
              //
            
              // Place in top-left corner of screen regardless of scroll position.
              textArea.style.position = 'fixed';
              textArea.style.top = 0;
              textArea.style.left = 0;
            
              // Ensure it has a small width and height. Setting to 1px / 1em
              // doesn't work as this gives a negative w/h on some browsers.
              textArea.style.width = '2em';
              textArea.style.height = '2em';
            
              // We don't need padding, reducing the size if it does flash render.
              textArea.style.padding = 0;
            
              // Clean up any borders.
              textArea.style.border = 'none';
              textArea.style.outline = 'none';
              textArea.style.boxShadow = 'none';
            
              // Avoid flash of white box if rendered for any reason.
              textArea.style.background = 'transparent';
            
            
              textArea.value = text;
            
              document.body.appendChild(textArea);
            
              textArea.select();
            
              try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successful' : 'unsuccessful';
                console.log('Copying text command was ' + msg);
              } catch (err) {
                console.log('Oops, unable to copy');
              }
            
              document.body.removeChild(textArea);
            }
            
            function CopyLink() {
              copyTextToClipboard(location.href);
              alert('Link Copied Succesfully')
            }
    </script>

</body>
</html>