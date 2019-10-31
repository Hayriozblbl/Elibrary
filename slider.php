     
<?php 
require_once'nedmin/netting/baglan.php';
require_once 'nedmin/production/ponki.php';

$slidersor=$db->prepare("select * from slider where slider_id=?");
$slidersor->execute(array(0));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
 ?>


  
       <!-- Start: Slider Section -->
       <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            
                <?php 

                $slidersor=$db->prepare("select * from slider where slider_durum=? order by slider_id DESC limit 25");
                $slidersor->execute(array(1));

                while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {
                    ?>


            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="<?php echo $slidercek['slider_resimyol']; ?>" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                              <h3><?php echo $slidercek['slider_title']; ?></h3>
                            <h2><?php echo $slidercek['slider_baslik']; ?></h2>
                            <p><?php echo $slidercek['slider_atitle']; ?></p>
                            <div class="slide-buttons hidden-sm hidden-xs">    
                             
                           
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        <?php } ?>
            
            <!-- Controls -->
            <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
        </div>
        <!-- End: Slider Section -->