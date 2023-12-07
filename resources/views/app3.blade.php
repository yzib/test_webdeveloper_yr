
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<title>KODESA-ERP</title><script language=JavaScript1.2 src=js/kodesaAgro.js?v=1999563492></script>
	<!--script language=JavaScript1.2 src=js/kodesaSort.js></script>
	<script language=JavaScript1.2 src=js/calendar.js></script>
	<script language=JavaScript1.2 src=js/drag.js></script>
	<script language=JavaScript1.2 src=js/generic.js></script-->   
	
	<!--link rel=stylesheet type=text/css href=style/zTable.css-->
    <!-- jQuery 2.1.3 -->
      <script src='{{asset('assets/style/floating/jQuery/jQuery-2.1.3.min.js')}}' type='text/javascript'></script>
    <!-- jQuery UI 1.11.2 -->
    <script src='{{asset('assets/style/floating/jQuery/js/jquery-ui.min.js')}}' type='text/javascript'></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 -->
    <link href='{{asset('assets/style/floating/bootstrap/css/bootstrap.min.css')}}' rel='stylesheet' type='text/css' /> 
    <!-- Bootstrap 3.3.2 JS -->
    <script src='{{asset('assets/style/floating/bootstrap/js/bootstrap.min.js')}}' type='text/javascript'></script> 
	
	<!-- dataTables JS>
    <script src='style/floating/datatables/jquery.dataTables.js' type='text/javascript'></script>
    <script src='style/floating/datatables/jquery.dataTables.js' type='text/javascript'></script>
    <script src='style/floating/datatables/dataTables.bootstrap.js' type='text/javascript'></script-->
	
    <!-- FontAwesome 4.3.0 -->
    <link href='{{asset('assets/style/floating/font-awesome/css/font-awesome.min.css')}}' rel='stylesheet' type='text/css' />
    <!-- Theme style -->
    <link href='{{asset('assets/style/floating/AdminLTE.min.css')}}' rel='stylesheet' type='text/css' />
    <link href='{{asset('assets/style/floating/skins/skin-blue-light.css')}}' rel='stylesheet' type='text/css' />
	<script src='{{asset('assets/style/floating/slimScroll/jquery.slimscroll.min.js')}}' type='text/javascript'></script>
    <script src='{{asset('assets/style/floating/fastclick/fastclick.min.js')}}' type='text/javascript'></script>
    <script src='{{asset('assets/style/floating/fastclick/app.min.js')}}' type='text/javascript'></script>
	
	</head>
	<!--body class='skin-blue-light' onload='loadId();'-->
	<body class='skin-blue-light'>
	<noscript><span style='font-size:13px;font-family:arial;'>
	<span style='color:#dd3300'>Warning!</span>
	&nbsp&nbsp; QuickMenu may have been blocked by IE-SP2's active content option. This browser feature blocks JavaScript from running locally on your computer.<br> <br>
	This warning will not display once the menu is on-line. To enable the menu locally, click the yellow bar above, and select <span style='color:#0033dd;'>'Allow Blocked Content' </span>. <br><br>
	To permanently enable active content locally... <div style=padding:0px 0px 30px 10px;color:#0033dd;'> <br>
	1: Select 'Tools' --> 'Internet Options' from the IE menu. <br>
	2: Click the 'Advanced' tab.<br>
	3: Check the 2nd option under 'Security' in the tree (Allow active content to run in files on my computer.)</div> </span> 
	</noscript>
	<div class='wrapper'>
