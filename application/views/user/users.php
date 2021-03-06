<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg">
      <div class="card-body">
        <div class="table-responsive">
          <!-- untuk menampilkan erorr -->
          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert"></div>
            <?= validation_errors(); ?>
          <?php endif; ?>
          <?= $this->session->flashdata('message'); ?>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">role</th>
                <th scope="col">Active</th>
                <th scope="col">Tanggal Daftar</th>
                <th scope="col">Image</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($users as $us) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $us['name']; ?></td>
                  <td><?= $us['email']; ?></td>
                  <td>
                    <?php foreach ($role as $k) { ?>
                    <?php if ($k->id == $us['role_id']) {
                          echo $k->role;
                        }
                      } ?>
                  </td>
                  <td><?= $us['is_active']; ?></td>
                  <td><?= date('d F Y', $user['date_created']); ?></td>
                  <td><img src="<?= base_url('assets/img/profile/') . $us['image']; ?>" class="img-circle" alt="..." width="40" height="40"></td>
                  <td>
                    <a href="<?= base_url(); ?>admin/editusers/<?= $us['id']; ?>" class="badge badge-success">edit</a>
                    <a href="<?= base_url(); ?>admin/hapus/<?= $us['id']; ?>" class="badge badge-danger">hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>