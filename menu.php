
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
		
          <img src="foto/<?php echo $foto ?>" class="img-circle" alt="user Image">
        </div>
        <div class="pull-left info">
          <p><a href="?page=profile"><?php echo $datauser['nama'] ?></a></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="?page=hasilcari" method="POST" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="idbox" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<li>
          <a href="?page=beranda">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
           
          </a>
        </li>
		<li>
          <a href="?page=bukutamu">
            <i class="fa fa-user-plus"></i> <span>Tambah Tamu</span>
           
          </a>
        </li>
		<!--<li>
          <a href="?page=tambahsuratmasuk">
            <i class="fa fa-envelope"></i> <span>Tambah Log Barang/Surat</span>
           
          </a>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="?page=profile">Edit User</a></li>
			<?php
			if($username=="admin")
			{
			?>
			<li><a href="?page=tambahuser">Tambah User</a></li>
			
			<li><a href="?page=daftaruser">Daftar User</a></li>
			<?php
			}
			?>
          </ul>
        </li>
		<!--<li class="treeview">
          <a href="#">
            <i class="fa fa-info"></i> <span>About JIHS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="?page=daftarabout">Daftar About</a></li>
            
			<li><a href="?page=daftardosen">Staff Pengajar</a></li>
			
			<li><a href="?page=patner">Daftar Partner</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Program Study</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="?page=daftarprogramstudi">Daftar Program Studi</a></li>
            
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span>Campus Life</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="?page=daftaraktifitaskampus">Campus Activities</a></li>
            <li><a href="?page=daftarevent">Campus Events</a></li>
			<li><a href="?page=daftarnews">Campus News</a></li>
			<li><a href="?page=daftartour">Tour de Campus</a></li>
			<li><a href="?page=studentsay">What Student Say</a></li>
			
			
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Admission</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=daftaradmission">Daftar Admission</a></li>
            
			
			
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i> <span>Your Career</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=daftarkarir">Daftar Karir</a></li>
          
            <li><a href="?page=suksesstory">Success Story</a></li>
			<li><a href="?page=daftarlowongan">Lowongan Pekerjaan</a></li>
			<li><a href="?page=alumni">Alumni</a></li>
			
          </ul>
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Formulir Pendaftaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="?page=daftarmahasiswabaru">Daftar Mahasiswa Baru</a></li>
            
			
          </ul>
        </li>	
		</li>-->
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Buku Tamu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  <li ><a href="?page=bukutamu">Tambah Buku Tamu</a></li>
		  <li ><a href="?page=daftartamu">Daftar Tamu</a></li>
          <li ><a href="?page=daftarlogtamu">Daftar Log Tamu</a></li>
		  <li ><a href="?page=daftarlogcheckin">Daftar Tamu Check-In</a></li>
		  <li ><a href="?page=daftarlogcheckout">Daftar Tamu Check-Out</a></li>
		  <?php
			if($username=="admin")
			{
			?>
		  <li ><a href="?page=daftartenant">Daftar Tenant</a></li>
		  <?php
			}
			?>
		  
          </ul>
		 
        </li>
		<!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-file-photo-o"></i> <span>Log Barang/Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="?page=tambahsuratmasuk">Tambah Log Barang/Surat</a></li>
            <li ><a href="?page=daftarsuratmasuk">Daftar Log Barang/Surat</a></li>
			
          </ul>
		 
        </li>	-->
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
