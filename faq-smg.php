<?php
require_once "../indonesia/zapple-blog/config/database.php";
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
            <form action="">
                <div class="form-group">
                    <input class="form-input w-100 p-2 rounded-0 border" type="text" placeholder="Cari keyword..." onkeyup="searchArticle(event)" />
                </div>
            </form>
    
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th style="width: 2%;">No</th>
                            <th style="width: 30%;">Keyword</th>
                            <th>Judul Artikel (Link)</th>
                            <th style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="list_article">
                        <?php
                        $artikel = $mysqli->query("SELECT * FROM artikel");
                        $num = 1;
                        ?>
    
                        <?php while ($row = $artikel->fetch_assoc()) : ?>
                            <?php
                            $url = "http://indonesia.zapplerepair.com/detail-list-ipad.php" . "?id={$row['id']}&slug=" . $row['slug'];
                            $textCopy = "({$row['judul']}) ({$url})";
                            ?>
                            <tr>
                                <td class="text-center"><?= $num++ ?></td>
                                <td><?= $row['keyword']; ?></td>
                                <td id="copy<?= $row['id'] ?>">
                                    <?= $row['judul']; ?> <br /> (<?= $url ?>)
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm bg-danger text-white btnCopy" data-clipboard="copy<?= $row['id'] ?>" onclick="copyText(event)">
                                        <i class="fa fa-clipboard"></i>
                                        Copy Link
                                    </button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
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
    function copyText(e) {
        var text = document.getElementById(e.target.dataset.clipboard);
        var selection = window.getSelection();
        var range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
        //add to clipboard.
        document.execCommand('copy');
    }

    function searchArticle(e) {
        let input = e.target.value,
            search = input.toUpperCase(),
            articleList = document.getElementById('list_article'),
            article = articleList.getElementsByTagName('tr');

        for (let i = 0; i < article.length; i++) {
            let keyword = article[i].getElementsByTagName('td')[1];
            let txtVal = keyword.textContent || keyword.innerText;

            if (txtVal.toUpperCase().indexOf(search) > -1) {
                article[i].style.display = "";
            } else {
                article[i].style.display = "none";
            }

        }

        console.log(search);

    }
</script>

</body>
</html>