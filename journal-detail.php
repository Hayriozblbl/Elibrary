<?php include "header.php";

$dergisor=$db->prepare("SELECT * from dergi where dergi_id=:dergi_id");
$dergisor->execute(array(
    'dergi_id' => $_GET['dergi_id']
));

$dergicek=$dergisor->fetch(PDO::FETCH_ASSOC);


$dergiarsivesor=$db->prepare("SELECT  *  from dergi_arsive where dergi_id=:dergi_id order by dergi_yil DESC");
$dergiarsivesor->execute(array(
    'dergi_id' => $_GET['dergi_id']
));

$dergiarsivecek=$dergiarsivesor->fetchAll(PDO::FETCH_ASSOC);


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

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
           <?php include'search.php'; ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="booksmedia-detail-box">
                                        <div class="single-book-box">                                                
                                            <div class="post-thumbnail">
                   
                                              <img alt="" src="<?php echo $dergicek['dergi_resimyol']; ?>" class="img-responsive" alt="" style="width: 300px; height: 400px;  ;"/>                                                    
                                            </div>
                                            <div class="post-detail">
                                                
                                           
                                                <header class="entry-header">
                                                    <h2 class="entry-title">  <p><?php echo $dergicek['dergi_ad']; ?></p></h2>
                                                    <ul>
                                                         <li><strong>Publisher:</strong><?php echo $dergicek['dergi_yayinci']; ?></li>
                                                <li><strong>ISSN:</strong> <?php echo $dergicek['dergi_issn']; ?></li>
                                                   <li><strong>E-ISSN:</strong> <?php echo $dergicek['dergi_eissn']; ?></li>
                                                        
                                                       <li><strong>Founded:</strong><?php echo $dergicek['dergi_baslangic']; ?></li>
                                                <li><strong>Period:</strong> <?php echo $dergicek['dergi_periyot']; ?></li>
                                                    </ul>
                                                </header>
                                                
                                            </div>
                                        </div>
                                        <p><strong>About:</strong><?php echo $dergicek['dergi_detay']; ?> </p>
                                       
                                        <div class="table-tabs" id="responsiveTabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Archive</a></li>
                                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Editorials Boards</a></li>
                                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Author Guidelines</a></li>
                                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Aim and Scope</a></li> 
                                               
                                                 <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionE">Publishing Principles</a></li> 
                                                 <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionF">indexing</a></li> 
                                                  <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionG">Contact</a></li> 
                                            </ul>
                                            <div class="tab-content">
                                                <div id="sectionA" class="tab-pane fade in active">
                                
                                      <?php
 foreach ($dergiarsivecek as $value) {
                                        echo'<h5><u>'. $value['dergi_yil'] . ' </u></h5>
                                     <ul class="list-unstyled">
                                                    <li>
                                                    <h5>
                                                        <a href="article-list-journal.php?dergi_id='. $value['dergi_id'] .'&dergi_yil='. $value['dergi_yil'] .'&dergi_cilt='. $value['dergi_cilt'] .'&dergi_sayi='. $value['dergi_sayi'] .'">
                                                            Cilt:  ' . $value['dergi_cilt'] . ' Sayı:' . $value['dergi_sayi'] . '
                                                        </a>
                                                         
                                                    </h5>
                                                </li>
                                                    </ul>';


    
  
}
         ?>
                                
                         
                                     
                                                </div>
                                                <div id="sectionB" class="tab-pane fade in">
                                                    <p><?php echo $dergicek['dergi_editorkurul']; ?></p>
                                                </div>
                                                <div id="sectionC" class="tab-pane fade in">
                                                  
                                                   <p><?php echo $dergicek['dergi_yazimkurallari']; ?></p>
                                                </div>
                                                <div id="sectionD" class="tab-pane fade in">
                                                     <p><?php echo $dergicek['dergi_amackapsam']; ?></p>
                                                </div>                                                    
                                                <div id="sectionE" class="tab-pane fade in">
                                                                    <p><?php echo $dergicek['dergi_yayinilkeleri']; ?></p>
                                                </div>                                                    
                                                <div id="sectionF" class="tab-pane fade in">
                                                                   <p><?php echo $dergicek['dergi_dizinler']; ?></p>
                                                </div>
                                                <div id="sectionG" class="tab-pane fade in">
                                                                   <p><?php echo $dergicek['dergi_iletisim']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                      
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
     <?php include'follow-us.php'; ?>
        <!-- End: Social Network -->
<?php include"footer.php"; ?>