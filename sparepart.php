<?php
require_once "zapple-sparepart/config.php";
?>
<!-- SELECT * from sparepart JOIN kategori USING(id_kategori) JOIN jenis USING(id_jenis) -->
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

    <title>Zapplerepair | Pusat Penjualan Sparepart Apple dan Surface di Semarang</title>

    
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
    <section id="box-top">
        <div class="container">
            <div class="row">
              <div class="col-sm-2 mb-3">
                <div class="list-group category w-100">
                  <a href="#" class="list-group-item" style="background:#DC483A"><strong><i class="fa fa-list"></i>KATEGORI</strong></a>
                    <?php 
                      $sql = mysql_query("SELECT * FROM kategori");
                      if ($sql === FALSE) {
                            die(mysql_error());
                        }
                      while ($rst = mysql_fetch_array($sql)) { ?>
                      	<a href="#" class="list-group-item dropdown-btn"><i class="fa fa-angle-double-right"></i><?= $rst['nama_kategori']?><i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-container">
                              <?php 
                              $sql2 = mysql_query("SELECT DISTINCT a.id_jenis, b.nama_jenis FROM sparepart a left join jenis b on a.id_jenis = b.id_jenis 
                              WHERE a.id_kategori = '".$rst['id_kategori']."' GROUP BY b.nama_jenis");
                              while ($rst2 = mysql_fetch_array($sql2)) { ?>
                                <a onclick="lihatDetail(<?= $rst2['id_jenis']?>, <?= $rst['id_kategori']?>)"><i class="fa fa-angle-right"></i><?= $rst2['nama_jenis']?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
              </div>
              <div class="col-sm-10 sparepart">
                  <img src="img/index/iphone.jpg" class="card-img-top" alt="Pusat Servis iPhone dan Apple" id="gifloading">
              </div>
            </div>
        </div>
    </section>
    
    <?php
    include 'footer.php';
    ?>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- Button Back to Top -->
<script>
  $(document).ready(function() {
  $(window).scroll(function() {
  if ($(this).scrollTop() > 20) {
  $('#toTopBtn').fadeIn();
  } else {
  $('#toTopBtn').fadeOut();
  }
  });

  $('#toTopBtn').click(function() {
  $("html, body").animate({
  scrollTop: 0
  }, 1000);
  return false;
  });
  });
</script>
<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  // this.classList.toggle("aktif");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
function lihatDetail(th, th2){
  var tampil = $('div.sparepart');
  $('#gifloading').remove();
  tampil.html('<img id="gif" src="img/giphy.gif" style="width:300px">')
  var id_jenis = th;
  var id_kategori = th2;
  

            $.ajax({	
                    type: "POST",	
                    url: "controller.php",	
                    data:{	
                      id_jenis:id_jenis,
                      id_kategori:id_kategori
                    },	
                    success: function(response) {	
                        $("#gif").hide();
                      // Swal.fire({	
                      //               type: 'success',	
                      //               title: 'Data ditemukan!',	
                      //               showConfirmButton: true,	
                      //                 })	
                      tampil.html(response);	
                    }	
                })

}
</script>
</body>
</html>