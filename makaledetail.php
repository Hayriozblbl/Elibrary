<?php include"header.php";

$iceriksor=$db->prepare("SELECT * from icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
    'icerik_id' => $_GET['icerik_id']
    ));

$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);







 ?>
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Conference</h2>
                    <span class="underline center"></span>

                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="conference.php">Conference</a></li>
                        <li>Conference Detail</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Blog Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="blog-detail-main">
                        <div class="container">
                            <div class="row">
                                <div class="blog-page">
                                    <div class="blog-section">
                                        <div  class="col-sm-12">
                                        <article>
                                                        <center>   <h3 class="entry-title"><h3><?php echo $icerikcek['icerik_ad']; ?></h3></h3></center> <br>
                                                    <div class="col-sm-12">
                                                        <div>
                                                           <center><h2 style="color:maroon;font-family:tahoma;font-weight:bold;font-size:125%">Conference About</h2></center> 
                                                        </div>
                           <p style="font-size:16px !important;" > <img  src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="" style="float:left;width: 395px; height: 250px; padding:10px; margin-top:16px;"> 

                                          <div class="entry-meta">
                                                    <p>Düzenleyen: <?php echo $icerikcek['icerik_duzenleyen']; ?></p> <br>  <p class="date">Tarih:<?php echo $icerikcek['icerik_zaman'] ?></p>
                                                       
                                                    </div>
                                                    <div> <?php echo $icerikcek['icerik_detay']; ?></p>
                                                    </div>
                                                   
                                    <hr>
                                   
                                    <p style="font-size:15px;"><b>Anahtar Kelimeler : </b>

                                        <?php 

                                        $etiketler=explode(', ',$icerikcek['icerik_keyword']); 



                                        foreach ($etiketler as $etiketbas) {?>

                                
                                        <a href="arama?aranan=<?php echo $etiketbas; ?>"><button class="btn btn-primary btn-xs"><?php echo $etiketbas; ?></button></a>                          

                                        <?php }         
                                        ?>



                                    </p>
                                    
                                        </article>
                                       
                                
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Blog Section -->

        <!-- Start: Social Network -->
        <section class="social-network">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Follow Us</h2>
                    <span class="underline center"></span>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <ul>
                    <li>
                        <a class="facebook" href="#" target="_blank">
                            <span>
                                <i class="fa fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank">
                            <span>
                                <i class="fa fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="google" href="#" target="_blank">
                            <span>
                                <i class="fa fa-google-plus"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="#" target="_blank">
                            <span>
                                <i class="fa fa-rss"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" href="#" target="_blank">
                            <span>
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="#" target="_blank">
                            <span>
                                <i class="fa fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End: Social Network -->
<?php include"footer.php"; ?>