<?php include "header.php";
$para = array(
 ':dergi_id' => $_GET['dergi_id'],
 ':dergi_yil' => $_GET['dergi_yil'],
 ':dergi_cilt' => $_GET['dergi_cilt'],
 ':dergi_sayi' => $_GET['dergi_sayi']
);
$makalesor=$db->prepare("SELECT * from makale_arsive where dergi_id=:dergi_id and dergi_yil=:dergi_yil and dergi_cilt=:dergi_cilt and dergi_sayi=:dergi_sayi");
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
                                        <div class="single-book-box">                                                
                                            <div class="post-thumbnail">
                                                                       
                                            </div>
                                            <br><br><br><br><br><br><br><br><br><br>
                                            <div class="post-detail">
                                                
                                           
                                                <header class="entry-header">
                                                    <h2 class="entry-title">  <p><?php echo $makalecek['makale_ad']; ?></p></h2>
                                                    <ul>
                                                         <li><strong>Yazar:</strong><?php echo $makalecek['makale_yazar']; ?></li>
                                                         <li><strong>Sayfa:</strong><?php echo $makalecek['makale_sayfa']; ?></li>
                                               
                                                </header>
                                                
                                            </div>
                                        </div>

                                        <p align="center";><strong>Makale Özet <br></strong><?php echo $makalecek['makale_detay']; ?> </p> <hr>
                                        <p align="center";><strong>Makale Kaynakça <br></strong><?php echo $makalecek['makale_kaynakca']; ?> </p> <hr>
                                        <p align="center";><strong>Ayrıntılar <br></strong> </p> 
                                        <li><strong>Yazar:</strong><?php echo $makalecek['makale_yazar']; ?></li>
                                        <li><strong>Yayımlanma Tarihi:</strong><?php echo $makalecek['makale_tarih']; ?></li> <hr>
                                        <p align="center";><strong>Kaynak Göster <br></strong><?php echo $makalecek['makale_kaynakgoster']; ?> </p> <hr>

                                       <button type="button" class="btn btn-primary">Download PDF</button> <br> <br>
                                      
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->

        <!-- Start: Social Network -->
    
        <!-- End: Social Network -->
<?php include"footer.php"; ?>