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
        <h3 class="box-title">Data Kategori</h3>

<br>
    <a data-toggle="modal" data-target="#modal-tambah">
      <button class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Kategori</button><br><br>
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
            <th>Nama Kategori</th>

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
  <td><?php echo $row['nama_kategori']; ?></td>


            <td><?php echo $row['status']; ?></td>
            
            <td>
        

 <a data-toggle="modal" data-target="#modal-edit<?=$row['id_kategori'];?>" button class="btn btn-info btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o"></i></a>

 <a data-toggle="modal" data-target="#modal-hapus<?=$row['id_kategori'];?>" button class="btn btn-danger btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>

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
  <div id="modal-hapus<?=$row['id_kategori'];?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="kategori/hapus_kategori/<?=$row['id_kategori'];?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data Kategori</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row['id_kategori'];?>" name="id_kategori" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menghapus Data Kategori...???</label>
            
            <label>"<?=$row['nama_kategori'];?>"</label>
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
 
<form action="kategori/tambah_kategori" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Kategori</h4>
        </div>
        <div class="modal-body">
 
           <div class="form-group">
            <label>Nama Kategori</label>
          <input type="text" name="nama_kategori" autocomplete="off" required placeholder="Masukkan Nama Kategori" class="form-control" cols="30" rows="3">
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
  <div id="modal-edit<?=$row['id_kategori'];?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="kategori/edit_kategori/<?=$row['id_kategori'];?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Kategori</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row['id_kategori'];?>" name="id_kategori" class="form-control" >
 
  


         <div class="form-group">
            <label>Nama Kategori</label>
     
           <input type="text" name="nama_kategori" autocomplete="off" value="<?=$row['nama_kategori'];?>" required placeholder="Masukkan Kategori" class="form-control" cols="30" rows="3">
          
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