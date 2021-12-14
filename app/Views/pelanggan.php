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
        
        <small>Control Panel</small>
      

    </section>
    
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
        <h3 class="box-title">Data Pelanggan</h3>

<p></p>
    <a data-toggle="modal" data-target="#modal-tambah">
      <button class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Pelanggan</button>

    </a>

 <?php
    if(session()->getFlashData('msg')){
    ?>
     <?= session()->getFlashData('msg') ?>
       
       
    <?php
    }
    ?>
      <p></p>

 <div class="box-body">

      </div>

<div class="box-header">

      </div>

      <!-- /.box-header -->
      <div class="box-body">
        <table id="berita" class="table table-striped table-dark" cellspacing="0" width="100%">
          <thead>
          <tr>

            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>No Telp</th>

            <th>email</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <?php 
         $no=1;
          foreach ($data as $row) {
               
           ?>
          <tr>

  <td><?php echo $no++; ?></td>
  <td><?php echo $row['nama']; ?></td>

  <td><?php echo $row['no_telp']; ?></td>

  <td><?php echo $row['email']; ?></td>


            <td><?php echo $row['status']; ?></td>
            
            <td>
        

 <a data-toggle="modal" data-target="#modal-edit<?=$row['id_pelanggan'];?>" button class="btn btn-info btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o"></i></a>

 <a data-toggle="modal" data-target="#modal-hapus<?=$row['id_pelanggan'];?>" button class="btn btn-danger btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
          <?php } ?>

          </tbody>
          
        </table>
         

      <!-- Modal hapus -->
<?php 

          foreach ($data as $row) {
           ?>

  <div class="row">
  <div id="modal-hapus<?=$row['id_pelanggan'];?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="pelanggan/hapus_pelanggan/<?=$row['id_pelanggan'];?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data Pelanggan</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row['id_pelanggan'];?>" name="id_kategori" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menghapus Data...???</label>
            
            <label>"<?=$row['nama'];?>"</label>
          </div>
          
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Hapus</button>
          </div>
        </form>

     </div>
  </div>
</div>
        <?php } ?>




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

<!--/ Modal Tambah -->
<div class="row">
  <div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
 
<form action="pelanggan/tambah_pelanggan" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Pelanggan</h4>
        </div>
        
               <div class="modal-body">
 

         <div class="form-group">
            <label>Nama Pelanggan</label>
     
           <input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama" class="form-control" cols="30" rows="3">
          
          </div>  
          <div class="form-group">
            <label>No Telp</label>
     
           <input type="text" name="no_telp" autocomplete="off" required placeholder="Masukkan No Telp" class="form-control" cols="30" rows="3">
          
          </div>  <div class="form-group">
            <label>Email</label>
     
           <input type="text" name="email" autocomplete="off" required placeholder="Masukkan Email" class="form-control">
          
          </div> 
          <div class="form-group">
            <label>Password</label>
     
           <input type="password" name="password" autocomplete="off" required placeholder="Masukkan Password" class="form-control">
          
          </div>  
          <div class="form-group">
            <label>Status</label>
     <select name="status" class="form-control">

<option value="0">0</option>

       <option value="1">1</option>
     </select>
          
          </div>         
           
        </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Simpan</button>
          </div>
        </form>

     </div>
  </div>
</div>

<!--end modal tambah -->
<!--/modal ubah-->

<?php 
          foreach ($data as $row) {
           ?>

  <div class="row">
  <div id="modal-edit<?=$row['id_pelanggan'];?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="pelanggan/edit_pelanggan/<?=$row['id_pelanggan'];?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Pelanggan</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row['id_pelanggan'];?>" name="id_kategori" class="form-control" >
 
  


         <div class="form-group">
            <label>Nama Pelanggan</label>
     
           <input type="text" name="nama" autocomplete="off" value="<?=$row['nama'];?>" required placeholder="Masukkan Nama" class="form-control" cols="30" rows="3">
          
          </div>  
          <div class="form-group">
            <label>No Telp</label>
     
           <input type="text" name="no_telp" autocomplete="off" value="<?=$row['no_telp'];?>" required placeholder="Masukkan No Telp" class="form-control" cols="30" rows="3">
          
          </div>  <div class="form-group">
            <label>Email</label>
     
           <input type="text" name="email" autocomplete="off" value="<?=$row['email'];?>" required placeholder="Masukkan Email" class="form-control">
          
          </div>  
          <div class="form-group">
            <label>Status</label>
     <select name="status" class="form-control">
       <option value="<?=$row['status'];?>"><?=$row['status'];?></option>
<option value="0">0</option>

       <option value="1">1</option>
     </select>
          
          </div>         
           
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i>Edit</button>
          </div>
        </form>

     </div>
  </div>
</div>
        <?php } ?>
</html>