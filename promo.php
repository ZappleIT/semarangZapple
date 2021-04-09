<?php
require_once "zapple-sparepart/config.php";
$sql = mysql_query("SELECT * FROM sparepart WHERE promo='Ya' ORDER BY id DESC LIMIT 2");
?>

<div class="promotion mt-5">
                <div class="promotion-title "><h6>Promotion</h6></div>
                <div class="promo-promo mt-3">
                    <div class="card card-promo text-center" style="border-radius:5px;margin-bottom:10px;">
                        <a href="https://zapplerepair.com/zapplerepair-chinese-new-year-special-promotion.html">
                            <img src="img/imlek.jpg" style="width:100%; margin-left:auto" alt="promosi imlek 2021 zapplerepair">
                            <div class="card-body card-text">
                                <p>Selamat Hari Raya Imlek 2021 tahun kerbau logam menambah semangat kita dalam menebar kebaikan di tahun 2021 ini, begitu pula kami Zapplerepair Indonesia. Demi merayakan moment kebahagian ini kami membuka promosi <strong style="font-family:sans-serif;font-weight: 900;">Gratis biaya Pickup Unit berlaku Area Jakarta</strong> dengan tetap memperhatikan <strong style="font-family:sans-serif;font-weight: 900;"> standar protokol kesehatan COVID-19</strong>.</p>
                            </div>   
                        </a>
                    </div>
                    
                    <div class="card card-promo text-center">
                        <a href="antar-jemput-macbook-ipad-iphone-ipod-repair-home-service.html">
                            <img src="img/index/servisonsite.jpg" style="width:100%; margin-left:auto" alt="express onsite iMac repair service">
                            <div class="card-body card-text">
                                <p>Kami memberikan jasa service pengerjaan di tempat untuk wilayah Semarang dan sekitarnya dengan biaya yang terjangkau.</p>
                            </div>   
                        </a>
                    </div>
                    
                    <!--<?php while ($rst = mysql_fetch_array($sql)) { ?> -->
                    <!--<div class="card card-promo text-center mt-3" style="padding: 5px;">-->
                    <!--    <img src="zapple-sparepart/img/sparepart/<?= $rst['gambar']?>" class="card-img-top" alt="<?= $rst['nama']?>" width="150" height="170" style="border: 1px solid black;"></a>-->
                    <!--    <div class="card-body">-->
                    <!--        <h6><?= $rst['nama']?></h6>-->
                    <!--        <hr>-->
                    <!--        <h7><?=$rst['harga']?></h7>-->
                    <!--        <?= $rst['keterangan']?>-->
                    <!--    </div>-->
                    <!--    <div class="card-footer">-->
                    <!--        <a href="https://wa.link/uffphh" target="_blank" ><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Beli</button></a>-->
                    <!--    </div>   -->
                    <!--</div>-->
                    <!--<?php }?>-->
                </div>  
            </div>  
        </aside>
    </main>
    </div><br>