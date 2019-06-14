  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
  <div class="col-lg-8">

   <form action="" method="post" >
    <input type="hidden" name="id" value=" <?= $tabel_obat['id'];?>">
   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $tabel_obat['nama']; ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
        <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $tabel_obat['keterangan']; ?>">
        <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
        <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $tabel_obat['kategori']; ?>">
        <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>


   <div class="form-group row justify-content-end">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
   
   </div>

</form>

  </div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->