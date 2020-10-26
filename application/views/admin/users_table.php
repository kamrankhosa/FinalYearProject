 <?php require 'header.php'; ?>
 
  <!-- main content start -->
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">
 <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cards__heading">
                    <h3><?php if($title=='bricks'){
                                    echo 'Bricks Provider';
                                } 
                                else if($title=='construction'){
                                    echo 'Construction Labour';
                                } 
                                else{
                                    echo 'Cement & Concrete Dealers';
                                } ?>
                                 <button style="margin-right: 70%;" class="btn btn-success"data-toggle="modal" data-target="#exampleModalCenter">  <i class="fa fa-plus"></i> Add User</button>
                                </h3>
                               
                                
    </div>
                    </div>
                   
                </div>
 
                <hr />
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
<div class="row">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           All users
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            <th>Image</th>
                                            <th>Active</th>
                                            <th>Show to front</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n=1; foreach ($users as $user) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $n++; ?></td>
                                            <td><a href="<?php echo base_url();?>details/<?php echo $user->Type; ?>?id=<?php echo base64_encode($user->ID); ?>" target="_blank"><?php echo $user->Name; ?></a></td>
                                            <td><?php echo $user->Phone_number; ?></td>
                                            <td><?php echo $user->Email; ?></td>
                                            <td><?php echo $user->Location; ?></td>
                                            <td class="center"><img src="<?php echo base_url(); ?>assets/home/img/service/<?php echo $user->Image; ?>" width="20%"></td>
                                             <td onclick="change_status(<?php echo $user->ID; ?>)"> <?php if ($user->Status==0) {
                                             echo "<i class='btn btn-primary fa fa-eye-slash' title='Email not verified'></i>";
                                          }  
                                          else if ($user->Status==1) {
                                             echo "<i class='btn btn-success fa fa-eye' title='Active'></i>";
                                          } else if ($user->Status==2) {
                                             echo "<i class='btn btn-danger fa fa-ban' title='Blocked'></i>";
                                          }  ?> 
                                          </td>
                                            <td onclick="show_to_front(<?php echo $user->ID; ?>)"> <?php if ($user->show_to_front==0) {
                                             echo "<i class='btn btn-info fa fa-eye-slash' title='Not showing to the front'></i>";
                                          }  
                                          else if ($user->show_to_front==1) {
                                             echo "<i class='btn btn-success fa fa-eye' title='Showing to the front'></i>";
                                          } ?>
                                      </td>
                                      <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter<?php echo $user->ID; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a> 
                                       <!-- <a href="" class="btn btn-primary"><i class="fa fa-pencil"></i></a> -->
                                     </td>
                                        </tr>

                 <div class="modal fade" id="exampleModalCenter<?php echo $user->ID; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Deleting User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         Are you sure to delete?<br>
                          <?php echo $user->Name; ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <a href="<?php echo base_url();?>admin/delete_user?id=<?php echo base64_encode($user->ID); ?>">
                          <button type="button" class="btn btn-success">Delete User</button></a>
                        </div>
                      </div>
                    </div>
                  </div>

                                        <?php } ?>
                                    </tbody>
                                     <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            <th>Image</th>
                                            <th>Active</th>
                                            <th>Show to front</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
                    </div>
       <!--END PAGE CONTENT -->
 

    </div>
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Adding User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo base_url(); ?>register/register" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">First Name</label>
                            <input type="text" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter First Name" required="" name="first_name">
                            
                        </div>
              <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Last Name</label>
                            <input type="text" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter Last Name" required="" name="last_name">
                            
                        </div>
               <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Email address</label>
                            <input type="email" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" required="" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>
               <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Password</label>
                            <input type="password" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Password" required="" name="password">
                            
                        </div>
              
                <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Phone Number</label>
                            <input type="text" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Phone Number" required="" name="phone">
                        </div>
               <div class="form-group">
                            <label for="inputAddress" class="input__label">Address</label>
                            <input type="text" class="form-control input-style" id="inputAddress"
                                placeholder="1234 Main St" required="" name="address">
                        </div>
              <div class="input-group-icon mt-10">
                <label for="type">Business type</label>

              </div>
            <div class="form-group">
             <select class="custom-select input-style" required name="bus_type">
                <option selected="" disabled="">Business type</option>
                  <option value="bricks">Bricks</option>
                  <option value="construction">Construction</option>
                  <option value="cement and concrete">Cement and Concrete</option>
                  </select>
                </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="editorInput" class="single-textarea" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required></textarea>
              </div>
              <div class="form-group">
              <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required name="profile">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                      </div>
              <div class="form-group row">
                            <div class="col-sm-4">
                            </div>
                            <br>
                            <div class="col-sm-4">
                                <input type="submit" class="btn btn-primary btn-style" value="Add User">
                            </div>
                        </div>
            </form>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
     <!--END MAIN WRAPPER -->
 <?php require 'footer.php'; ?>
