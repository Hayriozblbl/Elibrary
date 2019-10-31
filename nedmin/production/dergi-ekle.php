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




                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="file" id="first-name"     name="dergi_resimyol"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Eklenme Tarihi  
                    </label>
                   
                      <div class="col-md-3">

                      <input type="date" id="first-name"     value="<?php echo date('Y-m-d') ?>" name="dergi_tarih" class="form-control col-md-7 col-xs-12">
                      </div>

                      <div class="col-md-2">
                        <input type="time" id="first-name"      value="<?php echo date("H:i:s"); ?>" name="dergi_saat"  class="form-control col-md-7 col-xs-12">
                    
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dergi Ad  
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name"     name="dergi_ad" placeholder="Dergi adını giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                 

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dergi İçerik
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <textarea  class="ckeditor" id="editor1" name="dergi_detay"></textarea>

                    </div>
                  </div>

                 

                 
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yayımlayan  
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name"     name="dergi_yayinci" 
                       class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">ISSN  
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name"     name="dergi_issn"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">E-ISSN  
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name"     name="dergi_eissn"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dergi Başlangıç Tarihi  
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name"     name="dergi_baslangic"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Periyot  
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name"     name="dergi_periyot"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Editör Kurulu  
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor2" name="dergi_editorkurul"></textarea>

                  </div>
                </div>
                 <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yazım Kuralları  
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor3" name="dergi_yazimkurallari"></textarea>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Amaç ve Kapsam  
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor4" name="dergi_amackapsam"></textarea>

                  </div>
                </div>
                                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yayın İlkeleri  
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor5" name="dergi_yayinilkeleri"></textarea>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yayın İlkeleri  
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor6" name="dergi_dizinler"></textarea>

                  </div>
                </div>
                   <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İletişim  
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  
                    <textarea  class="ckeditor" id="editor6" name="dergi_iletisim"></textarea>

                  </div>
                </div>





                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Durum  
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                   <select id="heard" class="form-control" name="dergi_durum" required>
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>

                  </select>
                </div>
              </div>

              <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                <button type="submit" name="dergikaydet" class="btn btn-primary">Kaydet</button>
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
