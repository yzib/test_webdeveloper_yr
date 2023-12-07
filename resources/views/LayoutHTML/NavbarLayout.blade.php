@php
/* Display elements */
$contentNavbar = true;
$containerNav = ($containerNav ?? 'container-xxl');
$isNavbar = ($isNavbar ?? true);
$isMenu = ($isMenu ?? true);
$isFlex = ($isFlex ?? false);
$isFooter = ($isFooter ?? true);

/* HTML Classes */
$navbarDetached = 'navbar-detached';

/* Content classes */
$container = ($container ?? 'container-xxl');

@endphp

@section('layoutContent')
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
            <a href="#" onclick="document.getElementById('profileForm').style.display='block';">
              <i class="fa fa-fw fa-user"></i>
			  <span class="hidden-xs">@company</span>
            </a>
            <ul id='profileForm' class="dropdown-menu" style="display:none;">
              <!-- User image --> 
              <li class="user-header">
				<img src="./photokaryawan/user.jpg" class="rounded float-right" alt="user_default" style="width: 50%;height: auto; border-radius: 50%;">
                <p>{{ @username }}</p>
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
                  <a href="logout" class="btn btn-default btn-flat"><i class="fa fa-power-off" aria-hidden="true" title="Sign Out"></i></a>
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
	<li><a href="/car_setup">Manajemen Mobil</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
	<li><a href="/loan">Peminjaman Mobil</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
	<li><a href="/return">Pengembalian Mobil</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
	<li><a href="#" onclick="do_load('test_b1.php##kontrol=2');">STOK 2</a><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span></li>
</ul>
</section>
</aside>
	<div class='content-wrapper' style="height: 100%; padding: 15px; min-height: 599px;">
<div id="contentBox" style="overflow: auto; height: 100%;">
 @yield('ContentForm')
</div>
</div>
  @endsection
