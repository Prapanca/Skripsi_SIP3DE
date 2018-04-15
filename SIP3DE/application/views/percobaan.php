<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
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
        <li class="active">Pasien Baru</li>
      </ol>
    </section>

    <script type="text/javascript">
      var currentTab = 0;
      function sebelumnya(a){        
        tab = document.getElementsByClassName("tab");
        currentTab--;
        if(currentTab<0){
          currentTab = 0;
        }
        $(".tab").fadeOut(0, function(){
          $(tab[currentTab]).fadeIn(0);
        }) 
        if(currentTab<1){
          $("#sebelum").css({"display": "none"})
        }
        if(currentTab<2){
          $("#submit").css({"display": "none"})
          $("#selanjut").css({"display": "inline-block"})
        }
      }

      function selanjutnya(a){
        tab = document.getElementsByClassName("tab");
        if(!validation()){
          alert("Semua Wajib Diisi");
          return;
        }
        currentTab++;
        if(currentTab>0){
          $("#sebelum").css({"display": "inline-block"})
        }
        if(currentTab>2)currentTab=2;
        $(".tab").fadeOut(0, function(){
            $(tab[currentTab]).fadeIn(0);
          })
        if(currentTab==2){
          $("#submit").css({"display": "inline-block"})
          $("#selanjut").css({"display": "none"})
        }
      }

      function validation(){
        var x = ".tab" + (currentTab+1);
        var result = true;
        $(x).each(function(i,f){
          if($(f).val()=="") {
            //$(i).trigger("submit");
            result = false;
          }
        })
        return result;
      }
    </script>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

          <!-- form start -->
          <form action="" role="form">

            <div class="box box-primary tab">
              <div class="box-header with-border">
                <!-- general form elements -->
                <div class="box-header with-border col-md-6">
                  <h3 class="box-title"> Data Tempat Tinggal Pasien</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-header with-border col-md-6">
                  <h3 class="box-title"> Data Diri Pasien</h3>
                </div>
                <!-- /.box-header -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
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
                      <input type="text" name="no_rm" class="tab1" value="<?= $NomorRM;?>">
                    </div>
                    <label> Provinsi </label>
                    <select class="form-control select2" name="prop" id="prop"  style="width: 100%;" onchange="ajaxkota(this.value)" >
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
                    <select class="form-control select2" name="kota" id="kota" onchange="ajaxkec(this.value)" style="width: 100%;" >
                      <option value="">--Pilih Kota--</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label> Kecamatan </label>
                    <select class="form-control select2" name="kec" id="kec" onchange="ajaxkel(this.value)" style="width: 100%;" >
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label> Kelurahan / Desa </label>
                    <select class="form-control select2" name="kel" id="kel" style="width: 100%;" >
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-body col-md-3">
                  <div class="form-group">
                    <label> Alamat / Jalan </label>
                    <textarea class="form-control tab1" name="alamat" rows="3" placeholder="Alamat Pasien"></textarea>
                  </div>
                  <div class="form-group">
                    <label> RT / RW </label>
                    <input type="number" name="rt_rw" class="form-control tab1" placeholder="RT / RW">
                  </div>
                  <div class="form-group">
                    <label> Kode POS </label>
                    <input type="number" name="kode_pos" class="form-control tab1" placeholder="Kode POS">
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-body col-md-3">
                  <div class="form-group">
                    <label> Nama Lengkap </label>
                    <input type="name" name="nama" class="form-control tab1" placeholder="Nama Lengkap Pasien">
                  </div>
                  <div class="form-group">
                    <label> Tempat Lahir </label>
                    <input type="name" name="tempat_lahir" class="form-control tab1" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label> Tanggal Lahir </label>
                    <input type="date" name="tgl_lahir"  class="form-control tab1" value="<php>">
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-body col-md-3">
                  <div class="form-group">
                    <label> No. Identitas </label>
                    <input type="number" name="no_id" class="form-control tab1" placeholder="No. KTP/KITAS Pasien">
                  </div>
                  <div class="form-group">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control tab1" placeholder="Masukkan Alamat Email Anda">
                  </div>
                  <div class="form-group">
                    <label> Nomor Telepon / Handphone </label>
                    <input type="number" name="no_tlp" class="form-control tab1" placeholder="Nomor Telp. / HP">
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box box-primary tab" style="display: none;">
              <div class="box-header with-border">
                <h3 class="box-title">Detail Data Pasien</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box-body col-md-4">
                      <div class="form-group">
                        <label> Jenis Kelamin </label>
                        <select class="form-control select2 tab2" style="width: 100%;">
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label> Pekerjaan </label>
                        <select class="form-control select2 tab2" style="width: 100%;">
                          <option value="">--Pilih Pekerjaan--</option>
                          <option value="PNS">PNS</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label> Pendidikan </label>
                        <select class="form-control select2 tab2" style="width: 100%;">
                          <option value="">Pilih Pendidikan</option>
                          <option value="TK">TK</option>
                          <option value="SD">SD</option>
                          <option value="SMA">SMA</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-body col-md-4">
                      <div class="form-group">
                        <label> Nama Kepala Keluarga (KK) </label>
                        <input type="text" name="namakk" class="form-control tab2" placeholder="Nama Kepala Keluarga">
                      </div>
                      <div class="form-group">
                        <label>  Gol. Darah </label>
                        <select class="form-control select2 tab2" style="width: 100%;">
                          <option value="">--Pilih Gol. Darah</option>
                          <option value="a">A</option>
                          <option value="b">B</option>
                          <option value="o">O</option>
                          <option value="ab">AB</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>  Status Nikah </label>
                        <select class="form-control select2 tab2" style="width: 100%;">
                          <option value="">--Pilih Status Nikah--</option>
                          <option value="0">Belum Nikah</option>
                        </select>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-body col-md-4">
                      <div class="form-group">
                        <label> Agama </label>
                        <select class="form-control select2 tab2" style="width: 100%;">
                          <option value="islam">Islam</option>
                          <option value="kalolik">Kalotik</option>
                          <option value="kristen">Kristen</option>
                          <option value="hindu">Hindu</option>
                          <option value="budha">Budha</option>
                          <option value="konhucu">Konghucu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label> Warga Negara </label>
                        <select class="form-control select2 tab2" style="width: 100%;">
                          <option value="1">Indonesia</option>
                          <option value="2">WNA</option>
                        </select>
                      </div>
                    </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box box-warning tab" style="display: none;">
              <div class="box-header with-border">
                <h3 class="box-title">Data Pasien Penderita Diare</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box-body col-md-4">
                  <div class="form-group">
                    <label> Tanggal Mulai Sakit </label>
                    <input type="date" class="form-control tab3">
                  </div>
                  <div class="form-group">
                    <label> Derajad Dehidrasi </label>
                      <ul class="treeview tab3" style="list-style: none; padding-left: 5%;">
                        <li><input type="checkbox" value="tanpadehidrasi"> Tanpa Dehidrasi</li>
                        <li><input type="checkbox" value="ringan"> Ringan</li>
                        <li><input type="checkbox" value="berat"> Berat</li>
                      </ul>
                  </div>
                  <div class="form-group">
                    <label> Jumlah Diberi </label>
                      <ul class="treeview tab3" style="list-style: none; padding-left: 1%;">
                        <li class="col-md-6"> Oralit : <input type="number" name="oralit" class="form-control tab3" placeholder="Jumlah Oralit"></li>
                        <li class="col-md-6"> Zinc : <input type="number" name="zinc" class="form-control tab3" placeholder="Jumlah Zinc"></li>
                      </ul>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-body col-md-4">
                  <div class="form-group">
                    <label> Gejala Diare </label>
                      <ul class="treeview" style="list-style: none; padding-left: 5%;">
                        <li> Muntah :
                          <select class="form-control tab3" style="width: 100%;">
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                          </select>
                        </li>
                        <li> Kondisi Tinja Cair / Encer :
                          <select class="form-control tab3" style="width: 100%;">
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                          </select>
                        </li>
                        <li> Kondisi Tinja Berlendir / Darah :
                          <select class="form-control tab3" style="width: 100%;">
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
                    <input type="number" class="form-control tab3" value="lamasakit" placeholder="Lama Sakit Dalam Hitungan Hari">
                  </div>
                  <div class="form-group">
                    <label>  Penanganan </label>
                      <ul class="treeview tab3" style="list-style: none; padding-left: 5%;">
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
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box-footer">
              <button type="button" id="sebelum" class="btn btn-primary" style="display: none;" onclick="sebelumnya(this)">Sebelumnya</button>
              <button type="button" id="selanjut" class="btn btn-primary" onclick="selanjutnya(this)" >Selanjutnya</button>
              <button type="submit" id="submit" class="btn btn-primary" style="display: none;">Submit</button>
            </div>

          </form>
        </div>
        <!--/.col (left) -->
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
