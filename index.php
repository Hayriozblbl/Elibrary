<?php include 'header.php'; 
?>
       
     
<?php include'slider.php'; ?>
     

        
        <!-- Start: Search Section -->
        <section class="search-filters">
            <div class="container">
                <div class="filter-box">
                    <h3>What are you looking for at the library?</h3>
             
                </div>
            </div>
        </section>
        <!-- End: Search Section -->
        <?php 
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

         ?>
        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <h2 class="section-title">Welcome to the <?php echo $ayarcek['ayar_title']; ?></h2>
                                <span class="underline left"></span>
                                <p class="lead"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></p>
                                <p><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>
                                <a class="btn btn-primary" href="about.php">Read More</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->
        
    
        <!-- Start: Newsletter -->
      <!--  <section class="newsletter section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="center-content">
                            <h2 class="section-title">Subscribe to</h2>
                            <span class="underline center"></span>
                           
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter" type="email">
                            <input class="form-control" value="Subscribe" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </section>    -->
        <!-- End: Newsletter -->
    
       
     
        <!-- End: News & Event -->
        
     
      
        <?php include 'footer.php'; ?>