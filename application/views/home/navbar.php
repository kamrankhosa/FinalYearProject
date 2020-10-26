
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
                                    <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>" class="small-logo"><img src="<?php echo base_url();?>assets/home/img/logo/loder-logo.png" alt=""><?php echo $site_data->Title; ?></a>
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
                                <?php if (!empty($this->session->userdata('active_user'))) { ?>
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                           <li><a href="#">Account <i class="fa fa-user"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo base_url();?>details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($this->session->userdata('active_user')); ?>">Profile </a></li>
                                                    <li><a href="#" data-toggle="modal"
                    data-target="#profileSetting">Setting</a></li>
                                                    <li><a href="<?php echo base_url();?>user_logout/<?php echo $site_data->Title; ?>">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                        <?php } else {?>
                             <div class="header-right-btn f-right d-none d-lg-block">
                                 <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                           <li><a href="#">User <i class="fa fa-user"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/register">Register </a></li>
                                                    <li><a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/login">Login</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                    <!-- <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/register" class="btn">Register Now</a>  -->


                            </div>
                            

                        <?php } ?>
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

    <!-- Profile setting after login -->
<?php if (!empty($this->session->userdata('active_user'))) { 
    $user_details=get_users_detials($this->session->userdata('active_user'))->row();

    ?>
    <div class="col-lg-8 pr-lg-2 chart-grid">
                <div class="card-body">
                  <div class="modal fade" id="profileSetting" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Update your profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo base_url(); ?>register/update_user_profile" method="post" enctype="multipart/form-data">
                            <?php $data=explode(' ', $user_details->Name);?>
                            <div class="mt-10">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" placeholder="First Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                                    class="single-input" value="<?php echo $data[0];?>">
                            </div>
                            <div class="mt-10">
                                <label for="last_name">Last Name</label>

                                <input type="text" name="last_name" placeholder="Last Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                                    class="single-input" value="<?php  if(!empty($data[2])){
echo $data[1].' '.$data[2];
                                    }else{
                                       echo $data[1];}?>">
                            </div>
                            <div class="mt-10">
                                <label for="phone">Phone Number</label>
                            </div>
                                <div class="input-group-icon mt-10">

                                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <input type="text" name="phone" placeholder="Phone Number"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required
                                    class="single-input" value="<?php echo $user_details->Phone_number; ?>">
                            </div>
                            <div class="input-group-icon mt-10">
                                <label for="address">Address</label>

                            </div>
                            <div class="input-group-icon mt-10">

                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Address'" required class="single-input" value="<?php echo $user_details->Location; ?>">
                            </div>
                            <div class="mt-10">
                                <label for="description">Description</label>
                                <textarea name="editorInput" class="single-textarea" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required><?php echo $user_details->Description; ?></textarea>
                            </div>
                            
                            <div class="mt-10">
                                <label for="profile">Profile</label>
                                <input type="file" name="profile" placeholder="Primary color"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Profile'" class="single-input-primary">
                            </div>
                            
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
 <?php } ?>