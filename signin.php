<?php include'header.php'; ?>        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Signin</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Signin</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="signin-main">
                        <div class="container">
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register">
                                        <div class="col-md-5 col-md-offset-1 border-dark-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail bg-dark margin-left">
                                                        <div class="signin-head">
                                                            <h2>Sign in</h2>
                                                            <span class="underline left"></span>
                                                        </div>
                                                        <form class="login" method="post">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">Barcode or Username</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text"  id="username" name="username" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                                <label>
                                                                    <span class="first-letter">Pin</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="password" id="password" name="password" class="input-text">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <div class="password-form-row">
                                                                <p class="form-row input-checkbox">
                                                                    <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                                                    <label class="inline" for="rememberme">Remember me</label>
                                                                </p>
                                                                <p class="lost_password">
                                                                    <a href="#">Lost your Pin?</a>
                                                                </p>
                                                            </div>
                                                            <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-dark new-user">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail new-account bg-light margin-right">
                                                        <div class="new-user-head">
                                                            <h2>Create New Account</h2>
                                                            <span class="underline left"></span>
                                                            <p>If no barcode has been assigned for your account, please contact the library.</p>
                                                        </div>
                                                        <form class="login" method="post">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">Barcode</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text" id="username1" name="username" class="input-text">
                                                            </p>
                                                            <p class="form-row input-required">
                                                                <label>
                                                                    <span class="first-letter">Password</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="password" id="password1" name="password" class="input-text">
                                                            </p>                                                                                
                                                            <div class="clear"></div>
                                                            <input type="submit" value="Signup" name="signup" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form> 
                                                    </div>
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
        <!-- End: Cart Section -->
        
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
        <?php include'footer.php'; ?>   