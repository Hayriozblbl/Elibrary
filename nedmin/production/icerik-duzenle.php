<?php 
include 'header.php';
include '../netting/baglan.php';

$iceriksor=$db->prepare("SELECT * from icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
  'icerik_id' => $_GET['icerik_id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);

?>
<head>  
  <script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>İçerik İşlemleri</h3>
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
              <h2>İçerik İşlemleri <small>
                <?php 
                if ($_GET['durum']=='ok') {?> 

                  <b style="color:green;">Güncelleme başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                  <b style="color:red;">Güncelleme yapılamadı...</b>

                  <?php } ?></small> </h2>
                  <ul class="nav navbar-right panel_toolbox">
<div align="right" class="col-md-6">
                <a href="icerik.php"><button  class="btn btn-warning "><i class="fa fa-undo" aria-hidden="true"></i> Geri Dön</button></a>
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
                      <img width="200" height="100" src="../../<?php echo $icerikcek['icerik_resimyol']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="file" id="first-name"  name="icerik_resimyol"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
<!--
                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Eklenme Tarihi<span class="required">*</span>
                    </label>

                    <div class="col-md-3">

                      <?php $zaman=explode(' ',$icerikcek['icerik_zaman']); ?>

                      <input type="date" id="first-name" required="required" value="<?php echo $zaman[0]; ?>" name="icerik_zaman" class="form-control col-md-7 col-xs-12">
                    </div>

                    <div class="col-md-2">
                      <input type="time" id="first-name"  required="required" value="<?php echo $zaman[1]; ?>" name="icerik_saat"  class="form-control col-md-7 col-xs-12">

                    </div>
                  </div> -->

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konferans Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="icerik_ad" value="<?php echo $icerikcek['icerik_ad']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konferans Tarih<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="col-md-3">
                          <?php $bastarih=explode(' ',$icerikcek['icerik_bastarih']); ?>
                        <input type="date" id="first-name" required="required" value="<?php echo $zaman[0]; ?>" name="icerik_bastarih" class="form-control col-md-7 col-xs-12"></div>

                        <div class="col-md-3">
    <?php $bastarih=explode(' ',$icerikcek['icerik_bittarih']); ?>
                          <input type="date" id="first-name" required="required" value="<?php echo $zaman[0]; ?>" name="icerik_bittarih" class="form-control col-md-7 col-xs-12"></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik <br>Konu Başlıkları <br>Tematik Alanlar <br>Değerlendirme Süreçleri <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor1" name="icerik_detay"><?php echo $icerikcek['icerik_detay']; ?></textarea>

                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Keyword<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name" required="required" name="icerik_keyword" value="<?php echo $icerikcek['icerik_keyword']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konferans Yeri(Conference Venue)<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor2" name="icerik_yer"><?php echo $icerikcek['icerik_yer']; ?></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Önemli Tarihler(Important Date)<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor3" name="icerik_otarih"><?php echo $icerikcek['icerik_otarih']; ?></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Komiteler(Committees)<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor4" name="icerik_komite"><?php echo $icerikcek['icerik_komite']; ?></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konular(Topics)<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor5" name="icerik_konular"><?php echo $icerikcek['icerik_konular']; ?></textarea>

                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Özel Bölümler(Special Sections)<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor6" name="icerik_ozel"><?php echo $icerikcek['icerik_ozel']; ?></textarea>

                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Süreç ve Yayınlar(Review and Publishing Proccess)<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor7" name="icerik_surec"><?php echo $icerikcek['icerik_surec']; ?></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Davetli Konuşmacılar<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor8" name="icerik_konusmacilar"><?php echo $icerikcek['icerik_konusmacilar']; ?></textarea>

                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Düzenleyen/Destekleyen<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor9" name="icerik_duzenleyen"><?php echo $icerikcek['icerik_duzenleyen']; ?></textarea>

                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Katılım/Kayıt Bilgisi<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor10" name="icerik_katilim"><?php echo $icerikcek['icerik_katilim']; ?></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durum<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                       <select id="heard" class="form-control" name="icerik_durum" required>

                         <?php 
                         if ($icerikcek['icerik_durum']==1) {?>

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

                   <input type="hidden" name="icerik_id" value="<?php echo $icerikcek['icerik_id']; ?>">
                   <input type="hidden" name="icerik_resimyol" value="<?php echo $icerikcek['icerik_resimyol']; ?>">

                   <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                    <button type="submit" name="icerikduzenle" class="btn btn-primary">Kaydet</button>
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


   CKEDITOR.replace( 'editor1''editor2''editor3''editor4''editor5''editor6''editor7''editor8''editor9''editor10',
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
