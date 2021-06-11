
<!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/home" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p> 
               Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/agenda" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p> 
               Post DATA RTRTW
                <span class="right badge badge-danger" style="background-color: green">250</span>
              </p>
            </a>
          </li>
          
          
     
          <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/login" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
               Logout
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
              
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 <!-- <div class="content-wrapper">
     Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>