<header class="main-header">
<nav class="navbar navbar-static-top" role="navigation">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Navigasi</span>
	</a>
	<ul class="nav navbar-nav" style="margin-left: 15px;">
		<li><a href="#" onclick="do_load('master_dashboard.php##act=1');">Dashboard Management</a></li>
		<li><a href="#" onclick="do_load('master_gis.php##act=0');">GIS</a></li>
	</ul>
	<div class="navbar-custom-menu">
	<ul class="nav navbar-nav">
      <li class="nav-item dropdown">
		<li class="dropdown messages-menu"></li>
		<li class="dropdown user user-menu open" style='overflow: visible;'>
            <a href="#" onclick='document.getElementById("profileForm").style.display="block";'>
              <i class="fa fa-fw fa-user"></i>
			  <span class="hidden-xs">PT. MULTI PALMA SEJAHTERA</span>
            </a>
            <ul id='profileForm' class="dropdown-menu" style="display:none;">
              <!-- User image --> 
              <li class="user-header">
				<img src="./photokaryawan/user.jpg" class="rounded float-right" alt="user_default" style="width: 50%;height: auto; border-radius: 50%;">
                <p >
                  RIBUT BUDI SANTOSO -                 </p>
              </li>
				<div class="form-group">
					<div class="custom-control custom-switch" style="float: right;width: 10%; margin: 2%;">
					  <input type="checkbox" class="custom-control-input" id="darkSw1" title="Dark Mode On/Off" onchange="theme();"
					    />
					</div>
					<select id="selectClr" class="form-control select2 select2-hidden-accessible" style="width: 60%;float: right;" data-select2-id="1" tabindex="-1" aria-hidden="true" onchange="theme();">
						<option selected data-select2-id="1" value="blue">Biru</option>
						<option  data-select2-id="2" value="yellow">Kuning</option>
						<option  data-select2-id="3" value="red">Merah</option>
						<option  data-select2-id="4" value="green">Hijau</option>
						<option  data-select2-id="5" value="black">Hitam</option>
						<option   data-select2-id="6" value="purple">Ungu</option>
					 </select>
					 <label style="width: 15%; float: left; margin: 2%;"> Theme </label>
					 <div style="clear:both;"></div>
                </div>

              </div-->
              <!-- Menu Footer-->
              <div class="user-footer">
                <div class="pull-left">
                  <a onclick='getElementById("profileForm").style.display="none";' class="btn btn-default btn-flat">
				  <i class="fa fa-angle-double-up" aria-hidden="true" title="Hide Detail"></i></a>	
                </div>
                <div class="pull-right">
				  <a onclick='getElementById("profileForm").style.display="none";' class="btn btn-default btn-flat"  title="Main Page">
				  <i class="fa fa-home" aria-hidden="true"></i></a>
				  <a onclick='getElementById("profileForm").style.display="none";' class="btn btn-default btn-flat"  title="Change Password">
				  <i class="fa fa-gear" aria-hidden="true"></i></a>	
                  <a onclick=logout() class="btn btn-default btn-flat"><i class="fa fa-power-off" aria-hidden="true" title="Sign Out"></i></a>
                </div>
              </div>
            </ul>
		</li>
	</ul>
	</div>
