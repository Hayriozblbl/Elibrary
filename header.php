
<?php 
require_once'nedmin/netting/baglan.php';
require_once 'nedmin/production/ponki.php';
error_reporting(0);
$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
 ?>

<?php 
require_once'nedmin/netting/baglan.php';
require_once 'nedmin/production/ponki.php';

$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

 ?>


<base href="http://localhost/elib/">
<!DOCTYPE html>
<html lang="zxx">
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title><?php echo $ayarcek['ayar_title']; ?></title>
          <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
          <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
          <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
           <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Responsive Table -->
        <link rel="stylesheet" type="text/css" href="css/responsivetable.css" />

        <!-- Accordion Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/jquery.accordion.css">

        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="index.php">
                                                <img src="<?php echo $ayarcek['ayar_logo']; ?>" alt="<?php echo $ayarcek['ayar_title']; ?>" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 ">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs ">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                               <!-- <a href=""><i class="fa fa-phone"></i><?php echo $ayarcek['ayar_tel']; ?></a>
                                                <span>/</span>-->
                                              
                                                <a href=""><i class="fa fa-envelope"></i><?php echo $ayarcek['ayar_mail']; ?></a>
                                             
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs ">
                                    <ul class="nav navbar-nav">
                                     
                                        <?php 

                                    $menusor=$db->prepare("select * from menu where menu_ust=:menu_ust order by menu_sira");
                                    $menusor->execute(array(
                                        'menu_ust' => 0
                                        ));
                                    while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                                        $menu_id=$menucek['menu_id'];
                                        $altmenusor=$db->prepare("select * from menu where menu_ust=:menu_id order by menu_sira");
                                        $altmenusor->execute(array(
                                            'menu_id' => $menu_id
                                            ));
                                          $say=$altmenusor->rowCount();

                                            ?>

                                            <li <?php 
                                            if ($say>0) {
                                            
                                            echo "class='nav navbar-nav'";
                                            }
                                             ?>>
                                                <a href="<?php

                                                if (strlen($menucek['menu_url'])>0) {

                                                    echo $menucek['menu_url'];

                                                } elseif (strlen($menucek['menu_url'])==0) {?>

                                                sayfa-<?=seo($menucek["menu_ad"]).'-'.$menucek["menu_id"]?>

                                                <?php }

                                                ?>"><?php echo $menucek['menu_ad']; ?></a>

                                                

                                                    

                                                        <?php  } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                   <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                            
                                        </li>
                                         <li><a href="article-list.php">article</a></li>
                                     
                                         <li><a href="journal-list.php">Journal</a></li>
                                               <li><a href="conference.php">Conference</a></li>
                                                     <li><a href="about.php">About</a></li>
 
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->