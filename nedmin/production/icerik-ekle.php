<?php 
include 'header.php';
include '../netting/baglan.php';

?>

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




                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="file" id="first-name" required="required" name="icerik_resimyol"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Eklenme Tarihi<span class="required">*</span>
                    </label>
                   
                      <div class="col-md-3">

                      <input type="date" id="first-name" required="required" value="<?php echo date('Y-m-d') ?>" name="icerik_tarih" class="form-control col-md-7 col-xs-12">
                      </div>

                      <div class="col-md-2">
                        <input type="time" id="first-name"  required="required" value="<?php echo date("H:i:s"); ?>" name="icerik_saat"  class="form-control col-md-7 col-xs-12">
                    
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konferans Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="icerik_ad" placeholder="konferans adını giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                     <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konferans Tarih<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="date" id="first-name" required="required" value="<?php echo $zaman[0]; ?>" name="icerik_bastarih" class="form-control col-md-7 col-xs-12">
                         <input type="date" id="first-name" required="required" value="<?php echo $zaman[0]; ?>" name="icerik_bittarih" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <textarea  class="ckeditor" id="editor1" name="icerik_detay"></textarea>

                    </div>
                  </div>

                 

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Keyword<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="icerik_keyword" placeholder="İçerik anahtar kelime giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konferans Yeri(Conference Venue)<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor2" name="icerik_yer"></textarea>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Önemli Tarihler(Important Date)<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor6" name="icerik_otarih"></textarea>

                  </div>
                </div>
                 <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Komiteler(Committees)<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor7" name="icerik_komite"></textarea>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Konular(Topics)<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor8" name="icerik_konular"></textarea>

                  </div>
                </div>
                                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Özel Bölümler(Special Sections)<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor9" name="icerik_ozel"></textarea>

                  </div>
                </div>
                   <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Süreç ve Yayınlar(Review and Publishing Proccess)<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor10" name="icerik_surec"></textarea>

                  </div>
                </div>



                  <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Davetli Konuşmacılar<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor3" name="icerik_konusmacilar"></textarea>

                  </div>
                </div>

                   <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Düzenleyen/Destekleyen<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor5" name="icerik_duzenleyen"></textarea>

                  </div>
                </div>

                     <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Katılım/Kayıt Bilgisi<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor4" name="icerik_katilim"></textarea>

                  </div>
                </div>
                  <!--  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Mail Adresi<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="icerik_mail" placeholder="İletişim için mail adresi giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div> -->




                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durum<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                   <select id="heard" class="form-control" name="icerik_durum" required>
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>

                  </select>
                </div>
              </div>

              <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                <button type="submit" name="icerikkaydet" class="btn btn-primary">Kaydet</button>
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