</nav>
</header>
<aside class="main-sidebar">
<section class="sidebar">
<ul class="sidebar-menu" data-widget="treeview">
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>PENGATURAN</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
					<li><a href="#" onclick="do_load('setup_klpkegiatan');">Kelompok Kegiatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
					<li><a href="#" onclick="do_load('setup_kegiatan');">Kegiatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Pemakai</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('main_newUser');">Tambah Pemakai Baru</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('main_userPrivillages');">Hak Akses Pemakai</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('main_copy_privileges');">Salin Hak Akses</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('main_activeUser');">Aktif/Non Aktif Kan/Hapus Pemakai</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('setup_pindahLokasiTugas');">Pindah Lokasi Tugas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Perusahaan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('main_orgChart##proses=init');">Pusat Biaya</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('setup_org_npwp');">NPWP</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Aplikasi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('setup_posting');">Posting</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('setup_approval');">Persetujuan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Menu</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('main_menuSettings');">Pengaturan Menu</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('main_parentChild');">Pengaturan Menu Induk Dan Sub Induk</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>PERSONALIA</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
								<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Susunan Jabatan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_5golongan');">Golongan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5jabatan');">Jabatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5departemen');">Departemen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5tipekaryawan');">Tipe Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('sdm_5absensi');">Absensi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5jenisByPJD');">Jenis Biaya Perjalanan Dinas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5jenissp');">Jenis SP/PHK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5pendidikan');">Pendidikan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengobatan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_5plafonPengobatan');">Plafon Pengobatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5rumahSakit');">Rumah Sakit/Apotik/Klinik</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5diagnosa');">Daftar Diagnosa</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5jenisBiayaPengobatan');">Jenis Biaya Pengobatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
									<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Penggajian Karyawan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_5komponengajiHO');">Komponen Gaji</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5payrollUserHO');">Pengguna Payroll</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5sinkronisasiDataHO');">Sinkronisasi Data</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5assignPayrolloperatorHO');">Assign Payroll Operator</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5dataRekeningDanJMSHO');">Data Rekening dan BPJS TK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5setupBonusHO');">Bonus</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5setupTHRHO');">THR</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5jamsostekHO');">BPJS TK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5pph21tarifHO');">PPh21 Tarif</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_5komponenPPh21HO');">PPh 21 Komponen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('sdm_5gajipokok');">Gaji Pokok</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5periodegaji');">Periode Penggajian Unit</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5lembur');">Lembur</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5natura');">Natura</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5pesangon');">Pesangon</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('setup_pengaturanAdmin##proses=init');">Pengaturan Admin</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5harilibur');">Hari Libur</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5hkEfektif');">Hari Kerja Efektif</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_cuti');">Cuti Pekerja</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('sdm_data_karyawan');">Data Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengobatan Karyawan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_pembayaranKlaim');">Pembayaran Claim</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_pengobatan');">Klaim Pengobatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_idpengobatan');">Medical ID Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('sdm_promosi');">Promosi/Demosi/Mutasi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_suratPeringatan');">Surat Peringatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_ijin_meninggalkan_kantor');">Pengajuan Ijin/Cuti</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Perjalanan Dinas</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_pjdinas');">Perjalanan Dinas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_pembayaranUMukaPJD');">Pembayaran uang Muka PJD</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_pertanggungjawabanPJD');">Pertanggung-jawaban PJD</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_verifikasiPertanggungjawabanPJD');">Verifikasi Pertanggungjawaban PJD</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_penyelesaianPJD');">Penyelesaian Biaya PJD</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('sdm_rotasiSecurity');">Mutasi Antar Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengelolaan Tenaga Kerja</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_lembur');">Lembur</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_potongan');">Potongan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_absensi');">Data Kehadiran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_absensiUploadFile');">Unggah Kehadiran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_angsurankaryawan');">Angsuran Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('kebun_premiPengawas');">Input Tunjangan/Bantuan(Bulanan)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_premiKehadiran');">Premi Kehadiran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_pesangon');">Pesangon</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
									</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Proses</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('sdm_3prosesgjharian');">Proses Gaji Karyawan Harian</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_3prosesgjbulanan');">Proses Gaji Karyawan Bulanan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_bonus');">THR dan Bonus</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_3persetujuanPJD');">Persetujuan Perjalanan Dinas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_laporan_ijin_keluar_kantor');">Daftar Ijin/Cuti</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_laporan_ijin_keluar_kantor');">Persetujuan Ijin/Cuti</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('sdm_2datakaryawan');">Data Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2laporanKehadiranHO');">Kehadiran Karyawan (Jam Masuk-Pulang)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2laporanKehadiranUnit');">Kehadiran Karyawan (Kode Absensi)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>BPJS TK dan CSV PPH 21</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_2laporanJMSHO');">Laporan BPJS TK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('sdm_2laporanPPh21HO');">Laporan PPh 21</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
									<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Bruto Gaji (PPh 21) dan Slip Gaji</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('sdm_2pajak');">PPh 21</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
						<a href="#"><i class="fa fa-file-o"></i><span>Print Slip Gaji</span>
						<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
						</a><ul class="treeview-menu">
												<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
						<a href="#" onclick="do_load('sdm_2slipGajiHarian');"><i class="fa fa-file-o"></i><span>Harian</span>
						<span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
						</a></li>
											<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
						<a href="#" onclick="do_load('sdm_2slipGajiBulanan');"><i class="fa fa-file-o"></i><span>Bulanan</span>
						<span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
						</a></li>
											<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
						<a href="#" onclick="do_load('sdm_2slipBonusThr');"><i class="fa fa-file-o"></i><span>Slip Bonus THR</span>
						<span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
						</a></li>
											</ul></li>
										</ul></li>
										<li><a href="#" onclick="do_load('sdm_2rincianGajiBagian');">Rincian Gaji per Bagian</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2realisasiGaji');">Laporan Realisasi Gaji</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_laporanCuti');">Laporan Cuti</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2laporanLembur');">Laporan Lembur</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2potongan_pendapatan');">Laporan Potongan Pendapatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2laporanPremi');">Laporan Premi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2laporanPjdinas');">Daftar Perjalanan Dinas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2hasilKerjaPjd');">Hasil Kerja Perjalanan Dinas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2angsuran.php');">Angsuran Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2laporanKlaimPengobatan');">Pengobatan Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2biayapengobatan');">Biaya Pengobatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2daftarIuran_jamsostek');">Daftar BPJS TK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2perjalananDinas');">Biaya Perjalanan Dinas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2daftarKaryNpwp');">Daftar Karyawan NPWP</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2summarykaryawan');">Summary Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>KEUANGAN</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('setup_periodeakuntansi');">Periode Akuntansi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_5daftarperkiraan');">Daftar Perkiraan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_5kelompokjurnal');">Kelompok Jurnal</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_5paramjurnal');">Parameter Jurnal</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_5tipeAset');">Tipe Aset</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_5intraco');">Akun Intra/Interco</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_5akunbank');">Akun Bank</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_5kursbulanan');">Kurs Bulanan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('setup_mtuang');">Mata Uang dan Kurs</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('keu_jurnal');">Jurnal</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_tagihan');">Tagihan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_vp##proses=init');">Voucher Payable</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_kasbank');">Kas Bank</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_penagihan');">Penagihan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_daftarAsset');">Daftar Asset</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Proses</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('keu_3posting');">Proses Akhir Bulan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2alokasiByLain');">Alokasi Transit yg Belum Teralokasi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_3alokasiByRo');">Alokasi Biaya HO/RO ke Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_3tutupbulan');">Tutup Buku Bulanan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_3tutupBukuAudit');">Pengakuan Saldo Akhir Audited</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('keu_2jurnal');">Jurnal</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2bukubesar');">Neraca Saldo</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2bukubesar_v1');">Buku Besar</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2neraca');">Neraca</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2rugilaba');">Laba Rugi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_laporan_jurnal_piutang_staff');">Laporan Hutang/Piutang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2kasHarian');">Kas Harian</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2agingSchedule');">Aging Schedule</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_2alokasigaji');">Daftar Alokasi Gaji</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2penerimaanAlokasiTraksi');">Penerimaan Alokasi Traksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2laporan_asset');">Daftar Aset</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2daftarhutang');">Daftar Hutang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2daftarPerkiraan');">Daftar Perkiraan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2laporan_neracaPeriodeik');">Neraca Periodik</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2catatanNeraca');">Catatan Neraca</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2lr_periodik');">L/R Periodik</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2periodeAkuntansi');">Periode Tutup Buku</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2debitNote');">Debit/Kredit Note</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2taxplan');">Tax Planning</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_neraca_per_unit');">Neraca Saldo By Unit</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2laporankeuangan');">Laporan Keuangan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2agingPinjaman');">Laporan Aging Schedule Pinjaman</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('keu_2laporankaslangsung');">Arus Kas Langsung</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Daftar Tabel</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('keu_4jurnal');">Jurnal</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>PEMBELIAN</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('setup_satuan');">Satuan Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5satuankonversi');">Konversi Satuan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5kelompokbarang');">Kelompok Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5masterbarang');">Master Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5kelompoksupplier');">Kelompok Supplier</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5dataSupplier');">Data Supplier/Kontraktor</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5akunSupplier');">Rek.Bank Supplier/Kontraktor</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5masterfranco');">Master Franco</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('log_pp');">Permintaan Pembelian (PP)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_persetuuanPp');">Persetujuan Permintaan Pembelian (PPP)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Purchasing</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('log_verifikasiPp');">Verifikasi Permintaan Pembelian (VPP)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_pnwrharga');">Penawaran Harga (PH)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_po');">Order Pembelian (OP) Pusat</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_release_po');">Order Pembelian (OP) Release </a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_cetak_po');">Cetak PO</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_POLokal');">PO Lokal</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('log_spk');">Kontrak Perjanjian Kerja (KPK)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_realisasispk');">BA Pelaksanaan Pekerjaan (BAKPK)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Proses</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('log_pindahPeriodeGudang');">Tutup Buku Fisik</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_3prosesAkhirBulan');">Perhitungan Harga Akhir Bulan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('log_2persediaanFisik');">Persediaan Fisik</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2persediaanFisikHarga');">Persediaan Fisik dan Harga</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2keluarmasukbrg');">Keluar / Masuk Persediaan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2alokasibiaya');">Alokasi Biaya</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2anggaranrealisasi');">Perbandingan dengan Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_5daftarGudang');">Daftar Gudang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2riwayatPP');">Riwayat Permintaan Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Purchasing</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('log_2detail_pembelian');">Detail Pembelian</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_2detail_pembelian_brg');">Detail Pembelian Per Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_2pp_histori');">Laporan PP</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_2laporan_statuspo');">Laporan Status PO</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_2pembelian_terakhir');">Pembelian Terakhir</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_2produktivitas');">Laporan Produktivitas</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_2statPengirimanBrg');">Laporan Status Pengiriman Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('log_2pembayaran');">Riwayat Pembayaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('lbm_proc_pprealisasi');">PP Belum Realisasi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('log_2daftarPo');">Daftar PO</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2hutangsupplier');">Hutang Berdasarkan BPB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2alokasi_pemakaiBrg');">Laporan Alokasi Pemakaian Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2transaksigudang');">Penerimaan-Pengeluaran/Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2penerimaan');">Daftar Penerimaan Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_laporanRealisasiSPK');">Realisasi SPK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('summary_progress_spk');">Summary Progress SPK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2listpp');">List PP dan PO</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2realisasipembayaranpo.php');">Realisasi Pembayaran PO</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2peneluaranBrgPerKary');">Pengeluaran Barang Per Karyawan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2posisiBarang');">Laporan Posisi Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_2barang');">Daftar Kelompok dan Nama Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>GUDANG</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Administrasi Gudang</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('log_penerimaanBarang');">Penerimaan Barang Dari Supplier (GRN)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_permintaan_gudang_mris');">Permintaan Barang Gudang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_pengeluaran_mris');">Pengeluaran Barang (MRIS)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_mutasibarang');">Mutasi Barang (GMO)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_penerimaanMutasi');">Penerimaan Barang Mutasi (GMI)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_returKeGudang');">Retur Ke Gudang (RG)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_postingGudang');">Posting</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_returKeSupplier');">Retur Ke Supplier (RS)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('log_rekalgudang');">Rekalkulasi Stock</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>KEBUN</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('setup_blok');">Blok</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5statustanaman');">Status Tanam</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5bjr');">Tabel BJR</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5budidaya');">Tabel Budidaya</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5tph');">Tabel TPH</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5stproduksi');">Standar Produksi Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5psatuan');">Tarif Satuan Pekerjaan Non Panen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5mandor');">Mandor</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5denda');">Denda Panen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5dendapengawas');">Denda Pengawasan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5premiMuat');">Premi Muat</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_5premipanen');">Premi Panen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('setup_jenisBibit');">Jenis Bibit</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
								<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>BKM</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('kebun_panen');">Kegiatan Panen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('kebun_bukalahan');">Pembukaan Lahan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('kebun_pembibitan');">Pembibitan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('kebun_pemeliharaantbm');">Pemeliharaan TBM</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('kebun_pemeliharaantm');">Pemeliharaan TM</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('kebun_rencanapanen');">Sensus Produksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_spb');">Surat Pengantar Buah</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_curahHujan');">Curah Hujan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bibit_keluar_masuk');">Keluar-Masuk Bibit</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_premiKemandoran');">Premi Kemandoran(Input Harian)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_premiPengawas');">Premi Pengawas(Input Bulanan)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_rekomendasiPupuk');">Rekomendasi Pupuk</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_taksasi');">Taksasi Panen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_premiMuatTbs');">Premi Muat TBS (Bulanan)</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Proses</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('kebun_3AmbilKgTimbangan');">Ambil Kg. Timbangan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_3cekbkm');">Cek BKM</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_3postingtransaksi');">Posting BKM/PNN</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
								<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Management Report</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('mr_biayaTbm');">Biaya TBM</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('mr_biayaTm');">Biaya TM</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('mr_produksiTbs');">Produksi TBS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('mr_biayaProduksiTbs');">Biaya Produksi TBS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('mr_produksiTbs_bulanan');">Produksi TBS Bulanan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('kebun_2arealstatmen');">Areal Statement</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2pemeliharaan');">Pemeliharaan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2panen');">Panen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2pengangkutan');">Pengangkutan Panen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2pakaimaterial');">Pemakaian Material</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bibit_2_keluar_masuk');">Stok Bibit</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2kartuBibit');">Kartu Bibit</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2curahHujan');">Curah Hujan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_3laporanProduksi');">Laporan Produksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2biayaKegiatanPerBlok');">Biaya Kegiatan Per Blok</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_riwayat_sisipan');">Riwayat Sisipan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2penggunaanHK');">Penggunaan HK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2laporan_restan');">Laporan Restan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2sensusproduksi');">Laporan Sensus Produksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2antarBibit');">Laporan Pengiriman Bibit</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2kehadiranpermandor');">Kehadiran per Mandor</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2produksiPerBlok');">Produksi Per Blok</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2spbvspenerimaan');">SPB vs Penerimaan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2taksasipanen');">Taksasi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('kebun_2mb');">Material / Blok</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('lbm_main');">LBM-Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('lha_main');">LHA/LBA -Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>PABRIK</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('pabrik_5shift');">Shift</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_5tangki');">Tangki</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_5fraksi');">Fraksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_5potFraksi');">Potongan Fraksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_5kelengkapanloses');">Kelengkapan Data Loses</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_5volumtangki');">Volume Tangki</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_5ketetapansuhu');">Suhu Tangki</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_5general');">Pengaturan General</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_parameter_analisa');">Parameter Analisa</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_subunit_analisa');">Sub Unit Analisa</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('pabrik_pengolahan');">Pengoperasian Pabrik</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_pemeliharaanmesin');">Pemeliharaan Mesin</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_hasil');">Sounding Produksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_produksi');">Produksi Harian</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_sortasi');">Sortasi Buah</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_kelengkapanloses');">Pabrik Kelengkapan Loses </a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Proses</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('pabrik_3uploadtimbangan');">Download Data WB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_3posting_perawatan_mesin');">Posting Perawatan Mesin</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_pindahbuyer');">Pindah Buyer</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_posting_timbanganposting');">Posting Timbangan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_timbangan_antrian');">Harga Antrian</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('pabrik_2produksi_harian');">Laporan Produksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2penerimaantbs');">Laporan Penerimaan TBS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2pengiriman');">Laporan Pengiriman</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pmn_laporanPemenuhanKontrak');">Pemenuhan Kontrak</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_4persediaan');">Stok CPO/PK</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2timbangan');">Timbangan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2loses');">Pabrik Loses</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2pengolahan');">Pengolahan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2pengolahanv2');">Pengolahan Detail</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_laporanPerawatanMesin');">Perawatan Mesin</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2laporanSortasiPabrik');">Laporan Sortasi Pabrik</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2stagnasi');">Stagnasi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2sipblist');">Daftar SIPB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pabrik_2daftarkontrak');">Daftar Kontrak Penjualan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('lbm_main_pks');">LBM-PKS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>BENGKEL/TRAKSI</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('vhc_5jenisvhc');">Tipe Kend/Mesin/AB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_5mastervhc');">Master Kend/Mesin/AB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_5jenisKegiatan');">Jenis Kegiatan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_5operator');">Operator</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('vhc_penggantianKomponen');">Pencatatan Perbaikan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_pekerjaan');">Pekerjaan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_project');">Project</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_wo');">Work Order</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_persetujuanProject.php');">Persetujuan Project</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_acara_laka');">Berita Acara Laka</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('sdm_preventivemaintenance');">Preventive Maintenance</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Proses</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('vhc_postingPenggunaanKomponen');">Posting Pencatatan Perbaikan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_postingPekerjaan');">Posting Pekerjaan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('vhc_laporanKerjakendaraan');">Kerja Kendaraan/Alat berat</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_laporanPenggunaanKomponen');">Laporan Penggunaan Sparepart</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('3daftarKendaraan');">Daftar Kend/Mesin/AB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_2biayatotalperkendaraan');">Biaya Total per Kendaraan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_2laporanJamKerja');">Jam Kerja Kend./AB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc2_biayaRinci');">Biaya Rinci per Kendaraan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_2penggunaanBahan');">Biaya Penggunaan Bahan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('traksi_2biayaBengkel');">Biaya Bengkel</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_2project');">Project</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('vhc_2rasiobbm');">Rasio Penggunaan BBM</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>PENJUALAN</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('pmn_5klcustomer');">Kelompok Pelanggan / Buyer</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pmn_5customer');">Pelanggan / Buyer</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pmn_5pasar');">Pasar Acuan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pmn_2hargaharian');">Harga Harian TBS per Supplier</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('pmn_kontrakjual');">Kontrak Penjualan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pmn_rencanajual');">Rencana Penjualan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pmn_hargaPasar');">Harga Harian Pasar</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('pmn_2penjualan');">Penjualan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pmn_laporanPemenuhanKontrak');">Pemenuhan Kontrak</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li class="treeview" style='margin-bottom:5px; margin-top:5px;'>
	<a href="#"><i class="fa fa-file-o"></i><span>ANGGARAN</span>
	<span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
	</a><ul class="treeview-menu">
						<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Pengaturan Awal</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
									<li><a href="#" onclick="do_load('budget_tipe_budget');">Tipe Budget</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('budget_kode_budget');">Kode Budget</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('budget_regional');">Regional</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('budget_regional_assignment');">Assignment Regional</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('budget_5hargabarang');">Harga Barang Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('budget_5harikerja');">Hari Kerja</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_sebaran_nol');">Sebaran Admin</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_tool_query');">Revisi Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Transaksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
								<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Traksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('');">Master</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_upah');">Upah Traksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('');">Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_traksi_total_jam_bengkel');">1. Total Jam Bengkel</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_total_jam_vhc');">2. Total Alokasi Jam Kendaraan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_ws_biaya');">3. Budget Biaya Bengkel</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_vhc');">4. Budget Kendaraan-Mesin-Alat Berat</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_by_umum');">5. Biaya Umum</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
									<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Kebun</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('');">Master</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_upah');">2. Upah-EST</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_5blok');">3. Blok Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_bjr');">4. BJR</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('');">Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_prosuksi_kebun');">5. Produksi-EST</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_budget_kebun');">6. Budget Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_by_umum');">8. Biaya Umum</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_alokasi_supervisi');">9. Alokasi Supervisi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_uploaderkebun');">Uploader Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
									<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>PKS</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('');">Master</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_upah');">2. Upah-PKS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_jam_operasional_pks');">3. jam Operasional PKS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('');">Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_produksi_pks');">4. Produksi-PKS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_budget_pks');">5. Budget PKS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('budget_by_umum');">6. Biaya Umum</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('bgt_kapital');">Budget Kapital</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_departemen');">Budget Departemen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('budget_by_umum');">Budget Region</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pta_buat');">Permintaan Tambahan Anggaran</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('pta_persetujuan');">Persetujuan PTA</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
							<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Laporan</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
								<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Kebun</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('bgt_laporan_arealstatement');">Areal Statement</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_produksi');">Produksi Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_biaya_lngs_kebun');">Biaya Langsung</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_biaya_tdk_lngs_kebun');">Biaya Tidak Langsung Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_tenaga_kerja');">Tenaga Kerja</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_rp_kg_kebun');">Rp/Kg</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_biaya_lngs_kebun2');">Biaya Langsung Per Akun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
									<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>PKS</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('bgt_laporan_produksi_pks');">Produksi</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_biaya_langsung_pks');">Biaya Langsung PKS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_tenaga_kerja');">Tenaga Kerja</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_rp_kg_pks');">Rp/KG CPO</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_by_tdklangsung_pks');">Biaya Tidak Langsung PKS</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
									<li class="treeview" style='margin-bottom:5px; margin-top:5px'>
				<a href="#"><i class="fa fa-file-o"></i><span>Traksi</span><span class="pull-right-container"><i class="fa fa-angle-down pull-right"></i></span>
				</a><ul class="treeview-menu">
										<li><a href="#" onclick="do_load('bgt_laporan_biaya_bengkel');">Biaya Bengkel</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_biaya_kendaraan');">Biaya Kendaraan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
											<li><a href="#" onclick="do_load('bgt_laporan_daftar_kendaraan');">Daftar Kend/Mesin/AB</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
										</ul></li>
										<li><a href="#" onclick="do_load('bgt_laporan_harga_barang');">Harga Barang</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_rp_jam_bengkel');">Rp/Jam Bengkel</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_rp_jam_kendaraan');">Rp/Jam Kendaraan</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_kapital');">Kapital</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_budget_departemen');">Laporan Budget Departemen</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporanHariKerja');">Hari Kerja</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_detail');">Budget Detail</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_freeQuery');">Data Rinci</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_arusKas');">Laporan Keuangan Budget</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_laporan_budget_material');">Budget Material</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_2pt');">Budget Per PT</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_varianharga');">Varian Harga</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
								<li><a href="#" onclick="do_load('bgt_2biayaLangsungKebun');">Laporan Biaya Langsung Kebun</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
							</ul></li>
				</ul></li>
	<li><a href="#" onclick="do_load('test_b1.php');">STOK 1</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
	<li><a href="#" onclick="do_load('test_b1.php##kontrol=2');">STOK 2</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
