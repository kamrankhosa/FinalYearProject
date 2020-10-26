<?php include 'header.php'; ?>
 <?php require 'navbar.php'; ?>
 <main>

        <!-- About Area Start -->
        <section class="support-company-area fix pt-10 pt-150">
      
<div class="section-top-border">
				<div class="row">
					<div class="col-lg-2 col-md-2">
					</div>
					<div class="col-lg-8 col-md-8 jumbotron" style="box-shadow: 5px 5px 5px 5px transparent; border-radius: 15px;">
						<h3 class="mb-30 text-center">SIGN UP HERE </h3>
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
						<form action="<?php echo base_url(); ?>register/register" method="post" enctype="multipart/form-data">
							<div class="mt-10">
								<label for="first_name">First Name</label>
								<input type="text" name="first_name" placeholder="First Name"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<label for="last_name">Last Name</label>

								<input type="text" name="last_name" placeholder="Last Name"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
									class="single-input">
							</div>
							
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
							<div class="mt-10">
								<label for="phone">Phone Number</label>
							</div>
								<div class="input-group-icon mt-10">

								<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
								<input type="text" name="phone" placeholder="Phone Number"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required
									class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<label for="address">Address</label>

							</div>
							<div class="input-group-icon mt-10">

								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Address'" required class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<label for="type">Business type</label>

							</div>
						<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-certificate" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
								<select title="Business type" name="bus_type" required="">
								<option selected="" disabled="">Business type</option>
									<option value="bricks">Bricks</option>
									<option value="construction">Construction</option>
									<option value="cement and concrete">Cement and Concrete</option>
									</select>
								</div>
							</div>
							
						

							<div class="mt-10">
								<label for="description">Description</label>
								<textarea name="editorInput" class="single-textarea" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required></textarea>
							</div>
							
							<div class="mt-10">
								<label for="profile">Profile</label>
								<input type="file" name="profile" placeholder="Primary color"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Profile'" required
									class="single-input-primary">
							</div>
							
							<div>
								<label><input type="checkbox" name="privacy" required> Accept <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/#">Terms & Conditions</a> and <a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/#">Privacy Policy.</a> </label>
								<label class="mt-30 pl-200">Already have an account.<a href="<?php echo base_url();?>main/<?php echo $site_data->Title; ?>/login"> Click here</a></label>
							</div>
							<div class="button-group-area mt-40 text-center">
						<button type="submit" class="genric-btn primary e-large">SIGN UP</button>
								</div>
						</form>
					</div>
<div class="col-lg-2 col-md-2">
					</div>
				
				</div>
			</div>
					
				</div>
			</div>
             
            </section>
        </main>
<?php include 'footer.php'; ?>