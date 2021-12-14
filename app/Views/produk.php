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
        <h3 class="box-title">Data Produk</h3>

<p></p>
    <a data-toggle="modal" data-target="#modal-tambah">
      <button class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Produk</button>

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
        <table id="berita" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>

            <th>No</th>
            <th>Nama Produk</th>

            <th>Harga</th>
            <th>Deskripsi</th>

            <th>Gambar</th>

            <th>Kategori</th>
            
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
  <td><?php echo $row['nama_produk']; ?></td>


            <td><?php echo $row['harga']; ?></td>

            <td><?php echo $row['deskripsi']; ?></td>
<td><img width="100px" height="100px" src="<?php echo 'gambar/'.$row['gambar']; ?>"> </td>
            <td><?php echo $row['kategori']; ?></td>
            
            <td>
        

 <a data-toggle="modal" data-target="#modal-edit<?=$row['id_produk'];?>" button class="btn btn-info btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o"></i></a>

 <a data-toggle="modal" data-target="#modal-hapus<?=$row['id_produk'];?>" button class="btn btn-danger btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>

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
  <div id="modal-hapus<?=$row['id_produk'];?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="produk/hapus_produk/<?=$row['id_produk'];?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data Produk</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row['id_produk'];?>" name="id_kategori" class="form-control" >


          <input type="hidden" readonly value="<?=$row['gambar'];?>" name="gambar" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menghapus Data Produk...???</label>
            
            <label>"<?=$row['nama_produk'];?>"</label>
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
 
<form action="produk/tambah_produk" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Produk</h4>
        </div>
        <div class="modal-body">
 
           <div class="form-group">
            <label>Nama Produk</label>
          <input type="text" name="nama_produk" autocomplete="off" required placeholder="Masukkan Nama Produk" class="form-control" cols="30" rows="3">
          </div>

          <div class="form-group">
            <label>Harga</label>
          <input type="text" name="harga" autocomplete="off" required placeholder="Masukkan Harga" class="form-control" cols="30" rows="3">
          </div>

           <div class="form-group">
            <label>Deskripsi</label>
          
          <textarea name="deskripsi" cols="3" rows="3" class="form-control" ></textarea>
          </div>
 <div class="form-group">
            <label>Gambar</label>
         <input type="file" name="gambar" required="" class="form-control">
      
          </div>

          <div class="form-group">
            <label>Kategori</label>
           <input type="text" name="kategori" autocomplete="off" required placeholder="Masukkan Kategori" class="form-control" cols="30" rows="3">
         
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
  <div id="modal-edit<?=$row['id_produk'];?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="produk/edit_produk/<?=$row['id_produk'];?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Produk</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row['id_produk'];?>" name="id_kategori" class="form-control" >
 
  


         <div class="form-group">
            <label>Nama Produk</label>
     
           <input type="text" name="nama_produk" autocomplete="off" value="<?=$row['nama_produk'];?>" required placeholder="Masukkan Nama Produk" class="form-control" cols="30" rows="3">
          
          </div>   

            <div class="form-group">
            <label>Harga</label>
     
           <input type="text" name="harga" autocomplete="off" value="<?=$row['harga'];?>" required placeholder="Masukkan Harga" class="form-control" cols="30" rows="3">
          
          </div>    
       
           <div class="form-group">
            <label>Deskripsi</label>
     <textarea class="form-control" cols="3" rows="3" name="deskripsi" <?=$row['deskripsi'];?> ></textarea>
          
          </div>  

           <div class="form-group">
            <label>Kategori</label>

            <input type="text" name="kategori" autocomplete="off" value="<?=$row['kategori'];?>"placeholder="Masukkan Kategori" class="form-control">
          
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
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i>Edit</button>
          </div>
        </form>

     </div>
  </div>
</div>
        <?php } ?>
</html>