<?php include"header.php"; 



$dergisor=$db->prepare("select * from dergi order by dergi_zaman DESC limit 25");
$dergisor->execute();

?>

<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Journal Listing</h2>
            <span class="underline center"></span>

        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Journals</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Book & Media Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-media-list">
                <div class="container">
                    <div class="row">
                       <?php include'search.php'; ?>
                   </div>
                   <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <div class="filter-options margin-list">
                            <div class="row">                                            



                            </div>
                        </div>
                        <div class="books-list">
                            <article> 
                                <?php

                $sayfada = 6; // sayfada gösterilecek içerik miktarını belirtiyoruz.


                $sorgu=$db->prepare("select * from dergi");
                $sorgu->execute();
                $toplam_dergi=$sorgu->rowCount();

                $toplam_sayfa = ceil($toplam_dergi / $sayfada);

                  // eğer sayfa girilmemişse 1 varsayalım.
                $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

                // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa = 1; 

                // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                $limit = ($sayfa - 1) * $sayfada;

                $dergisor=$db->prepare("select * from dergi order by dergi_zaman DESC limit $limit,$sayfada");
                $dergisor->execute();

                while($dergicek=$dergisor->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="single-book-box">                                                
                        <div class="post-thumbnail">

                            <img alt="" src="<?php echo $dergicek['dergi_resimyol']; ?>" class="img-responsive" alt="" style="width: 300px; height: 400px; "/>                                                               </div>
                            <div class="post-detail">


                                <header class="entry-header">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <h3 class="entry-title">
                                                <a href="books-media-detail-v1.html"><?php echo $dergicek['dergi_ad']; ?></a>
                                            </h3>
                                            <ul>
                                                <li><strong>Publisher:</strong><?php echo $dergicek['dergi_yayinci']; ?></li>
                                                <li><strong>ISSN:</strong> <?php echo $dergicek['dergi_issn']; ?></li>
                                                <li><strong>E-ISSN:</strong> <?php echo $dergicek['dergi_eissn']; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><strong>Founded:</strong><?php echo $dergicek['dergi_baslangic']; ?></li>
                                                <li><strong>Period:</strong> <?php echo $dergicek['dergi_periyot']; ?></li>
                                                <li>

                                                </li>
                                            </ul>                                                                
                                        </div>
                                    </div>
                                </header>
                                <div class="entry-content">
                                    <p><?php echo substr($dergicek['dergi_detay'],0,200); ?>...</p>
                                </div>
                                <footer class="entry-footer">
                                    <a class="btn btn-dark-gray" href="journal/<?=seo($dergicek["dergi_ad"]).'-'.$dergicek["dergi_id"]?>">Read More</a>
                                </footer>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </article>

                <?php } ?>




            </div>
            <nav class="navigation pagination text-center">
                <h2 class="screen-reader-text">Posts navigation</h2>
                <div align="right" class="col-md-12">
                    <ul class="pagination">

                        <?php

                        $s=0;

                        while ($s < $toplam_sayfa) {

                            $s++; ?>

                            <?php 

                            if ($s==$sayfa) {?>

                                <li class="active">

                                    <a href="journal?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                                </li>

                            <?php } else {?>


                                <li>

                                    <a href="journal?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                                </li>

                            <?php   }

                        }

                        ?>

                    </ul>
                </div>
                
            </nav>
        </div>
      <?php include"sidebar.php"; ?> 
    </div>
</div>


</div>
</main>
</div>
</div>
<!-- End: Books & Media Section -->

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