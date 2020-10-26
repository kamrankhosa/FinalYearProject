 <?php require 'header.php'; ?>
 <div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">
 <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
              <div class="row">
                    <div class="col-lg-12">
                        <div class="cards__heading">
                    <h3>Editing Blog
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
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8 jumbotron bg-success">

<form action="<?php echo base_url(); ?>admin/update_blog" method="post" enctype="multipart/form-data">
			<input type="text" name="id" hidden="" value="<?php echo $blog->ID; ?>">
               <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Heading</label>
                            <input type="text" class="form-control input-style" aria-describedby="emailHelp" placeholder="Enter Heading" required="" name="heading" value="<?php echo $blog->Name; ?>">
                            
                        </div>
              
               
              <div class="input-group-icon mt-10">
                <label for="type">Blog type</label>

              </div>
            <div class="form-group">
             <select class="custom-select input-style" required name="type">
                <option selected="" value="<?php echo $blog->Type; ?>"><?php echo $blog->Type; ?></option>
                  <option value="bricks" <?php if ($blog->Type=='bricks') {
                  	echo "hidden";
                  }; ?>>Bricks</option>
                  <option value="construction" <?php if ($blog->Type=='construction') {
                  	echo "hidden";
                  }; ?>>Construction</option>
                  <option value="cement and concrete" <?php if ($blog->Type=='cement and concrete') {
                  	echo "hidden";
                  }; ?>>Cement and Concrete</option>
                  </select>
                </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="editorInput" class="single-textarea" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required><?php echo $blog->Description; ?></textarea>
              </div>
              <div class="form-group">
              <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="BlogProfile">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                      </div>
              <div class="form-group row">
                            <div class="col-sm-5">
                            </div>
                            <br>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-primary btn-style" value="Update Blog" name="update_blog">
                            </div>
                        </div>
            </form>
        </div>
    </div>

            </div>
        </div>
    </div>
</div>




 <?php require 'footer.php'; ?>
