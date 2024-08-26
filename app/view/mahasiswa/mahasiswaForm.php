<?php
use App\view\Components\Components;
if ($action == "form/add") {
  $text = "Tambah";
} else {
  $text = "Edit";
}
?>
<div class="w-screen flex p-3 justify-center ">
  <div class="card shadow-xl mx-12 w-full border border-2 h-fit">
    <div class="card-body">
      <h1 class="card-title text-sky-600 border-b border-1"><?= $text." Mahasiswa" ?></h1>
      <form action="<?=$action ?>" method="POST" class="form-control">
        <input type="hidden" name="id" value="<?=@$x['id_mahasiswa'] ?>">
        <?php Components::textInput("Nama Mahasiswa:", "nama_mahasiswa", @$x['nama_mahasiswa']) ?>

        <?php Components::numberInput("NPM:", "npm", @$x['npm']) ?>

        <label for="">Alamat</label><br />
      <textarea name="alamat" required>
        <?= @$x['alamat'] ?>
      </textarea><br />
    <button type="submit" class="btn bg-sky-300 text-lg text-white"><?=$text ?></button>
  </form>
</div>
</div>