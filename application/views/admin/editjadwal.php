  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
  <div class="col-lg-8">

   <form action="" method="post" >
    <input type="hidden" name="id" value=" <?= $jadwal['id'];?>">
   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $jadwal['nama']; ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Spesialis</label>
    <div class="col-sm-10">
        <input type="text" name="spesialis" class="form-control" id="spesialis" value="<?= $jadwal['spesialis']; ?>">
        <?= form_error('spesialis', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Hari</label>
    <div class="col-sm-10">
        <input type="text" name="hari" class="form-control" id="hari" value="<?= $jadwal['hari']; ?>">
        <?= form_error('hari', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Jam</label>
    <div class="col-sm-10">
        <input type="text" name="jam" class="form-control" id="jam" value="<?= $jadwal['jam']; ?>">
        <?= form_error('jam', '<small class="text-danger pl-3">', '</small>'); ?>
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