 <?php require 'header.php'; ?>
 <?php require 'navbar.php'; ?>
   <!-- slider Area Start-->
   <?php foreach ($details as $service) {?>
  
   <div class="slider-area ">
      <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="<?php echo base_url();?>assets/home/img/hero/about.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-cap pt-100">
                     <h2><?php echo $service->Name; ?></h2>
                     <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $service->Name; ?></a></li> 
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<!-- slider Area End-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
          <?php if (!empty($this->session->userdata('success'))) {?>
                  <div class="alert alert-success text-danger" role="alert">
                    <?php echo $this->session->userdata('success'); 
                    $this->session->unset_userdata('success');

                    ?>
                  </div>
               <?php }?>
               <?php if (!empty($this->session->userdata('success'))) {?>
                  <div class="alert alert-danger text-dark" role="alert">
                    <?php echo $this->session->userdata('error'); 
                    $this->session->unset_userdata('error');
                    ?>
                  </div>
               <?php }?>
         <div class="row">

            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo base_url();?>assets/home/cho base_url();?>assets/home/img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $service->Name; ?>
                     </h2>
                        <?php echo $service->Description; ?>
                   
                     
                     <?php echo $service->About; ?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <!-- <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p>
                     </div> -->
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>
                 <!--  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
              <!--  <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="<?php echo base_url();?>assets/home/img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>Harvard milan</h4>
                        </a>
                        <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                           our dominion twon Second divided from</p>
                     </div>
                  </div>
               </div> -->
               <div class="comments-area">
                  <!-- <h4>05 Comments</h4> -->
                  <?php $id=base64_decode($this->input->get('id'));
                  $comments=get_comment($id,5)->result();
                   foreach ($comments as $comment) { 
                     $sender_detail=get_users_detials($comment->Sender_id)->row();
                     ?>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <!-- <?php echo base_url(); ?>assets/home/img/service/<?php echo $sender_detail->Image; ?> -->
                              <img src="<?php echo base_url(); ?>assets/home/img/service/<?php echo $sender_detail->Image; ?>" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 <?php echo $comment->Comment.'<br>'; 
                                 for ($i=0; $i< $comment->Rating; $i++) {?> 

                                 <i class="fa fa-star"></i>
                              <?php } ?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="<?php echo base_url();?>details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($sender_detail->ID); ?>"><?php echo $sender_detail->Name; ?></a>
                                    </h5>
                                    <p class="date"><?php $date=strtotime($comment->Sent_on);
                                    echo date('M d , Y h:i:s',$date);
                                     ?>  </p>
                                 </div>
                                 <!-- <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
                 
               </div>
               <?php if (!empty($this->session->userdata('active_user'))) { ?>
               <div class="comment-form">
                  <h4>Send feedback</h4>
                  <form class="form-contact comment_form" action="<?php echo base_url(); ?>register/user_comment" id="commentForm" method="post">
                     <div class="row">
                        <input type="text" name="sender_id" value="<?php echo $this->session->userdata('active_user');?>" hidden="">
                        <input type="text" name="reciever_id" value="<?php echo base64_decode($this->input->get('id')); ?>" hidden="">
                        <div class="col-sm-4">
                           <label>Your Rating</label>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <select class="form-control" name="rating" id="name" title="Ratings" required="">
                                 <option selected="" disabled="">Ratings</option>
                                 <option value="1">1 Star</option>
                                 <option value="2">2 Stars</option>
                                 <option value="3">3 Stars</option>
                                 <option value="4">4 Stars</option>
                                 <option value="5">5 Stars</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12">
                           <label>Your feedback</label>
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment" required=""></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn" name="send">Send Message</button>
                     </div>
                  </form>
               </div>
            <?php } else{ ?>
               <div class="form-group">
                       <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/login"> <button class="button button-contactForm btn_1 boxed-btn" name="send">Send Feedback</button></a>
                    </div>
            <?php } ?>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="<?php echo base_url(); ?>register/<?php echo $site_data->Title; ?>/search_user" method="get">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" name="searching">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Personal Info</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>Phone Number</p>
                              <p style="padding-left: 50px;"><?php echo $service->Phone_number; ?></p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Email</p>
                              <p style="padding-left: 50px;"><?php echo $service->Email; ?></p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Location</p>
                              <p style="padding-left: 50px;"><?php echo $service->Location; ?></p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Distance</p>
                              <p style="padding-left: 50px;">21 km</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Available</p>
                              <p style="padding-left: 50px;">Yes</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Related Service Providers</h3>
                     <?php $users=get_users($site_data->Title,5)->result(); 
                     foreach ($users as $user) { ?>
                     <div class="media post_item">
                        <img src="<?php echo base_url();?>assets/home/img/service/<?php echo $user->Image; ?>" alt="post" width="30%">
                        <div class="media-body">
                           <a href="<?php echo base_url();?>details/<?php echo $site_data->Title; ?>?id=<?php echo base64_encode($user->ID); ?>">
                              <h3><?php echo $user->Name; ?></h3>
                           </a>
                           <p><?php $date=strtotime($user->Registered_date);
                                    echo date('M d , Y',$date);
                                     ?></p>
                        </div>
                     </div>
                  <?php } ?>
                     
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/home/img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="<?php echo base_url(); ?>register/<?php echo $site_data->Title; ?>/news_later" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required name="email">
                                </div>
                                <input class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit" value="Subscribe" name="send">
                            </form>
                        </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
  <?php } ?>

   <!--================ Blog Area end =================-->
 <?php require 'footer.php'; ?>
