  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
  <div class="col-lg-8">

   <?= form_open_multipart('admin/editartikel'); ?>
   
   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
        <input type="text" name="judul" class="form-control" id="judul" value="<?= $artikel['judul']; ?>">
        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>
   <div class="form-group row">
    <div class="col-sm-2">Gambar</div>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3">
                <img src="<?= base_url('assets/img/artikel/') . $artikel['image']; ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Pilih Gambar</label>
                </div>
            </div>
        </div>
    </div>
   </div>

    <div class="form-group row">        
        <label for="name" class="col-sm-2 col-form-label">Isi</label>
         <div class="col-sm-10">
      <textarea class="ckeditor" cols="100" rows="20" name="isi" required="<?= $artikel['isi']; ?>"></textarea>
      </div>
    </div>

   <div class="form-group row justify-content-end">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
   
   </div>

</form>

  </div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->