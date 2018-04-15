<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pendaftaran Pasien Baru</title>
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
    <a href="../../index2.html" class="logo">
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>asset/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $rows[0]->nama;?> </span>
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
          <p><?php echo $rows[0]->nama;?></p>
          <a href="#"> <?php echo $rows[0]->status;?> </a>
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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Pendaftaran Pasien</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>index.php/PasienBaru/PasienBaru"><i class="fa fa-circle-o"></i> Pasien Baru </a></li>
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
        <?php if(($this->session->userdata('level') =='3') || ($this->session->userdata('level') == '2')){ ?>
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
        <?php }?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pendaftaran Pasien Baru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pendaftaran Pasien</a></li>
        <li class="active">Pasien Baru</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

      <form action="" method="" role="form">

      <div class="col-md-12">

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#datadiri" data-toggle="tab">Data Diri Pasien</a></li>
              <li><a href="#datalengkap" data-toggle="tab">Data Lengkap Pasien</a></li>
              <li><a href="#penderita" data-toggle="tab">Data Penderita Diare</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="datadiri">
                <div class="row">
                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box-header with-border col-md-6">
                      <h3 class="box-title"> Data Tempat Tinggal Pasien</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-header with-border col-md-6">
                      <h3 class="box-title"> Data Diri Pasien</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- Data Diri Pasien -->
                    <script type="text/javascript"> 
                      var baseurl = "<?php echo base_url();?>";
                    </script>
              
                      <div class="box-body col-md-3">
                        <div class="form-group">
                          <?php 
                            $NomorRM = $no_rm[0]->no_rm;
                            $NomorRM = $NomorRM+1;
                          ?>
                          <div class="hidden">
                            <input type="text" name="no_rm" class="" value="<?= $NomorRM;?>">
                          </div>
                          <label> Provinsi </label>
                          <select class="form-control select2" name="prop" id="prop"  style="width: 100%;" onchange="ajaxkota(this.value)" required>
                            <option value="">--Pilih Provinsi--</option>
                            <?php 
                           
                            foreach ($row as $value){
                              echo '<option value="'.$value->lokasi_propinsi.'">'.$value->lokasi_nama.'</option>';
                            }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label> Kota / Kabupaten </label>
                          <select class="form-control select2" name="kota" id="kota" onchange="ajaxkec(this.value)" style="width: 100%;" required>
                            <option value="">--Pilih Kota--</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label> Kecamatan </label>
                          <select class="form-control select2" name="kec" id="kec" onchange="ajaxkel(this.value)" style="width: 100%;" required>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label> Kelurahan / Desa </label>
                          <select class="form-control select2" name="kel" id="kel" style="width: 100%;" required>
                            <option value=""></option>
                          </select>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-body col-md-3">
                        <div class="form-group">
                          <label> Alamat / Jalan </label>
                          <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat Pasien" required></textarea>
                        </div>
                        <div class="form-group">
                          <label> RT / RW </label>
                          <input type="number" name="rt_rw" class="form-control" placeholder="RT / RW" required>
                        </div>
                        <div class="form-group">
                          <label> Kode POS </label>
                          <input type="number" name="kode_pos" class="form-control" placeholder="Kode POS" required>
                        </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-body col-md-3">
                        <div class="form-group">
                          <label> Nama Lengkap </label>
                          <input type="name" name="nama" class="form-control" placeholder="Nama Lengkap Pasien" required>
                        </div>
                        <div class="form-group">
                          <label> Tempat Lahir </label>
                          <input type="name" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="form-group">
                          <label> Tanggal Lahir </label>
                          <input type="date" name="tgl_lahir"  class="form-control" required>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-body col-md-3">
                        <div class="form-group">
                          <label> No. Identitas </label>
                          <input type="number" name="no_id" class="form-control" placeholder="No. KTP/KITAS Pasien" required>
                        </div>
                        <div class="form-group">
                          <label> Email </label>
                          <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email Anda">
                        </div>
                        <div class="form-group">
                          <label> Nomor Telepon / Handphone </label>
                          <input type="number" name="no_tlp" class="form-control" placeholder="Nomor Telp. / HP">
                        </div>
                      </div>
                      <!-- /.box-body -->
              
                    
                    <div class="box-footer">
                      <div  class=" col-sm-offset-10 col-sm-2">
                        <a href="#datalengkap" data-toggle="tab">
                          <button type="submit" class="btn btn-primary">Selanjutnya <i class="fa fa-angle-double-right"></i> </button>
                        </a>
                      </div>
                    </div>

                  </div>
                  <!--/.Data Diri Pasien  -->
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="datalengkap">
                <div class="row">
                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box-header with-border">
                      <h3 class="box-title"> Detail Data Pasien</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- Data Detail Pasien -->
              
                      <div class="box-body col-md-4">
                        <div class="form-group">
                          <label> Jenis Kelamin </label>
                          <select class="form-control select2" style="width: 100%;" required>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label> Pekerjaan </label>
                          <select class="form-control select2" style="width: 100%;" required>
                            <option value="">--Pilih Pekerjaan--</option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label> Pendidikan </label>
                          <select class="form-control select2" style="width: 100%;" required>
                            <option value="">Pilih Pendidikan</option>
                            <option value="TK"></option>
                            <option value="SD"></option>
                            <option value="SMA"></option>
                            <option value="Lainnya"></option>
                          </select>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-body col-md-4">
                        <div class="form-group">
                          <label> Nama Kepala Keluarga (KK) </label>
                          <input type="text" name="namakk" class="form-control" placeholder="Nama Kepala Keluarga" required>
                        </div>
                        <div class="form-group">
                          <label>  Gol. Darah </label>
                          <select class="form-control select2" style="width: 100%;" required>
                            <option value="">--Pilih Gol. Darah</option>
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">O</option>
                            <option value="">AB</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>  Status Nikah </label>
                          <select class="form-control select2" style="width: 100%;" required>
                            <option value="">--Pilih Status Nikah--</option>
                            <option value=""></option>
                          </select>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-body col-md-4">
                        <div class="form-group">
                          <label> Agama </label>
                          <select class="form-control select2" style="width: 100%;" required>
                            <option value="">Islam</option>
                            <option value="">Kalotik</option>
                            <option value="">Kristen</option>
                            <option value="">Hindu</option>
                            <option value="">Budha</option>
                            <option value="">Konghucu</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label> Warga Negara </label>
                          <select class="form-control select2" style="width: 100%;" required>
                            <option value="">Indonesia</option>
                            <option value="">WNA</option>
                          </select>
                        </div>
                      </div>
                      <!-- /.box-body -->
              

                    <div class="box-footer">
                      <div  class=" col-sm-offset-10 col-sm-2">
                        <a href="#penderita" data-toggle="tab">
                          <button class="btn btn-primary">Selanjutnya <i class="fa fa-angle-double-right"></i> </button>
                        </a>
                      </div>
                    </div>
                    
                  </div>
                  <!--/.Detail Data Pasien  -->
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="penderita">
                <div class="row">
                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box-header with-border">
                      <h3 class="box-title"> Data Pasien Penderita Diare</h3>
                    </div>
                    <!-- /.box-header -->

                    <!-- Data Pasien Penderita Diare-->
              
                      <div class="box-body col-md-4">
                        <div class="form-group">
                          <label> Tanggal Mulai Sakit </label>
                          <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label> Derajad Dehidrasi </label>
                            <ul class="treeview" style="list-style: none; padding-left: 5%;" required>
                              <li><input type="checkbox"> Tanpa Dehidrasi</li>
                              <li><input type="checkbox"> Ringan</li>
                              <li><input type="checkbox"> Berat</li>
                            </ul>
                        </div>
                        <div class="form-group">
                          <label> Jumlah Diberi </label>
                            <ul class="treeview" style="list-style: none; padding-left: 1%;" required>
                              <li class="col-md-6"> Oralit : <input type="number" class="form-control" placeholder="Jumlah Oralit"></li>
                              <li class="col-md-6"> Zinc : <input type="number" class="form-control" placeholder="Jumlah Zinc"></li>
                            </ul>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-body col-md-4">
                        <div class="form-group">
                          <label> Gejala Diare </label>
                            <ul class="treeview" style="list-style: none; padding-left: 5%;">
                              <li> Muntah :
                                <select class="form-control" style="width: 100%;" required>
                                  <option value="ya">YA</option>
                                  <option value="tidak">TIDAK</option>
                                </select>
                              </li>
                              <li> Kondisi Tinja Cair / Encer :
                                <select class="form-control" style="width: 100%;" required>
                                  <option value="ya">YA</option>
                                  <option value="tidak">TIDAK</option>
                                </select>
                              </li>
                              <li> Kondisi Tinja Berlendir / Darah :
                                <select class="form-control" style="width: 100%;" required>
                                  <option value="ya">YA</option>
                                  <option value="tidak">TIDAK</option>
                                </select>
                              </li>
                            </ul>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-body col-md-4">
                        <div class="form-group">
                          <label> Lama Sakit </label>
                          <input type="number" class="form-control" placeholder="Lama Sakit Dalam Hitungan Hari">
                        </div>
                        <div class="form-group">
                          <label>  Penanganan </label>
                            <ul class="treeview" style="list-style: none; padding-left: 5%;">
                              <li class="col-md-6"> 
                                <input type="radio" name="radios" value="rawatjalan">
                                Rawat Jalan
                              </li>
                              <li class="col-md-6">
                                <input type="radio" name="radios" value="rujuk">
                                Rujuk
                              </li>
                            </ul>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    
                    <div class="box-footer">
                      <div  class=" col-sm-offset-10 col-sm-2">
                        <button type="submit" class="btn btn-primary">Submit <i class="fa fa-check"></i> </button>
                      </div>
                    </div>
                  </div>
                  <!--/.Data Pasien Penderita Diare-->
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        </form>

      </div>
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
<script type="text/javascript" src="<?php echo base_url();?>asset/ajax_kota.js"></script>
</body>
</html>
