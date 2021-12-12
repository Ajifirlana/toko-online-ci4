      <?php include'template_a.php';?>
<body class="hold-transition login-page">



<div class="login-box">
  <div class="login-logo">
   
    
   <h3>E-Catering JN RESTO</h3>
   
   

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
<div align="center">
	    <img src="" width="100px" height="100px">

</div>

    <p class="login-box-msg">Silahkan login di bawah ini.</p>

    <form action="/home/auth" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" id="user" placeholder="Username" autofocus required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div align="center" class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="kirim" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
      </div>

 <?php
    if(session()->getFlashData('msg')){
    ?>
     <?= session()->getFlashData('msg') ?>
       
       
    <?php
    }
    ?>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
