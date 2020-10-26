<?php include 'header.php'; ?>
 <?php require 'navbar.php'; ?>
 <main>

        <!-- About Area Start -->
        <section class="support-company-area fix pt-150">
      
<div class="section-top-border">
				<div class="row">
					
				<div class="col-lg-3 col-md-3">
					</div>
					
					<div class="col-lg-6 col-md-6" style="box-shadow: 5px 5px 5px 5px transparent; border-left:10px solid white; border-radius: 15px;">
						<?php if (!empty($this->session->userdata('success'))) {?>
						<div class="alert alert-success text-danger" role="alert">
						  <?php echo $this->session->userdata('success'); 
						  $this->session->unset_userdata('success');

						  ?>
						</div>
					<?php }?>
					<?php if (!empty($this->session->userdata('error'))) {?>
						<div class="alert alert-danger text-dark" role="alert">
						  <?php echo $this->session->userdata('error'); 
						  $this->session->unset_userdata('error');
						  ?>
						</div>
					<?php }?>
						<form action="<?php echo base_url(); ?>register/login" method="post" enctype="multipart/form-data" class="jumbotron">
						<h3 class="mb-30 text-center">SIGN IN HERE </h3>
							
							<div class="mt-10">
								<label for="email">Email address</label>
							</div>
								<div class="input-group-icon mt-10">

								<div class="icon"><i class="fa fa-envelope-square" aria-hidden="true"></i></div>
								<input type="email" name="email" placeholder="Email address"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
									class="single-input">
							</div>

							<div class="mt-10">
								<label for="email">Password</label>
							</div>
								<div class="input-group-icon mt-10">

								<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
								<input type="password" name="password" placeholder="Password"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
									class="single-input">
							</div>
							<div>
								<label class="mt-30">Don't have an account?<a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/register"> Click Here</a></label>
								<label class="mt-30 pl-200"><a href="#" data-toggle="modal"
                    data-target="#passwordRecover"> Forget Password</a></label>
							</div>
									<div class="button-group-area mt-40 text-center">
							<button type="submit" class="genric-btn primary e-large">SIGN IN</button>
								</div>
						</form>
					</div>
				</div>
			</div>
					
				</div>
			</div>
              <div class="col-lg-6 pr-lg-2 chart-grid">
                <div class="card-body">
                  <div class="modal fade" id="passwordRecover" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Recover Password</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo base_url(); ?>register/user_forget_password" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label input__label">Enter Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control input-style" id="inputEmail3" placeholder="Email" name="email">
                            </div>
                        </div>
                     
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Recover Password</button>
                        </div>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </main>
<?php include 'footer.php'; ?>