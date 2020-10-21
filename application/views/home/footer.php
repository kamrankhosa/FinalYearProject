<footer>
        <!-- Footer Start-->
        <div class="footer-main">
                <div class="footer-area footer-padding">
                    <div class="container">
                        <div class="row  justify-content-between">
                            <div class="col-lg-4 col-md-4 col-sm-8">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Quick Links</h4>
                                        <ul>
                                            <li><a href="<?php echo base_url();?>about/<?php echo $site_data->Title; ?>">About</a></li>
                                            <li><a href="<?php echo base_url();?>services/<?php echo $site_data->Title; ?>">Services</a></li>
                                            <li><a href="<?php echo base_url();?>projects/<?php echo $site_data->Title; ?>">Projects</a></li>
                                            <li><a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Contact</h4>
                                        <div class="footer-pera">
                                            <p class="info1"><?php echo $site_data->Address; ?></p>
                                        </div>
                                        <ul>
                                            <li><a href="tel:<?php echo $site_data->Phone_number; ?>">Phone: +<?php echo $site_data->Phone_number; ?></a></li>
                                            <li><a href="mailto:<?php echo $site_data->email; ?>">Email: <?php echo $site_data->email; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank" action="abc.php" method="get" class="subscribe_form relative mail_part" novalidate="">
                                                <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                                <div class="form-icon">
                                                    <input style="background-color: red;" type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm" value="SUBSCRIBE">
                                                        
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Map -->
                                    <div class="map-footer">
                                        <img src="assets/img/gallery/map-footer.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Copy-Right -->
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right">
                                    <p>
  Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Kamran Hyder</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Footer End-->
    </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo base_url();?>assets/home/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?php echo base_url();?>assets/home/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?php echo base_url();?>assets/home/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?php echo base_url();?>assets/home/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="<?php echo base_url();?>assets/home/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="<?php echo base_url();?>assets/home/js/wow.min.js"></script>
		<script src="<?php echo base_url();?>assets/home/js/animated.headline.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo base_url();?>assets/home/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url();?>assets/home/js/jquery.sticky.js"></script>
               
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.counterup.min.js"></script>

        <!-- contact js -->
        <script src="<?php echo base_url();?>assets/home/js/contact.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.form.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/mail-script.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo base_url();?>assets/home/js/plugins.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/main.js"></script>
        <script>
            window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
        </script>
    </body>
</html>