<?php
if (empty($this->session->userdata('active_admin'))) {
      redirect('admin/login');
    }
 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Banado - Dashboard</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/home/img/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style-starter.css">
    <link href="<?php echo base_url(); ?>assets/admin/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" /> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  
</head>
<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="<?php echo base_url();?>admin">Banado</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div> -->
    <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="<?php echo base_url(); ?>admin" title="logo"><img src="<?php echo base_url(); ?>assets/admin/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="<?php echo base_url(); ?>admin"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
       <!--  <li class="menu-list">
          <a href="#"><i class="fa fa-cogs"></i>
            <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="carousels.html">Carousels</a> </li>
            <li><a href="cards.html">Default cards</a> </li>
            <li><a href="people.html">People cards</a></li>
          </ul>
        </li> -->
        <li class="menu-list">
          <a href="#"><i class="fa fa-users"></i>
            <span>Users <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="<?php echo base_url() ?>admin/users/bricks">Bricks Makers</a> </li>
            <li><a href="<?php echo base_url() ?>admin/users/construction">Construction Masters</a> </li>
            <li><a href="<?php echo base_url() ?>admin/users/cement and concrete">Cement & Concrete Supliers</a></li>
          </ul>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-bell-o"></i>
            <span>Blogs <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="<?php echo base_url() ?>admin/blogs/bricks">Bricks Blogs</a> </li>
            <li><a href="<?php echo base_url() ?>admin/blogs/construction">Construction Blogs</a> </li>
            <li><a href="<?php echo base_url() ?>admin/blogs/cement and concrete">Cement & Concrete Blogs</a></li>
          </ul>
        </li>
         <li class="menu-list">
          <a href="#"><i class="fa fa-clone"></i>
            <span>Projects <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="<?php echo base_url() ?>admin/projects/bricks">Bricks projects</a> </li>
            <li><a href="<?php echo base_url() ?>admin/projects/construction">Construction projects</a> </li>
            <li><a href="<?php echo base_url() ?>admin/projects/cement and concrete">Cement & Concrete projects</a></li>
          </ul>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-cogs"></i>
            <span>Settings <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <!-- <li><a href="carousels.html">Site Setting</a> </li> -->
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenterProfileSetting">Profile Setting</a> </li>
            <!-- <li><a href="cards.html">HTTP Setting</a> </li> -->
          </ul>
        </li>

    <!--     <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
        <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
        <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li> -->
        <li><a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
        <!-- <div class="search-box">
          <form action="#search-results.html" method="get">
            <input class="search-input" placeholder="Search Here..." type="search" id="search">
            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
          </form>
        </div> -->
        <div class="user-dropdown-details d-flex">
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have 3 new notifications</h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all notifications</a>
                    </div>
                  </li>
                </ul>
              </li> -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-comment-o"></i><span class="badge blue"><?php echo get_table_data('tblcontact_messages')->num_rows(); ?></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have <?php echo get_table_data('tblcontact_messages')->num_rows(); ?> new messages</h3>
                    </div>
                  </li>
                  <?php $n=1;
                  $messages=get_table_data_with_limit('tblcontact_messages',5)->result();
                  foreach ($messages as $message) {?>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar<?php echo $n++; ?>.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p><?php echo $message->Name; ?></p>
                        <span><?php $date=strtotime($message->Sent_on);
                                   echo date('M d, Y',$date);
                                     ?></span>
                      </div>
                    </a></li>
                  <?php } ?>
                  <li>
                    <div class="notification_bottom">
                      <a href="<?php echo base_url(); ?>admin/chatting" class="bg-primary">See all messages</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <img src="<?php echo base_url(); ?>assets/admin/images/<?php echo $admin->Image; ?>" class="rounded-circle" alt="" />
                    <div class="user-active">
                      <span></span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name"><?php echo $admin->Name; ?></h5>
                    <span class="status ml-2">Available</span>
                  </li>
                  <li> <a href="#" data-toggle="modal" data-target="#exampleModalCenterProfile"><i class="lnr lnr-user"></i>My Profile</a> </li>
                  <li> <a href="#" data-toggle="modal" data-target="#exampleModalCenterProfileSetting"><i class="lnr lnr-cog"></i>Setting</a> </li>
                  <li class="logout"> <a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
    <div class="modal fade" id="exampleModalCenterProfile" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-center card_border py-2">
                                <div class="card-body">
                                    <div class="team-main-19">
                        <?php $detail=get_active_admin_details()->row(); ?>

                                        <a href="#url"><img class="rounded-circle" src="<?php echo base_url();?>assets/admin/images/<?php echo $detail->Image; ?>" alt="Profile"></a>
                                        <div class="right-team-9">
                                            <div>
                                                <h5><a href="#url" class="card__title mb-2 mt-3"><?php echo $detail->Name; ?></a>
                                                </h5>
                                                <p class=""><?php echo $detail->Email; ?></p>
                                            </div>
                                            <div class="people-social mt-3">
                                                <a href="<?php echo $detail->Facebok; ?>" class="facebook" target="_blank"><span class="fa fa-facebook"></span></a>
                                                <a href="<?php echo $detail->Twitter; ?>" class="twitter" target="_blank"><span class="fa fa-twitter"></span></a>
                                                <a href="<?php echo $detail->Linkedin; ?>" class="linkedin" target="_blank"><span class="fa fa-linkedin"></span></a>
                                            </div>
                                            <!-- <a href="#url" class="btn mt-4 profile-btn text-primary" target="_blank">View profile </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModalCenterProfileSetting" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-center card_border py-2">
                                <div class="card-body">
                                    <div class="team-main-19">
                        <?php $detail=get_active_admin_details()->row(); ?>

                                        <a href="#url"><img class="rounded-circle" src="<?php echo base_url();?>assets/admin/images/<?php echo $detail->Image; ?>" alt="Profile" width="30%"></a>
                                        <div class="right-team-9" style="text-align: left;">
              <form action="<?php echo base_url(); ?>admin/update_profile" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Full Name</label>
                            <input type="text" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter Full Name" value="<?php echo $detail->Name; ?>" required="" name="fname">
                            
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Email address</label>
                            <input type="email" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" required="" name="email" value="<?php echo $detail->Email; ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>
                          <label for="exampleInputEmail1" class="input__label">Gender</label>

                         <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2"
                                name="gender" required value="Male" <?php if($detail->Gender=='Male'){ echo "checked"; } ?>>
                            <label class="custom-control-label" for="customControlValidation2">Male</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3"
                                name="gender" required <?php if($detail->Gender=='FeMale'){ echo "checked"; } ?> value="FeMale">
                            <label class="custom-control-label" for="customControlValidation3">Female</label>
                        </div>
                        <div class="form-group">
              <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="profile">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                      </div>
                      <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Facebook profile</label>
                            <input type="url" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter Facebook profile Link" value="<?php echo $detail->Facebok; ?>" required="" name="facebook">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Twitter profile</label>
                            <input type="url" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter Twitter profile Link" value="<?php echo $detail->Twitter; ?>" required="" name="twitter">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Linkedin profile</label>
                            <input type="url" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter Linkedin profile Link" value="<?php echo $detail->Linkedin; ?>" required="" name="linkedin">
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                            </div>
                            <br>
                            <div class="col-sm-4">
                                <input type="submit" class="btn btn-primary btn-style" value="Update Profile" name="update_profile">
                            </div>
                        </div>
            </form>
                                            <!-- <a href="#url" class="btn mt-4 profile-btn text-primary" target="_blank">View profile </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
