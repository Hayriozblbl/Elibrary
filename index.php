<?php include 'header.php'; 
?>
       
     
<?php include'slider.php'; ?>
     

        
        <!-- Start: Search Section -->
        <section class="search-filters">
            <div class="container">
                <div class="filter-box">
                    <h3>What are you looking for at the library?</h3>
                    <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="keywords">Search by Keyword</label>
                                <input class="form-control" placeholder="Enter Keywords, authors, DOI, ISBN etc" id="keywords" name="keywords" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <select name="catalog" id="catalog" class="form-control">
                                    <option>Search the Catalog</option>
                                    <option>Catalog 01</option>
                                    <option>Catalog 02</option>
                                    <option>Catalog 03</option>
                                    <option>Catalog 04</option>
                                    <option>Catalog 05</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <select name="category" id="category" class="form-control">
                                    <option>All Categories</option>
                                    <option>Category 01</option>
                                    <option>Category 02</option>
                                    <option>Category 03</option>
                                    <option>Category 04</option>
                                    <option>Category 05</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="submit" value="Search">
                            </div>
                        </div>
                    </form>
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
        <section class="newsletter section-padding">
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
        </section>
        <!-- End: Newsletter -->
    
       
     
        <!-- End: News & Event -->
        
     
      
        <?php include 'footer.php'; ?>