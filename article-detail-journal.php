<?php include 'header.php';

$para = array(
    ':dergi_id' => $_GET['dergi_id'],
    ':dergi_yil' => $_GET['dergi_yil'],
    ':dergi_cilt' => $_GET['dergi_cilt'],
    ':dergi_sayi' => $_GET['dergi_sayi']
);

 
 
$makalesor=$db->prepare("SELECT * from makale_arsive  where dergi_id=:dergi_id and dergi_yil=:dergi_yil and dergi_cilt=:dergi_cilt and dergi_sayi=:dergi_sayi");

$makalesor->execute($para);


$makalecek=$makalesor->fetch(PDO::FETCH_ASSOC);



?>


<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
           <h2>Article</h2>
           <span class="underline center"></span>

       </div>
       <div class="breadcrumb">
        <ul>
         <li><a href="index.php">Home</a></li>
         <li>Articles</li>
     </ul>
 </div>
</div>
</section>
<!-- End: Page Banner -->




<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="booksmedia-detail-main">
                <div class="container">
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="booksmedia-detail-box">
                              <br><br>
                            
                              <h3 align="center" font color="fff"><?php echo $makalecek['makale_ad']; ?></h3>     <br>                 


                              <div>
                              <h4 class="page-header">Özet</h4>

                                <p><span style="font-size:10pt;font-family:'Times New Roman', serif;"><?php echo $makalecek['makale_ozet']; ?></p>

                                </div>

                              <div>
                              <h4 class="page-header">Yazar</h4>

                                <p><span style="font-size:10pt;font-family:'Times New Roman', serif;"><?php echo $makalecek['makale_yazar']; ?></p>

                                </div>
                            </div>

                            <div id="articleKeywords">
                                <h4 class="page-header">Anahtar Kelimeler</h4>

                                <div>
                                    <p><?php echo $makalecek['makale_keywords']; ?></p>
                                </div>
                            </div>

                            <div id="articleCitations">
                                <h4 class="page-header">Kaynakça</h4>

                                <div>
                                    <ul class="fa-ul">
                                    <?php echo $makalecek['makale_kaynakca']; ?>
                                    </ul>
                                </div>
                            </div>

                           
                            <div id="article_cite">
                                <h4 class="page-header">Kaynak Göster</h4>
                                <table class="table table-striped">
                                    <tr>
                                    
                                        <td><?php echo $makalecek['makale_kaynak']; ?></td>
                                    </tr>
                                    
                                    
                                </table>
                            </div>
                            <div id="article_meta">
                               
                               <table class="record_properties table">
                               
                                  
                                
                                   <tr>
                                       <th>Yayımlanma Tarihi</th>
                                       <td>
                                       <?php echo $makalecek['makale_tarih']; ?>
                                       </td>
                                   </tr>
                               </table>
                           </div>

                            <hr>
                            

                    </div>
                </div>

     
                <a class="btn btn-dark-gray" href="<?php echo $makalecek['makale_resimyol']; ?>">DOWNLOAD PDF</a>
                <br> <br>

            </div>
        </div>

    </div>
</div>
</div>
</main>
</div>
</div>

<?php include'footer.php'; ?>