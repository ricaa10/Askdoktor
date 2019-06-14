  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
        <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
        </div>
        <?php endif; ?>

        <?= $this->session->flashdata('message'); ?>

        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Pasien</a>


        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tgl lahir</th>
                <th scope="col">Tgl Daftar</th>
                <th scope="col">Aksi</th>

            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pasien as $p) : ?>
             <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['jkel']; ?></td>
                <td><?= $p['telepon']; ?></td>
                <td><?= $p['alamat']; ?></td>
                <td><?= $p['tanggal_lahir']; ?></td>
                <td><?= $p['tanggal_daftar']; ?></td>
                <td>
                <a href="<?= base_url(); ?>admin/editpasien/<?= $p['id']; ?>" class="badge badge-success">edit</a>
                <a href=" <?= base_url(); ?>admin/hapusp/<?= $p['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus </a>
                </td>
                
                   
            </tr> 
            <?php $i++; ?>
            <?php endforeach;?>
            </tbody>
         </table>

    </div>
    </div>
    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Pasien Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/tambahp'); ?>" method="post">
      <div class="modal-body">
        
      <div class="form-group">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
      </div>

      <div class="form-group">
      <select class="form-control" id="jkel" name="jkel"><option value="">Jenis Kelamin</option>
        <option value="L">Pria </option>
        <option value="P">Wanita </option>
      </select>
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
      </div>

      <div class="form-group">
      <input placeholder="Tgl lahir" class="form-control" name="tanggal_lahir" type="text" onfocus="(this.type='date')" id="tanggal_lahir">
      </div>

    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>


