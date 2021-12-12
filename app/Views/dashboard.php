<!DOCTYPE html>
<html>
<head>
 <?php include'template_a.php';?>
 
 </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include 'side.php';?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
       
    <!-- Main content -->
    <section class="content">

        
    <div class="row">
      <div class="col-md-3">
     <div class="box-header">
        
      </div>
       </div>
  <div class="col-md-12">


    
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><?php  $session = session(); echo "Selamat Datang, ".$session->get('email'); ?></h3>

      <p></p>

 <div class="box-body">

      </div>

<div class="box-header">


      </div>


      
      <!-- /.box-body -->
    </div>
  </div>
</div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2021 <a href="http://caramengatasimasalahmu.blogspot.com/">Teknologi</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<script type="text/javascript">
  $(document).ready( function () {
      $('#berita').DataTable();
  } );
</script>


<!-- ./wrapper -->
<script src="<?php echo base_url();?>assets/admin/dist/js/app.min.js"></script>

</body>


</html>