  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Pengguna</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-primary">
        <div class="box-header">
          <a href="<?=base_url('admin/pengguna/create')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Data Baru</a>
        </div>
        <div class="box-body">
          <?php
          if($this->session->flashdata('create_user_success')) {
            $message = $this->session->flashdata('create_user_success');
          ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
          <?php
            }
          ?>
          <div class="table-responsive">
          <table class="table table-bordered datatable table-striped">
            <thead>
            <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>No HP</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach($users as $key => $user): ?>
              <tr>
                <td><?=++$key?></td>
                <td><?=$user->name?></td>
                <td><?=$user->username?></td>
                <td><?=$user->email?></td>
                <td><?=$user->phone?></td>
                <td>
                  <a href="<?=base_url('admin/pengguna/edit')?>/<?=$user->id?>"><i class="fa fa-pencil"></i></a>
                  <a href="<?=base_url('admin/pengguna/delete')?>/<?=$user->id?>" class="text-danger" onclick="if(confirm('Apakah anda yakin menghapus data ini?')){return true}else{return false}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->