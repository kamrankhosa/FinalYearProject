 <?php require 'header.php'; ?>
 <?php require 'navbar.php'; ?>
  <?php foreach ($details as $project) {?>
 <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="<?php echo base_url(); ?>assets/home/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2><?php echo $project->Name; ?></h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>main/<?php echo $site_data->Title; ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><?php echo $project->Name; ?></a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Details Start -->
        <div class="services-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="details-img mb-40">
                                <img src="<?php echo base_url(); ?>assets/home/img/gallery/<?php echo $project->Image; ?>" alt="">
                            </div>
                            <div class="details-caption">
                                <?php echo $project->Description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
    </main>
      <?php } ?>
     <?php require 'footer.php'; ?>
