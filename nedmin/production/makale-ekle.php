<?php 
include 'header.php';
include '../netting/baglan.php';

?>
<head>  
 
  <!-- Select2 -->
  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">

</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Menü İşlemleri</h3>
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
              <h2>Menü İşlemleri <small>
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

                <form action="../netting/islem.php" method="POST"  enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2">Dergi Adi</label>
                    <div class="col-md-4">
                      <select  class="select2_single form-control" required="" id="dergi_id" name="dergi_id" tabindex="-1">
                        <option> </option>

                        <option value="0"> Dergi Adi</option>

                        <?php 
                        $menusor=$db->prepare("select * from dergi");
                        $menusor->execute();

                        while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <option value="<?php echo $menucek['dergi_id']; ?>"><?php echo $menucek['dergi_ad']; ?></option>


                          <?php } ?>




                        </select>
                           <select class="select2_single form-control" required="" name="dergi_yil" tabindex="-1">
                        <option> </option>

                        <option value="0"> Dergi Yil</option>

                        <?php 
                        $menusor=$db->prepare("select DISTINCT dergi_yil from dergi_arsive ");
                        $menusor->execute();

                        while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <option value="<?php echo $menucek['dergi_yil']; ?>"><?php echo $menucek['dergi_yil']; ?></option>


                          <?php } ?>




                        </select>
                           <select class="select2_single form-control" required="" name="dergi_cilt" tabindex="-1">
                        <option> </option>

                        <option value="0"> Dergi Cilt</option>

                        <?php 
                          $menusor=$db->prepare("select DISTINCT  dergi_cilt    from dergi_arsive ");
                        $menusor->execute();
                      

                        while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <option value="<?php echo $menucek['dergi_cilt']; ?>"><?php echo $menucek['dergi_cilt']; ?></option>


                          <?php } ?>




                        </select>


                            <select class="select2_single form-control" required="" name="dergi_sayi" tabindex="-1">
                        <option> </option>

                        <option value="0"> Dergi Sayı</option>

                        <?php 
                     
                        $menusor=$db->prepare("select DISTINCT dergi_sayi from dergi_arsive ");
                        $menusor->execute();
                        while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <option value="<?php echo $menucek['dergi_sayi']; ?>"><?php echo $menucek['dergi_sayi']; ?></option>


                          <?php } ?>




                        </select>

                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Makele Ad<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name" required="required" name="makale_ad" placeholder="Makale adını giriniz..." class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Makele yazar<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name"  name="makale_yazar" placeholder="Yazarları giriniz." class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Makele Sayfa Sayısı<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name"  name="makale_sayfasayi" placeholder="Sayfa Sayısını." class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Makele Özet <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor4" name="makale_ozet"></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Makele Anahtar Kelime <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor1" name="makale_keywords"></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kaynakça <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor2" name="makale_kaynakca"></textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yayımlanma Tarihi<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name"  name="makale_tarih" placeholder="Yayımlama tarihini 01.02.2015 şeklinde giriniz." class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kaynak Göster <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <textarea  class="ckeditor" id="editor3" name="makale_kaynak"></textarea>

                      </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Pdf Yükle
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="file" id="first-name" required="required" name="makale_resimyol"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                    <script type="text/javascript">


                     CKEDITOR.replace( 'editor1''editor''editor3''editor4',
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
 




                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Durum<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                     <select id="heard" class="form-control" name="makale_durum" required>
                      <option value="1">Aktif</option>
                      <option value="0">Pasif</option>

                    </select>
                  </div>
                </div>

                <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                  <button type="submit" name="makalekaydet" class="btn btn-primary">Kaydet</button>
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


<script src="../vendors/select2/dist/js/select2.full.min.js"></script>

<!-- Select2 -->
<script>
  $(document).ready(function() {
    $(".select2_single").select2({
      placeholder: "Select a state",
      allowClear: true
    });
    $(".select2_group").select2({});
    $(".select2_multiple").select2({
      maximumSelectionLength: 4,
      placeholder: "With Max Selection limit 4",
      allowClear: true
    });
  });
</script>
<!-- /Select2 -->

<?php include 'footer.php'; ?>
