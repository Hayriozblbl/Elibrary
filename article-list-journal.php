 <?php include 'header.php';
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



                             <br><br>



                             <p><strong>Year:&nbsp;</strong><?php echo $makalecek['dergi_yil']; ?> <strong>Volume:&nbsp;</strong><?php echo $makalecek['dergi_cilt']; ?></strong>&nbsp;</strong><strong>issue:&nbsp;</strong><?php echo $makalecek['dergi_sayi']; ?></strong></p>

                             <h3 align="center" font color="fff"> CONTENTS </h3>     <br>                 


                             <ul class="list-group">

                                <li class="list-group-item list-group-item-primary">
                                 <h5 class="fa fa-globe"> <b> Articles</b> </h5>

                                    <ul class="list-group">
                                    <?php   
                                       $makalesor=$db->prepare("SELECT * from makale_arsive where dergi_id=:dergi_id and dergi_yil=:dergi_yil and dergi_cilt=:dergi_cilt and dergi_sayi=:dergi_sayi");
                                       $makalesor->execute($para);


                                       while($makalecek=$makalesor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <li class="list-group-item list-group-item-default">
                                           <a  href="articles/<?=seo($makalecek["makale_ad"]).'-'.$makalecek["id"]?>?dergi_id=<?php echo  $makalecek["dergi_id"]; ?>&dergi_yil=<?php echo $makalecek["dergi_yil"]; ?>&dergi_cilt=<?php echo $makalecek["dergi_cilt"]; ?>&dergi_sayi=<?php echo $makalecek["dergi_sayi"]; ?>">
                                           &nbsp;&nbsp;<h5 class="fa fa-file-text"> &nbsp;<?php echo $makalecek['makale_ad']; ?> </h5></a>

                                            
                                           <div class="pull-right">
                                            
                                            <a class="btn btn-dark-gray" href="<?php echo $makalecek['makale_resimyol']; ?>">PDF</a>
                                        </div> 
                                     
                                        <br>
                                        <p><b> Author:   </b>  <?php echo $makalecek['makale_yazar']; ?>        </p>
                                        
                                                                                                                                     
                                        </li>




                                        <?php } ?>





                                </ul>
                            </li>


                        </ul>
                       <!-- <button type="button" class="btn btn-primary">Download PDF</button> --> <br> <br>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
</div>
</div>

<?php include"footer.php"; ?>