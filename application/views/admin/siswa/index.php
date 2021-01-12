  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?=$title?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$title?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-primary">
        <div class="box-body">
          <?php
          if($this->session->flashdata('success')) {
            $message = $this->session->flashdata('success');
          ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
          <?php
            }
          ?>
          <table class="table table-bordered datatable table-striped">
            <thead>
            <tr>
              <th>NO</th>
              <th>No Pendaftaran</th>
              <th>Nama</th>
              <th>Jenjang</th>
              <th>No HP</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php 
              $badge = ['Daftar'=>'primary','Terverifikasi'=>'success','Ditolak'=>'danger','Daftar Ulang'=>'success'];
              foreach($students as $key => $student): 
              ?>
              <tr>
                <td><?=++$key?></td>
                <td><?=$student->register_number?></td>
                <td><?=$student->name?></td>
                <td><?=explode('.',$student->register_number)[0]?></td>
                <td><?=$student->phone?></td>
                <td>
                  <span class="label label-<?=$badge[$student->status]?>">
                    <?=$student->status?>
                  </span>
                </td>
                <td>
                  <a href="<?=base_url('admin/siswa/detail')?>/<?=$student->id?>"><i class="fa fa-eye"></i></a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->