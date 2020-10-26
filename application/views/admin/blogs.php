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
                                    echo 'Bricks Blogs';
                                } 
                                else if($title=='construction'){
                                    echo 'Construction Blogs';
                                } 
                                else{
                                    echo 'Cement & Concrete Blogs';
                                } ?>
                                  <button style="margin-right: 70%;" class="btn btn-success"data-toggle="modal" data-target="#exampleModalCenter">  <i class="fa fa-plus"></i> Add Blog</button>
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
                           All Blogs
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n=1; foreach ($blogs as $blog) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $n++; ?></td>
                                            <td><a href="<?php echo base_url();?>blog_details/<?php echo $blog->Type; ?>?id=<?php echo base64_encode($blog->ID); ?>" target="_blank"><?php echo $blog->Name; ?></a></td>
                                            <td><img src="<?php echo base_url(); ?>assets/home/img/david/<?php echo $blog->Image; ?>" width="60%"></td>
                                            <td><?php echo substr($blog->Description, 0,200) ; ?></td>
                                           <td><a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $blog->ID; ?>"><i class="fa fa-trash"></i> </a> 
                                            <a href="<?php echo base_url(); ?>admin/edit_blog?id=<?php echo base64_encode($blog->ID); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                    
                    <div class="modal fade" id="exampleModalCenter<?php echo $blog->ID; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Deleting Blog</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         Are you sure to delete?<br>
                         <span class="text-center"> <?php echo $blog->Name; ?></span>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <a href="<?php echo base_url();?>admin/delete_blog?id=<?php echo base64_encode($blog->ID); ?>">
                          <button type="button" class="btn btn-success">Delete Blog</button></a>
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
                                            <th>Image</th>
                                            <th>Description</th>
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
                          <h5 class="modal-title" id="exampleModalLongTitle">Adding Blog</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo base_url(); ?>register/add_blog" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Heading</label>
                            <input type="text" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter Heading" required="" name="heading">
                            
                        </div>
              
               
              <div class="input-group-icon mt-10">
                <label for="type">Blog type</label>

              </div>
            <div class="form-group">
             <select class="custom-select input-style" required name="type">
                <option selected="" disabled="">Blog type</option>
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
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required name="BlogProfile">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                      </div>
              <div class="form-group row">
                            <div class="col-sm-4">
                            </div>
                            <br>
                            <div class="col-sm-4">
                                <input type="submit" class="btn btn-primary btn-style" value="Add Blog" name="add_blog">
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
