<?php $this->load->view('site_ajax.php'); ?>
<footer class="dashboard bg-white">
  <p>&copy 2020 Banado. All Rights Reserved | Design by <a href="https://web.facebook.com/kamrankhosa007/" target="_blank">Kamran Hyder</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->
<script src="<?php echo base_url(); ?>assets/admin/plugins//ckeditor/ckeditor.js"></script>
           <script>
  var editor=CKEDITOR.replace( 'editorInput',{
    extraPlugins : 'filebrowser',
    filebrowserBrowseUrl:'browser.php?type=Images',
    filebrowserUploadMethod:"form",
    filebrowserUploadUrl:"<?php echo base_url(); ?>admin/imageUpload"
  });
</script>

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

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="<?php echo base_url(); ?>assets/admin/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>

    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
 <!--    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
    <script>
            window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
        </script>
</body>

</html>