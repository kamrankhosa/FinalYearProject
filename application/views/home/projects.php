 <?php require 'header.php'; ?>
 <?php require 'navbar.php'; ?>
 <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="<?php echo base_url(); ?>assets/home/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Our projects</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Project</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
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
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Intorior</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Recent</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Big building</a>
                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Park</a>
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
                                        <?php foreach ($projects as $project) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/<?php echo $project->Image; ?>" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="<?php echo base_url(); ?>project_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($project->ID); ?>" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="<?php echo base_url(); ?>project_details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($project->ID); ?>"><?php echo $project->Name; ?></a></h4>
                                                    <!-- <h4><a href="project_details.html">Factory</a></h4> -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FUR -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FIVE -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="<?php echo base_url(); ?>assets/home/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area End -->
    </main>
     <?php require 'footer.php'; ?>
