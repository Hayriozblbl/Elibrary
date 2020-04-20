<?php 
include 'header.php';
include '../netting/baglan.php';

$makalesor=$db->prepare("SELECT * from makale_arsive where id=:id");
$makalesor->execute(array(
  'id' => $_GET['id']
));
$makalecek=$makalesor->fetch(PDO::FETCH_ASSOC);

?>
<head>  
  <script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Makale İşlemleri</h3>
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
              <h2>Makale Görüntüle <small>
                <?php 
                if ($_GET['durum']=='ok') {?> 

                  <b style="color:green;">Güncelleme başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                  <b style="color:red;">Güncelleme yapılamadı...</b>

                  <?php } ?></small> </h2>
                  <ul class="nav navbar-right panel_toolbox">
<div align="right" class="col-md-6">
                <a href="makale.php"><button  class="btn btn-warning "><i class="fa fa-undo" aria-hidden="true"></i> Geri Dön</button></a>
              </div>



                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  



                       <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dergi Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="makale_ad" value="<?php echo $makalecek['makale_ad']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  
                  
               
                
                  
                   

                    
                   
                   
                   
                   
                
          


                   <input type="hidden" name="id" value="<?php echo $icerikcek['id']; ?>">
       
   
                   <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                  <button type="submit" name="makaleduzenle" class="btn btn-primary">Kaydet</button>
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
