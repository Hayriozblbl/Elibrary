
<?php include'header.php'; ?>
 
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Books & Media Listing</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Books & Media</li>
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
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>What are you looking for at the library?</h3>
                                            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
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
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-md-push-3">
                                    <div class="filter-options margin-list">
                                        <div class="row">                                            
                                            <div class="col-md-4 col-sm-4">
                                                <select name="orderby">
                                                    <option selected="selected">Default sorting</option>
                                                    <option>Sort by popularity</option>
                                                  
                                                    <option>Sort by newness</option>
                                                    <option>Sort by price</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="filter-result">Showing items 1 to 9 of 19 total</div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 pull-right">
                                                <div class="filter-toggle">
                                                    <a href="books-media-gird-view-v1.html"><i class="glyphicon glyphicon-th-large"></i></a>
                                                    <a href="books-media-list-view.html" class="active"><i class="glyphicon glyphicon-th-list"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="books-list">
                                        <article> 
                                            <div class="single-book-box">                                                
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon yellow-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-01.jpg" /></a>                                                                 </div>
                                                <div class="post-detail">
                                                   
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                    
                                                                 
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <?php  $sql_query = "SELECT * FROM makale_bilgi";
                                                              $select_all_makale_bilgi = mysqli_query($conn, $sql_query);

                                                              while ($row = mysqli_fetch_assoc($select_all_makale_bilgi)){
                                                                   $makale_ad=$row["makale_ad"];
                                                                     $makale_yazar=$row["makale_yazar"];
                                                                       $makale_isbn=$row["makale_isbn"];
                                                                         $makale_ad=$row["makale_ad"];
                                                                            $makale_baski=$row["makale_baski"]; 
                                                                            $makale_ozet=$row["makale_ozet"];?>  
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title">
                                                                    <a href="books-media-detail-v1.html"><?php echo $makale_ad; ?></a>
                                                                </h3>
                                                                <ul>
                                                                    <li><strong>Author:</strong><?php echo $makale_yazar; ?></li>
                                                                    <li><strong>ISBN:</strong> <?php echo $makale_isbn; ?></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> <?php echo $makale_baski; ?></li>
                                                                       
                                                                </ul>                                                                
                                                            </div> 
                                                        </div>  <?php } ?>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p><?php echo $makale_ozet; ?></p>
                                                    </div>
                                       
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="article-detail.php">Read More</a>
                                                    </footer>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </article>
                                        <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon light-green-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-02.jpg" /></a>                                                    
                                                </div>
                                                <div class="post-detail">
                                                   
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                   
                                                                    
                                                                </ul>                                                                
                                                            </div>
                                                        </div> 
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article>  
                                     <!--   <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon light-green-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-02.jpg" /></a>                                                    
                                                </div>
                                                <div class="post-detail">
                                                   
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                   
                                                                    
                                                                </ul>                                                                
                                                            </div>
                                                        </div> 
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article> -->
                                       <!--   <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon light-green-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-02.jpg" /></a>                                                    
                                                </div>
                                                <div class="post-detail">
                                                   
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                   
                                                                    
                                                                </ul>                                                                
                                                            </div>
                                                        </div> 
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article> -->
                                       <!--   <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon light-green-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-02.jpg" /></a>                                                    
                                                </div>
                                                <div class="post-detail">
                                                   
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                   
                                                                    
                                                                </ul>                                                                
                                                            </div>
                                                        </div> 
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article> -->
                                         <!--   <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon light-green-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-02.jpg" /></a>                                                    
                                                </div>
                                                <div class="post-detail">
                                                   
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                   
                                                                    
                                                                </ul>                                                                
                                                            </div>
                                                        </div> 
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article> -->
                                    </div>
                                    <nav class="navigation pagination text-center">
                                        <h2 class="screen-reader-text">Posts navigation</h2>
                                        <div class="nav-links">
                                            <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i> Previous</a>
                                            <a class="page-numbers" href="#.">1</a>
                                            <span class="page-numbers current">2</span>
                                            <a class="page-numbers" href="#.">3</a>
                                            <a class="page-numbers" href="#.">4</a>
                                            <a class="next page-numbers" href="#.">Next <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </nav>
                                </div>
                            <?php include"sidebar.php"; ?>
                            </div>
                        </div>
                        
                        <!-- Start: Staff Picks -->
                        <section class="team staff-picks">
                            <div class="container">
                                <div class="center-content">
                                    <h2 class="section-title">Staff Picks</h2>
                                    <span class="underline center"></span>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="team-list">
                                    <div class="team-member">
                                        <figure>
                                            <img src="images/books-media/staff-pick/staff-picks-01.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="images/books-media/staff-pick/gail.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Downtown & Business</span>
                                                    <h4>The Collector</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member">
                                        <figure>
                                            <img src="images/books-media/staff-pick/staff-picks-02.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="images/books-media/staff-pick/katherine.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Katherine, West End</span>
                                                    <h4>Mongolia</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member">
                                        <figure>
                                            <img src="images/books-media/staff-pick/staff-picks-03.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="images/books-media/staff-pick/chris.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Chris, East Liberty</span>
                                                    <h4>The Revolution</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End: Staff Picks -->
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