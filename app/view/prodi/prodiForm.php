<?php
if ($action == "form/add") {
  $text = "Tambah";
} else {
  $text = "Edit";
}
?>

<div class="w-screen flex p-3 justify-center ">
  <div class="  h-fit p-4 border border-1 rounded-md shadow-lg ">
    <form action="<?= $action ?>" method="POST" accept-charset="utf-8">
      <label for="">Nama Prodi</label><br />
    <input type="hidden" name="id" id="id" value="<?=@$x['id_prodi'] ?>" />
  <input type="text" name="namaProdi" value="<?=@$x['nama_prodi'] ?>" /><br />
<input type="submit" name="submit" />
</form>
</div>
</div>