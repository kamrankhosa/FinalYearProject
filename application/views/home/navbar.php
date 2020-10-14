
    <!-- Preloader Start -->
<!--     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url();?>assets/home/img/logo/loder-logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                       <a href="<?php echo base_url();?>"><li title="Back to First page"><i class="fa fa-arrow-left"></i></li></a> 
                                        <li><?php echo $site_data->Phone_number; ?></li>
                                        <li><?php echo $site_data->email; ?></li>
                                        <li>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>" class="big-logo"><img src="<?php echo base_url();?>assets/home/img/logo/<?php echo $site_data->Logo; ?>" alt=""><?php echo $site_data->Title; ?></a>
                                    <!-- logo-2 -->
                                    <a href="<?php echo base_url();?>main" class="small-logo"><img src="<?php echo base_url();?>assets/home/img/logo/loder-logo.png" alt=""><?php echo $site_data->Title; ?></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>">Home</a></li>
                                            <li><a href="<?php echo base_url();?>services/<?php echo $site_data->Title; ?>">
                                                <?php  
                                            if ($site_data->Title=='cement and concrete') {?>
                                                Material

                                          <?php  }else{?>
                                                <?php echo $site_data->Title;}?>
                                           <?php if ($site_data->Title=='bricks') {?>
                                                Providers
                                          <?php  }
                                        elseif ($site_data->Title=='construction') {?>
                                                Masters
                                          <?php  }
                                         elseif ($site_data->Title=='cement and concrete') {?>
                                                Suppliers

                                          <?php  }
                                          else
                                          {
                                            echo "";
                                          }
                                        ?></a></li>
                                         <li><a href="<?php echo base_url();?>projects/<?php echo $site_data->Title; ?>">Projects</a></li>
                                            <li><a href="<?php echo base_url();?>blogs/<?php echo $site_data->Title; ?>">Blog</a>
                                              <!--   <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                </ul> -->
                                            </li>
                                           <!--  <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="project_details.html">Projects Details</a></li>
                                                    <li><a href="services_details.html">Services Details</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="<?php echo base_url();?>about/<?php echo $site_data->Title; ?>">About</a></li>
                                            <li><a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/register" class="btn">Register Now</a> 


                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
 