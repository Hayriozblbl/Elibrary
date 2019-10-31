
<?php 
include 'header.php';
include '../netting/baglan.php';
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>About Us</h2>
                    <span class="underline center"></span>
                   
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>about</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Services Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="services-main">
                        <div class="services-pg">                            
                            <section class="services-offering">
                                <div class="container">
                                    <div class="center-content">
                                        <h2 class="section-title">About Us</h2>
                                        <span class="underline center"></span>
                                        <p class="lead">The standard chunk of Lorem Ipsum used since</p>
                                        <div class="clearfix"></div>
                                    </div>
                                   
                                </div>
                            </section>
                            <section class="who-we-are">
                                <div class="company-info">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-8 border">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="company-detail">
                                                            <h3 class="section-title">Who we are</h3>
                                                            <span class="underline left"></span>
                                                            <p><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-image"></div>
                                </div>
                            </section>
                          
                            
                      
                            <!-- Start: Category Filter -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Services Section -->
        
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