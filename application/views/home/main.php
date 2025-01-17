 <?php require 'header.php'; ?>
 <?php require 'navbar.php'; ?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="<?php echo base_url();?>assets/home/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">hand car wash and detailing service</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2><?php echo $site_data->slider_text; ?></h2>
                                        <h2><?php echo $site_data->slider_text; ?></h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                       <span><a href="services.html">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="<?php echo base_url();?>assets/home/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">hand car wash and detailing service</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="<?php echo base_url();?>services/<?php echo $site_data->Title; ?>">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Area Start -->
        <div class="services-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">

                            <div class="front-text">
                                <h2 class="">
                                <?php if($site_data->Title=='bricks'){
                                    echo 'Bricks Provider';
                                } 
                                else if($site_data->Title=='construction'){
                                    echo 'Construction Labour';
                                } 
                                else{
                                    echo 'Cement & Concrete Dealers';
                                } ?>

                               </h2>
                            </div>
                            <span class="back-text">Services</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if(empty($services)){?>
                        <div class="alert alert-danger text-dark text-center" role="alert">
                       <h3>Record not found</h3>
                   </div>
                   <?php } ?>
                    <?php foreach ($services as $service) {
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="<?php echo base_url();?>assets/home/img/service/<?php echo $service->Image; ?>" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="<?php echo base_url();?>details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($service->ID); ?>"><?php echo $service->Name; ?></a></h4>
                                <a href="<?php echo base_url();?>details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($service->ID); ?>" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="<?php echo base_url();?>assets/home/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                <?php }?>
                
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- About Area Start -->
        <section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Who we are</h2>
                        </div>
                        <span class="back-text">About us</span>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top"><?php echo substr($about_section->Description, 0,150); ?></p>
                        <p><?php echo substr($about_section->Description, 151); ?></p>
                        <a href="<?php echo base_url();?>about/<?php echo $site_data->Title; ?>" class="btn red-btn2">read more</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="<?php echo base_url();?>assets/home/img/gallery/<?php echo $about_section->Image; ?>" alt="">
                    </div>
                    <div class="support-img-cap text-center">
                        <span>1994</span>
                        <p>Since</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Project Area Start -->
        <section class="project-area  section-padding30">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Our Projects</h2>
                                </div>
                                <span class="back-text">Gellary</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->                                            
                                <nav> 
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> Show  all </a>
                                        <?php foreach ($categories as $category) {
                                          ?>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#<?php echo $category->Category ?>" role="tab" aria-controls="<?php echo $category->Category ?>" aria-selected="false"> <?php echo $category->Category ?></a>
                                      <?php } ?>
                                       
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="project-caption">
                                    <div class="row">
                                        <?php foreach ($projects_section as $project) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url();?>assets/home/img/gallery/<?php echo $project->Image ?>" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="<?php echo base_url(); ?>project_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($project->ID); ?>" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="<?php echo base_url(); ?>project_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($project->ID); ?>"><?php echo $project->Name ?></a></h4>
                                                    <!-- <h4><a href="project_details.html">Factory</a></h4> -->
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->

                            <?php foreach ($categories as $cat) {
                              ?>
                            <div class="tab-pane fade" id="<?php echo $cat->Category; ?>" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <?php $cats=get_projects_with_category($cat->Category,$cat->Type)->result();
                                        foreach ($cats as $single_project) {
                                         ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url();?>assets/home/img/gallery/<?php echo $single_project->Image ?>" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="<?php echo base_url(); ?>project_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($single_project->ID); ?>" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="<?php echo base_url(); ?>project_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($project->ID); ?>"><?php echo $single_project->Name ?></a></h4>
                                                    <!-- <h4><a href="project_details.html">Factory</a></h4> -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                            <!-- End of one section here -->

                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area End -->
        <!-- contact with us Start -->
        <section class="contact-with-area" data-background="<?php echo base_url();?>assets/home/img/gallery/section-bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
                        <div class="contact-us-caption">
                            <div class="team-info mb-30 pt-45">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle4">
                                    <div class="front-text">
                                        <h2 class="">Let's talk with us</h2>
                                    </div>
                                    <span class="back-text">Let`s chat</span>
                                </div>
                                <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.</p>
                                <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/contact/" class="white-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact with us End-->
        <!-- CountDown Area Start -->
        <div class="count-area">
            <div class="container">
                <div class="count-wrapper count-bg" data-background="<?php echo base_url();?>assets/home/img/gallery/section-bg3.jpg">
                    <div class="row justify-content-center" >
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter"><?php echo count_users($site_data->Title); ?></span>
                                    </div>
                                    <div class="count-text">
                                        <p><?php echo $site_data->Title;?> </p>
                                           <?php if ($site_data->Title=='bricks') {?>
                                                <h5>Providers</h5>
                                          <?php  }
                                        elseif ($site_data->Title=='construction') {?>
                                                <h5>Masters</h5>
                                          <?php  }
                                         elseif ($site_data->Title=='cement and concrete') {?>
                                                <h5>Suppliers</h5>

                                          <?php  }
                                          else
                                          {
                                            echo "";
                                          }
                                        ?>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter"><?php echo count_projects($site_data->Title); ?></span>
                                    </div>
                                    <div class="count-text">
                                        <p>Projects</p>
                                        <h5>Completed</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter"><?php echo count_team_members($site_data->Title); ?></span>
                                    </div>
                                    <div class="count-text">
                                        <p>Team</p>
                                        <h5>Members</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CountDown Area End -->
        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5 mb-50">
                            <div class="front-text">
                                <h2 class="">Our team</h2>
                            </div>
                            <span class="back-text">exparts</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <?php foreach ($team_members as $member) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="<?php echo base_url();?>assets/home/img/team/<?php echo $member->Image ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <span><?php echo $member->Designation ?></span>
                                <h3><?php echo $member->Name ?></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                   
                </div>
            </div>
        </div>
        <!-- Team End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Testimonial</h2>
                            </div>
                            <span class="back-text">Feedback</span>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <?php foreach ($testominals as $testominal) { ?>
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p><?php echo $testominal->Message;?></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span><?php echo $testominal->Name;?></span>
                                            <p><?php echo $testominal->Designation;?></p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                           
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!--latest Nnews Area start -->
        <div class="latest-news-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle7 mb-50">
                            <div class="front-text">
                                <h2 class="">latest news</h2>
                            </div>
                            <span class="back-text">Our Blog</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($latest_new as $news) { ?>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-news -->
                        <div class="single-news mb-30">
                            <div class="news-img">
                                <img src="<?php echo base_url();?>assets/home/img/david/<?php echo $news->Image; ?>" alt="">
                                <div class="news-date text-center">
                                    <span><?php $date=strtotime($news->Added_date);
                                    echo date('d',$date);
                                     ?></h3>
                                    </span>
                                    <p><?php echo date('M',$date); ?></p>
                                </div>
                            </div>
                            <div class="news-caption">
                                <ul class="david-info">
                                    <li> | &nbsp; &nbsp;  <?php echo $site_data->Title; ?></li>
                                </ul>
                                <h2><a href="<?php echo base_url();?>blog_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($news->ID); ?>"><?php echo $news->Name; ?></a></h2>
                                <a href="<?php echo base_url();?>blog_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($news->ID); ?>" class="d-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    
               </div>
            </div>
        </div>
        <!--latest News Area End -->

    </main>
     <?php require 'footer.php'; ?>
