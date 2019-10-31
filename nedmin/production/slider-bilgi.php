<?php 
include 'header.php';
include '../netting/baglan.php';
$sliderbilgisor=$db->prepare("select * from slider_bilgi where slider_bilgi_id=?");
$sliderbilgisor->execute(array(0));
$sliderbilgicek=$sliderbilgisor->fetch(PDO::FETCH_ASSOC);

?>

<head>
  <script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Slider Bilgi</h3>
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
              <h2>Slider Düzenleme <small>
                   <?php 
                if ($_GET['durum']=='ok') {?> 
                
                <b style="color:green;">Güncelleme başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                <b style="color:red;">Güncelleme yapılamadı...</b>

                <?php } ?></small> </h2>
                <ul class="nav navbar-right panel_toolbox">




                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ana Başlık<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="slider_title" value="<?php echo 
                      $sliderbilgicek['slider_title']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                 

            

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Başlık<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="first-name" required="required" name="slider_baslik" value="<?php echo $sliderbilgicek['slider_baslik']; ?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>



                    <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Alt Başlık <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="first-name" required="required" name="slider_alt_title" value="<?php echo 
                    $sliderbilgicek['slider_alt_title']; ?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

             
                <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" name="sliderbilgikaydet" class="btn btn-primary">Güncelle</button>
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
