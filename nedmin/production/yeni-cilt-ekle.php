<?php 
include 'header.php';
include '../netting/baglan.php';

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Dergi İşlemleri</h3>
      </div>

    <!--  <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ara!</button>
            </span>
          </div>
        </div>
      </div>-->
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Dergi İşlemleri <small>
                <?php 
                if ($_GET['durum']=='ok') {?> 
                
                <b style="color:green;">Güncelleme başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                <b style="color:red;">Güncelleme yapılamadı...</b>

                <?php } ?></small> </h2>
                <ul class="nav navbar-right panel_toolbox">


 <?php
$dergi_id = $_GET["dergi_id"];
// echo $dergi_id ;
?>


                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                  <div class="form-group">
                 
                      <input type="text" id="dergi_id"  value="<?php echo $dergi_id ;?>"   name="dergi_id"  class="form-control col-md-7 col-xs-12">
                  
                  </div>

                   <div class="form-group">
                  
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="dergi_yil"     name="dergi_yil" placeholder="Dergi dergi_yil giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="dergi_cilt"     name="dergi_cilt" placeholder="Dergi dergi_cilt giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="dergi_sayi"     name="dergi_sayi" placeholder="Dergi dergi_sayi giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  


               

              <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                <button type="submit" name="yeniciltdergikaydet" class="btn btn-primary">Kaydet</button>
              </div>

            </form>



          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<!-- /page content -->



<?php include 'footer.php'; ?>
