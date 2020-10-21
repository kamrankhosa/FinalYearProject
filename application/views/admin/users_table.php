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
                                } ?></h3>
    </div>
                    </div>
                </div>
 
                <hr />
<div class="row">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
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
                                            <td><?php echo $user->Name; ?></td>
                                            <td><?php echo $user->Phone_number; ?></td>
                                            <td><?php echo $user->Email; ?></td>
                                            <td><?php echo $user->Location; ?></td>
                                            <td class="center"><img src="<?php echo base_url(); ?>assets/home/img/service/<?php echo $user->Image; ?>" width="20%"></td>
                                             <td onclick="change_status()"> <?php if ($user->Status==0) {
                                             echo "<i class='btn btn-primary fa fa-eye-slash' title='Email not verified'></i>";
                                          }  
                                          else if ($user->Status==1) {
                                             echo "<i class='btn btn-success fa fa-eye' title='Active'></i>";
                                          } else if ($user->Status==2) {
                                             echo "<i class='btn btn-danger fa fa-ban' title='Blocked'></i>";
                                          }  ?> 
                                          </td>
                                            <td> <?php if ($user->show_to_front==0) {
                                             echo "<i class='btn btn-info fa fa-eye-slash' title='Not showing to the front'></i>";
                                          }  
                                          else if ($user->show_to_front==1) {
                                             echo "<i class='btn btn-success fa fa-eye' title='Showing to the front'></i>";
                                          } ?>
                                      </td>
                                           <td><a href="<?php echo base_url();?>admin/delete_user?id=<?php echo base64_encode($user->ID); ?>" onclick=""><i class="fa fa-trash"></i> </a> | <a href=""><i class="fa fa-pencil"></i></a></td>
                                        </tr>
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

     <!--END MAIN WRAPPER -->
 <?php require 'footer.php'; ?>
