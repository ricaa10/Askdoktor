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

        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Jadwal</a>


        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Spesialis</th>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
                <th scope="col">Aksi</th>

            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Jadwal as $j) : ?>
             <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $j['nama']; ?></td>
                <td><?= $j['spesialis']; ?></td>
                <td><?= $j['hari']; ?></td>
                 <td><?= $j['jam']; ?></td>
                <td>
                <a href="<?= base_url(); ?>admin/editjadwal/<?= $j['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url(); ?>admin/hapusJadwal/<?= $j['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus </a>
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
        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Jadwal Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/tambahJadwal'); ?>" method="post">
      <div class="modal-body">
        
      <div class="form-group">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama ">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="spesialis" name="spesialis" placeholder="Spesialis">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="jam" name="jam" placeholder="Jam">
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



