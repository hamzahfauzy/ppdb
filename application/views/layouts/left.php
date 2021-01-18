  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->userdata('name')?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?=base_url('admin/home')?>"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <?php if(in_array($this->session->userdata('level'),['admin','verifikator'])): ?>
        <li><a href="<?=base_url('admin/siswa')?>"><i class="fa fa-link"></i> <span>Calon Siswa</span></a></li>
        <li><a href="<?=base_url('admin/siswa/index/actioned')?>"><i class="fa fa-link"></i> <span>Verifikasi Siswa</span></a></li>
        <li><a href="<?=base_url('admin/siswa/index/verified')?>"><i class="fa fa-link"></i> <span>Kelulusan</span></a></li>
        <?php endif ?>
        <?php if(in_array($this->session->userdata('level'),['admin','panitia'])): ?>
        <li><a href="<?=base_url('admin/siswa/index/reregistered')?>"><i class="fa fa-link"></i> <span>Daftar Ulang</span></a></li>
        <?php endif ?>
        <?php /*
        <li><a href="<?=base_url('admin/home')?>"><i class="fa fa-link"></i> <span>Laporan</span></a></li>
        */ ?>
        <?php if(in_array($this->session->userdata('level'),['admin'])): ?>
        <li><a href="<?=base_url('admin/pengguna')?>"><i class="fa fa-link"></i> <span>Pengguna</span></a></li>
        <?php endif ?>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>