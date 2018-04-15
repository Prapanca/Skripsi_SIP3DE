<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Profil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P3DE</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI</b>P3DE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>asset/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $rows[0]->nama;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p> <?php echo $rows[0]->nama;?> <br>
                  <?php echo $rows[0]->status;?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="<?php echo base_url()?>index.php/Profil/profil"> Profil</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="<?php echo base_url();?>index.php/Home/keluar"> Keluar</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"> Status </a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a href="<?php echo base_url();?>index.php/Home/home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Pendaftaran Pasien</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/PasienBaru/PasienBaru"><i class="fa fa-circle-o"></i> Pasien Baru</a></li>
            <li><a href="<?php echo base_url();?>index.php/PasienLama/PasienLama"><i class="fa fa-circle-o"></i> Pasien Lama</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tabel Pasien</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/TabelPasien/SeluruhPasien"><i class="fa fa-circle-o"></i> Seluruh Pasien</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/LaporanHarian/Harian"><i class="fa fa-circle-o"></i> Laporan Harian</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Mingguan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Bulanan</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/TambahAnggota/tambahAnggota">
            <i class="fa fa-user-plus"></i> <span>Tambah Anggota</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profil Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
              <!--<li><a href="#timeline" data-toggle="tab"> Aktivitas Anda</a></li>-->
              <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="settings">
                <form action="" method="" class="form-horizontal">

                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Nama</label>

                      <div class="col-sm-8">
                        <input type="name" class="form-control" value="<?php echo $rows[0]->nama;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Username</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $rows[0]->username;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Password</label>

                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-8">
                        <textarea class="form-control"> <?php echo $rows[0]->alamat;?> </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email</label>

                      <div class="col-sm-8">
                        <input type="email" class="form-control" value="<?php echo $rows[0]->email;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. HP / Telepon</label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" value="<?php echo $rows[0]->no_hp;?>">
                      </div>
                    </div>
                  </div>

                  <!-- Profile Image -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" style="width: 50%; height: 50%" 
                          src="<?php echo base_url();?>/asset/dist/img/user4-128x128.jpg" alt="User profile picture">
                        <input type="file" name="" style="margin-left: 50px;">

                        <h3 class="profile-username text-center"><?php echo $rows[0]->nama;?></h3>

                        <p class="text-muted text-center"><?php echo $rows[0]->status;?></p>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                  <!-- /.box -->

                  <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-6">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>asset/dist/js/demo.js"></script>
</body>
</html>
