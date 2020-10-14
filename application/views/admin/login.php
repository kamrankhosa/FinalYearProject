<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Banado-Admin Login</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin//css/style-starter.css">
 <script src="https://maps.googleapis.com/maps/api/jsvv=3.exp&sensor=false&libraries=places"></script>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body>
<section>
<div class="row">
    <div class="container-fluid content-top-gap col-lg-6" style="text-align: center;">
        <section class="forms">
        
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Admin Login <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>admin/login" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label input__label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control input-style" id="inputEmail3"
                                    placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label input__label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control input-style" id="inputPassword3"
                                    placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-9 col-form-label input__label"></label>
                            <div class="col-sm-3">
                                <a href="#" data-toggle="modal"
                    data-target="#passwordRecover">Forget Password</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-primary btn-style" value="SIGN IN" name="login">
                            </div>
                        </div>
                    </form>
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
                          <form action="#" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label input__label">Enter Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control input-style" id="inputEmail3"
                                    placeholder="Email" name="email">
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

<footer class="dashboard">
  <p>&copy 2020 Banado. All Rights Reserved | Design by <a href="#" target="_blank"
      class="text-primary">Kamran Hyder</a></p>
</footer>
<!--footer section end-->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="<?php echo base_url(); ?>assets/admin/js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="<?php echo base_url(); ?>assets/admin/js/bar.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="<?php echo base_url(); ?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>

 <script src="<?php echo base_url(); ?>assets/admin/js/modernizr.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>


</body>

</html>