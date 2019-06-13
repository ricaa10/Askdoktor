  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

        <?= form_open_multipart('admin/tambahArtikel'); ?>
        <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
        </div>
        <?php endif; ?>

        <?= $this->session->flashdata('message'); ?>

        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Artikel</a>


        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal Buat</th>
                <th scope="col">Tanggal Update</th>
                <th scope="col">Icon</th>
                <th scope="col">Isi</th>
                <th scope="col">Kunjungan</th>
                <th scope="col">Aksi</th>

            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Artikel as $a) : ?>
             <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $a['judul']; ?></td>
                <td><?= $a['tgl_buat']; ?></td>
                <td><?= $a['tgl_update']; ?></td>
                <td><?= $a['image']; ?></td>
                <td><?= substr($a['isi'],0,200).' ...'; ?></td>
                 <td><?= $a['kunjungan']; ?></td>
                
                <td>
                <a href="<?= base_url(); ?>admin/editArtikel/<?= $a['id']; ?> "class="badge badge-success">edit </a>
                <a href="<?= base_url(); ?>admin/hapusArtikel/<?= $a['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus </a>
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
        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/tambahArtikel'); ?>" method="post">
      <div class="modal-body">
      <?= form_open_multipart('admin/tambahArtikel'); ?>
      <div class="form-group">
      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
      </div>

      <div class="custom-file">
      <input type="file" class="custom-file-input" id="image" name="image">
      <label class="custom-file-label" for="image">Pilih Gambar</label>
      </div> <br>

      <div>
        
      </div>


      <div class="form-group">
        <label for="name" class="col-sm-2 col-form-label">Isi</label>
      <textarea class="ckeditor" cols="100" rows="20" name="isi"></textarea>
      </div>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" value="Simpan" class="btn btn-primary" name="submit">
      </div>
      </form>
    </div>
  </div>
</div>
