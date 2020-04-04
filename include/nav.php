    <!-- START SECTION HEADER -->
    <header class="header_wrap  dark_skin">
        <!-- TOP HEADER -->
        <div class="top-header bg_blue_dark light_skin">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <ul class="contact_detail list_none text-center text-md-left">
                            <li>
                                <i class="ti-mobile"></i>
                                <a href="tel:7479225487">(+91) 747 922 5487</a>
                            </li>
                            
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:support@mixblack.co.in">
                                    support@mixblack.co.in
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">
                            <ul class="list_none social_icons social_white text-center text-md-right">
                                <li>
                                    <a href="https://www.github.com/" target="_blank" title="Github">
                                        <i class="ion-social-github"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank" title="Facebook">
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank" title="Twitter">
                                        <i class="ion-social-twitter"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank" title="Instagram">
                                        <i class="ion-social-instagram-outline"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank" title="Linkedin">
                                        <i class="ion-social-linkedin"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.youtube.com/" target="_blank" title="YouTube">
                                        <i class="ion-social-youtube-outline"></i>
                                    </a>
                                </li>
                            </ul>

                            <ul class="list_none header_list border_list ml-1">
                                <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li>
                                <li>
                                    <a href="contact.php" class="btn btn-default btn-sm rounded-0">
                                        Get a Quotes &nbsp;
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BOTTOM HEADER -->
        <div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand brand-logo" href="index.php">
                    <img class="logo_light" src="assets/images/logo/mixblack-logo.svg" alt="MIXblack logo" />
                    <img class="logo_dark" src="assets/images/logo/mixblack-logo.svg" alt="MIXblack logo" />
                    <img class="logo_default" src="assets/images/logo/mixblack-logo.svg" alt="MIXblack logo" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="ion-android-menu"></span> 
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link 
                            <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){
                                echo "active";
                                }else {
                                    echo "";
                            }?>" href="index.php">
                                Home
                            </a>
                        </li>

                        <li>
                            <a class="nav-link 
                            <?php if(basename($_SERVER['PHP_SELF']) == "live-projects.php"){
                                echo "active";
                                }else {
                                    echo "";
                            }?>" href="live-projects.php">Live Projects</a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link 
                            <?php if(basename($_SERVER['PHP_SELF']) == "web-development.php" || basename($_SERVER['PHP_SELF']) ==  "app-development.php" || basename($_SERVER['PHP_SELF']) ==  "graphics-design.php" || basename($_SERVER['PHP_SELF']) ==  "digital-marketing.php" || basename($_SERVER['PHP_SELF']) ==  "legal-frameworks.php"){
                                echo "active";
                                }else {
                                    echo "";
                            }?>" href="#" data-toggle="dropdown">
                                Services
                            </a>

                            <div class="dropdown-menu">
                                <ul> 
                                    <li>
                                        <a class="dropdown-item nav-link nav_item 
                                        <?php if(basename($_SERVER['PHP_SELF']) == "web-development.php"){
                                            echo "active";
                                            }else {
                                                echo "";
                                        }?>" href="web-development.php">
                                            Web Development
                                        </a>
                                    </li> 

                                    <li>
                                        <a class="dropdown-item nav-link nav_item 
                                        <?php if(basename($_SERVER['PHP_SELF']) == "app-development.php"){
                                            echo "active";
                                            }else {
                                                echo "";
                                        }?>" href="app-development.php">
                                            App Development
                                        </a>
                                    </li> 

                                    <li>
                                        <a class="dropdown-item nav-link nav_item 
                                        <?php if(basename($_SERVER['PHP_SELF']) == "graphics-design.php"){
                                            echo "active";
                                            }else {
                                                echo "";
                                        }?>" href="graphics-design.php">
                                            Graphic Design
                                        </a>
                                    </li> 

                                    <li>
                                        <a class="dropdown-item nav-link nav_item 
                                        <?php if(basename($_SERVER['PHP_SELF']) == "digital-marketing.php"){
                                            echo "active";
                                            }else {
                                                echo "";
                                        }?>" href="digital-marketing.php">
                                            Digital Marketing
                                        </a>
                                    </li> 

                                    <li>
                                        <a class="dropdown-item nav-link nav_item 
                                        <?php if(basename($_SERVER['PHP_SELF']) == "legal-frameworks.php"){
                                            echo "active";
                                            }else {
                                                echo "";
                                        }?>" href="legal-frameworks.php">
                                            Legal Frameworks
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a class="nav-link 
                            <?php if(basename($_SERVER['PHP_SELF']) == "portfolio.php"){
                                echo "active";
                                }else {
                                    echo "";
                            }?>" href="portfolio.php">Portfolio</a>
                        </li>

                        <li>
                            <a class="nav-link 
                            <?php if(basename($_SERVER['PHP_SELF']) == "premium-projects.php"){
                                echo "active";
                                }else {
                                    echo "";
                            }?>" href="premium-projects.php">Premium Projects</a>
                        </li>

                        <li>
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>

                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                        <div class="search-overlay">
                            <div class="search_wrap">
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">

                                    <button type="submit" class="search_icon">
                                        <i class="ion-ios-search-strong"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- END SECTION HEADER --> 