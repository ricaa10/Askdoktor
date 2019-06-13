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

        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Obat</a>


        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aksi</th>

            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Obat as $o) : ?>
             <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $o['nama']; ?></td>
                <td><?= substr($o['keterangan'],0,200).' ...'; ?></td>
                <td><?= $o['kategori']; ?></td>
                <td>
                <a href="<?= base_url(); ?>admin/editObat/<?= $o['id']; ?>" class="badge badge-success"  data-toggle="modal" data-target="#editModal">edit</a>
                <a href="<?= base_url(); ?>admin/hapusObat/<?= $o['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus </a>
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
        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Obat Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/tambahObat'); ?>" method="post">
      <div class="modal-body">
        
      <div class="form-group">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Obat">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Obat">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori Obat">
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

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Data Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/editObat'); ?>" method="post">
      <div class="modal-body">
        
      <div class="form-group">
      <label for="nama">Nama Obat</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $o['nama'];?>">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Obat">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori Obat">
      </div>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="simpan" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