</ul>
</section>
</aside>
<!--script>
 /** add active class and stay opened when selected */
var url = window.location;
// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
   return this.href == url;
}).parent().addClass('active');
// for treeview
$('ul.treeview-menu a').filter(function() {
   return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
</script-->
<link href="style/floating/select2.min.css" rel="stylesheet" />
<script src="style/floating/select2.min.js"></script>
<script type="text/javascript">
$(function(){
$(".select2").select2();
});
</script>
<script>
function theme(){
	slect=document.getElementById('selectClr');
	warna=slect.options[slect.selectedIndex].value;
	var swit= (document.getElementById('darkSw1').checked) ? 'on' : 'off' ;
	alert(swit+"::"+warna);
	busy_on();
	do_load('master##dark='+swit+'&warna='+warna);
}
</script>
<div id='progress' style='display: none;align=center;v-align:middle;border:orange solid 1px;width:100%;height:100%; position:fixed; top:0%;left:0%;z-index:10000;color:#ff0000; font-family:Tahoma;font-size:13px;font-weight:bolder; text-align:center;background-color:rgb(146 187 255 / 80%);'>
<span style='top:15%;position: fixed;'> Sedang Proses...! <br>
<img src='style/floating/loading.gif'>
</span>
</div>
<div id='screenlocker' style='display:none; width:100%;height:100%;color:#666666;font-family:Tahoma;font-size:13px;font-weight:bolder;text-align:center;background-color:#FFFFFF;z-index:10000;'>
</div>
<div id='locker' style='display:none; width:100%;height:100%;color:#666666;font-family:Tahoma;font-size:13px;font-weight:bolder;text-align:center;background-color:#FFFFFF;z-index:10000;'>
</div><div id="" class="content-wrapper" style="height: 100%; padding:15px;">
		<fieldset id=""><legend><span class=judul></span></legend>
		<div id="contentBox" style="overflow:auto;height: 100%;">
</div></fieldset></div></div></body></html>