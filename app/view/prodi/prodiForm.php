<?php
use App\view\Components\Components;
if ($action == "form/add") {
  $text = "Tambah";
} else {
  $text = "Edit";
}
?>

<div class="w-screen flex p-3 justify-center ">
  <div class="card shadow-xl mx-12 my-6 w-full border border-2 h-fit">
    <div class="card-body">
      <h1 class="card-title text-sky-600 border-b border-1"><?= $text." Prodi" ?></h1>
      <form action="<?=$action ?>" method="POST" class="form-control">

        <input type="hidden" name="id" id="id" value="<?=@$x['id_prodi'] ?>" />

      <?php Components::textInput("Nama Prodi:", "namaProdi", @$x['nama_prodi']) ?>
      <button type="submit" class="btn bg-sky-300 text-lg text-white"><?=$text ?></button>
    </form>
  </div>
</div>