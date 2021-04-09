<?php
require_once "zapple-sparepart/config.php"; 
// echo "<pre>";print_r($_POST); 
$sql3 = mysql_query("SELECT * from sparepart JOIN kategori USING(id_kategori) JOIN jenis USING(id_jenis) where id_jenis='".$_POST['id_jenis']."' and id_kategori='".$_POST['id_kategori']."'");
$rst5 = [];
while ($rst4 = mysql_fetch_array($sql3)) {
    array_push($rst5,$rst4);
}; 
?>

            <h4 class="text-center font-weight-bold mt-2 mb-3"><?= $rst5[0]['nama_kategori']?> Sparepart</h4>
                <div class="row">
                <?php foreach($rst5 as $rst3) {?>
                <a style="color:black" href="https://semarang.zapplerepair.com/detail-sparepart.php?id=<?=$rst3['id']?>&slug=<?=$rst3['slug']?>">
                  <div class="col-sm-3 mb-3">
                    <div class="card card-sparepart text-center pb-4" style="padding: 5px;">
                      <img src="zapple-sparepart/img/sparepart/<?= $rst3['gambar']?>" class="card-img-top" style="border: 1px solid black;" width="150" height="135">
                        <div class="card-body">
                        <h6><?= $rst3['nama']?></h6>
                        <br/>
                        <br/>
                        <hr>
                        <br/>
                        <h7><?= $rst3['harga']?></h7>
                        
                        </div>
                        <div class="card-footer">
                        <a href="https://wa.link/uffphh" target="_blank" ><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Buy</button></a>
                        </div>   
                    </div>
                  </div>
                  </a>
                  <?php } ?>                
                </div>


            
