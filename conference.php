<?php include"header.php"; 



$iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit 25");
$iceriksor->execute();

?>
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Conferences</h2>
                    <span class="underline center"></span>

                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Conference</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <br><br>
        <!-- Start: Blog Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="blog-main-list">
                        <div class="container">
                            <div class="row">
                                    <?php

                $sayfada = 6; // sayfada gösterilecek içerik miktarını belirtiyoruz.


                $sorgu=$db->prepare("select * from icerik");
                $sorgu->execute();
                $toplam_icerik=$sorgu->rowCount();

                $toplam_sayfa = ceil($toplam_icerik / $sayfada);

                  // eğer sayfa girilmemişse 1 varsayalım.
                $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

                // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa = 1; 

                // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                $limit = ($sayfa - 1) * $sayfada;

                $iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
                $iceriksor->execute();

                while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>
                                <div class="blog-page">
                                    <article>
                                        <div class="grid-item blog-item">
                                            <div class="post-thumbnail">
                                              
                                                <img src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="" style="width: 395px; height: 250px; padding: 10px;" />
                                          
                                            </div>
                                            <div class="post-detail">
                                                <header class="entry-header">
                                                    <div class="blog_meta_category">
                                                        <span class="arrow-right"></span>
                                                        <p><?php echo $icerikcek['icerik_keyword']; ?></p>

                                                      
                                                    </div>
                                                    <h3 class="entry-title"><h3 align="center"><?php echo $icerikcek['icerik_ad']; ?></h3></h3>
                                                         
                                                            <h3 class="entry-title"><h3>(<?php echo $icerikcek['icerik_bastarih']; ?>)--(<?php echo $icerikcek['icerik_bittarih']; ?>)</h3></h3>
                                               
                                                     
                                                </header>
                                                <div class="entry-content">
                                                    <p><?php echo substr($icerikcek['icerik_detay'],0,200); ?>...</p>
                                                </div>
                                                <footer class="entry-footer">
                                                <a class="mt-md" href="conference/<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>">Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
                                                </footer>
                                            </div>
                                        </div>
                                   
                                    </article>
                               
                             <?php } ?>
                          
                    <div align="right" class="col-md-12">
                    <ul class="pagination">

                        <?php

                        $s=0;

                        while ($s < $toplam_sayfa) {

                            $s++; ?>

                            <?php 

                            if ($s==$sayfa) {?>

                            <li class="active">

                                <a href="conference?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                            </li>

                            <?php } else {?>


                            <li>

                                <a href="conference?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                            </li>
                            
                            <?php   }

                        }

                        ?>

                    </ul>
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
        <section class="social-network section-padding">
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