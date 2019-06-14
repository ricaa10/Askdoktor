  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
  <div class="col-lg-8">

   <form action="" method="post" >
    <input type="hidden" name="id" value=" <?= $user_sub_menu['id'];?>">
   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama Submenu</label>
    <div class="col-sm-10">
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $user_sub_menu['title']; ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

   <div class="form-group row">
     <label for="name" class="col-sm-2 col-form-label">Menu</label>
      <div class="col-sm-10">
      <select class="form-control" id="menu_id" name="menu_id">
      <?php foreach ($menu as $m) : ?>
      <option value="<?= $m['id'];?>"> <?= $m['menu']; ?> </option>
      <?php endforeach; ?>
      </select>
      </div>
    </div>


   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Submenu url</label>
    <div class="col-sm-10">
        <input type="text" name="url" class="form-control" id="url" value="<?= $user_sub_menu['url']; ?>">
        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

    

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Submenu icon</label>
    <div class="col-sm-10">
        <input type="text" name="icon" class="form-control" id="icon" value="<?= $user_sub_menu['icon']; ?>">
        <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
   </div>

   <div class="form-group row">
        <div class="form-check">
         <input class="form-check-input" type="checkbox" value="1"  name="is_active" id="is_active" checked>
          <label class="form-check-label" form="defaultCheck1"> Aktif? </label>
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