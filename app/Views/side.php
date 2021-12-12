<header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     <span class="logo-lg"><b>E-Catering JN RESTO</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
           
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php  $session = session(); echo "Selamat Datang, ".$session->get('email'); ?></p>
              </li>
        
              </li>
              <!-- Menu Footer-->

            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    
        
      <ul class="sidebar-menu">

        <li class="header">DATA MASTER</li>
        
        

<li class="treeview">
          <a href="kategori">
             <i class="fa fa-files-o"></i> <span>Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>

<li class="treeview">
          <a href="produk">
             <i class="fa fa-files-o"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>index.php/dashboard/anak_terapis">
           <i class="fa fa-files-o"></i> <span>Pelanggan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>index.php/dashboard/jadwal_terapis">
           <i class="fa fa-files-o"></i> <span>Pesanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
         

     
         
       
      <li class="treeview">
          <a href="home/logout">
            <i class="fa fa-user"></i> <span>Logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
        </ul>

    
    </section>
    <!-- /.sidebar -->
  </aside>