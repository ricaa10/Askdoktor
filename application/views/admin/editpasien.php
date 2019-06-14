  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
  <div class="col-lg-8">

   <form action="" method="post" >
    <input type="hidden" name="id" value=" <?= $pasien['id'];?>">
   <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $pasien['nama']; ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

   <div class="form-group row">
                <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                 <div class="col-sm-10">
                <select class="form-control" id="jkel" name="jkel" value="<?= $pasien['jkel'];?>">
                 <?php foreach ($jkel as $jk) : ?>
                  <?php if( $jk == $pasien['jkel']) :?>
                      <option value="<?= $jk; ?>" selected><?= $jk ?></option>
                    <?php else :?>
                      <option value="<?= $jk; ?>" ><?= $jk ?></option>
                    <?php endif ?>
                <?php endforeach; ?>
                  
                </select>
             </div>
           </div>



   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">No. Telp</label>
    <div class="col-sm-10">
        <input type="text" name="telepon" class="form-control" id="telepon" value="<?= $pasien['telepon']; ?>">
        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pasien['alamat']; ?>">
        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>


   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Tgl Lahir</label>
    <div class="col-sm-10">
        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $pasien['tanggal_lahir']; ?>">
        <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
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