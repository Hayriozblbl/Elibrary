<?php 
include 'header.php';
include '../netting/baglan.php';

$dergisor=$db->prepare("SELECT * from dergi where dergi_id=:dergi_id");
$dergisor->execute(array(
  'dergi_id' => $_GET['dergi_id']
));
$dergicek=$dergisor->fetch(PDO::FETCH_ASSOC);

?>
<head>  
  <script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Dergi İşlemleri</h3>
      </div>

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
<div align="right" class="col-md-6">
                <a href="dergi-icerik.php"><button  class="btn btn-warning "><i class="fa fa-undo" aria-hidden="true"></i> Geri Dön</button></a>
              </div>



                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                   <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yüklü Resim<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <img width="200" height="100" src="../../<?php echo $dergicek['dergi_resimyol']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="file" id="first-name"  name="dergi_resimyol"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dergi Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="dergi_ad" value="<?php echo $dergicek['dergi_ad']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                 
                     <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dergi İçerik<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor1" name="dergi_detay"><?php echo $dergicek['dergi_detay']; ?></textarea>

                      </div>
                    </div>

                      <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yayımlayan<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="dergi_yayinci" value="<?php echo $dergicek['dergi_yayinci']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">ISSN<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="dergi_issn" value="<?php echo $dergicek['dergi_issn']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">E-ISSN<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="dergi_eissn" value="<?php echo $dergicek['dergi_eissn']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                     <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dergi Başlangıç Tarihi<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="dergi_baslangic" value="<?php echo $dergicek['dergi_baslangic']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                     <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Periyot<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="dergi_periyot" value="<?php echo $dergicek['dergi_periyot']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Editör Kurul<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor2" name="dergi_editorkurul"><?php echo $dergicek['dergi_editorkurul']; ?></textarea>

                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yazım Kuralları<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor3" name="dergi_yazimkurallari"><?php echo $dergicek['dergi_yazimkurallari']; ?></textarea>

                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Amaç ve Kapsam<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor4" name="dergi_amackapsam"><?php echo $dergicek['dergi_amackapsam']; ?></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yayın İlkeleri<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor5" name="dergi_yayinilkeleri"><?php echo $dergicek['dergi_yayinilkeleri']; ?></textarea>

                      </div>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dizinler<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor6" name="dergi_dizinler"><?php echo $dergicek['dergi_dizinler']; ?></textarea>

                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İletişim<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor6" name="dergi_iletisim"><?php echo $dergicek['dergi_iletisim']; ?></textarea>

                      </div>
                    </div>

                   
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durum<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                       <select id="heard" class="form-control" name="dergi_durum" required>

                         <?php 
                         if ($dergicek['dergi_durum']==1) {?>

                           <option value="1">Aktif</option>
                           <option value="0">Pasif</option>

                           <?php

                         } else {?>
                           <option value="0">Pasif</option>
                           <option value="1">Aktif</option>


                         <?php }
                         ?>


                       </select>
                     </div>
                   </div>

                   <input type="hidden" name="dergi_id" value="<?php echo $dergicek['dergi_id']; ?>">
                   <input type="hidden" name="dergi_resimyol" value="<?php echo $dergicek['dergi_resimyol']; ?>">

                   <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                    <button type="submit" name="dergiduzenle" class="btn btn-primary">Kaydet</button>
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

  <script type="text/javascript">


   CKEDITOR.replace( 'editor1''editor2''editor3''editor4''editor5''editor6',
   {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    forcePasteAsPlainText: true
  } 
  );
</script>


<?php include 'footer.php'; ?>
