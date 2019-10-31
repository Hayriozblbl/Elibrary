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
<!-- End: Page Banner ---->

<!-- Start: Blog Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="blog-detail-main">
                <div class="container">
                    <div class="row">
                        <div class="blog-page">
                            <div class="blog-section">
                                <article>
                                    <div class="blog-detail">
                                        <header class="entry-header">

                                            <h2 class="entry-title" align="center"><?php echo $icerikcek['icerik_ad']; ?></h2>

                                                            <h3 class="entry-title"><h3  align="center">(<?php echo $icerikcek['icerik_bastarih']; ?>)--(<?php echo $icerikcek['icerik_bittarih']; ?>)</h3></h3>

                                        </header>

                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                               <!-- <div class="post-date">
                                                    <p class="date" href="#."><?php echo $icerikcek['icerik_zaman'] ?></p>
                                                </div> -->

                                            </div>
                                            <figure>
                                                <img alt="blog" src="<?php echo $icerikcek['icerik_resimyol']; ?>"/>
                                            </figure>
                                        </div>

                                        <div class="post-detail">

                                            <div class="entry-content">
                                             <h4 align="center">Conference About</h4>
                                             <p><?php echo $icerikcek['icerik_detay']; ?></p>

                                             <h4 align="center">Conference Venue</h4>
                                             <p><?php echo $icerikcek['icerik_yer']; ?></p>

                                             <h4 align="center">Important Dates</h4>
                                             <p><?php echo $icerikcek['icerik_otarih']; ?></p>

                                             <h4 align="center">Invited Speakers</h4>
                                             <p><?php echo $icerikcek['icerik_konusmacilar']; ?></p>

                                             <h4 align="center">Committees</h4>
                                             <p><?php echo $icerikcek['icerik_komite']; ?></p>

                                             <h4 align="center">Conference Topics</h4>
                                             <p><?php echo $icerikcek['icerik_konular']; ?></p>

                                             <h4 align="center">Special Sections</h4>
                                             <p><?php echo $icerikcek['icerik_ozel']; ?></p>

                                             <h4 align="center">Review and Publishing Proccess</h4>
                                             <p><?php echo $icerikcek['icerik_surec']; ?></p>


                                             <h3 align="center">Organizing</h3>
                                             <p><?php echo $icerikcek['icerik_duzenleyen']; ?></p>
                                             
                                            <!-- <h4 align="center">Mail and Web Site</h4> 
                                             <p><?php echo $icerikcek['icerik_mail']; ?></p> </a> -->

                                             <h4 align="center">Registiration Information</h4>
                                             <p><?php echo $icerikcek['icerik_katilim']; ?></p> 



                                         </div>

                                         <footer class="entry-footer">
                                            <div class="col-xs-12 col-sm-12 entry-tags"> 
                                                <strong>Keywords:</strong>
                                                <?php 

                                                $etiketler=explode(', ',$icerikcek['icerik_keyword']); 



                                                foreach ($etiketler as $etiketbas) {?>


                                                    <strong> <span><a href="arama?aranan=<?php echo $etiketbas; ?>"><?php echo $etiketbas; ?></a>,  </span>    </strong>

                                                <?php }         
                                                ?>

                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </article>


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