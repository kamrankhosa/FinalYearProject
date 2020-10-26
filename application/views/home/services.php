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
                                <h2>Services</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Services</a></li> 
                                    </ol>
                                </nav>
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
                                <h2 class=""> <?php if($site_data->Title=='bricks'){
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
                <nav class="blog-pagination justify-content-center d-flex">

                            <!-- <ul class="pagination"> -->

                                <?php echo $links; ?>
                                <!-- <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li> -->
                            <!-- </ul> -->
                        </nav>
            </div>
        </div>
        <!-- Services Area End -->
    </main>
    <?php require 'footer.php'; ?>
