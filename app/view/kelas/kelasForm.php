<?php
if ($action == "form/add") {
  $text = "Tambah";
} else {
  $text = "Edit";
}
?>
<div class="w-screen flex p-3 justify-center ">
  <div class="card w-96 border border-2 h-fit -z-10">
    <div class="card-body">
      <h1 class="card-title text-sky-600 border-b border-1"><?= $text." Kelas" ?></h1>
      <form action="<?=$action ?>" method="POST">
        <input type="hidden" name="id" value="<?=@$x['id_kelas'] ?>" required>
        <label for="">Nama Kelas:</label><br />
      <input type="text" name="nama_kelas" value="<?=@$x['nama_kelas'] ?>" /><br required />
  <label for="">Tahun Akademik:</label><br />
<select name="thn_akademik">
  <?php
  if (@$x) {
    ?>
    <option><?=@$x['thn_akademik'] ?></option>
    <?php
  }
  $tahun = date("Y");
  while ($tahun >= 2006) {
    ?>
    <option value="<?=$tahun ?>"><?= $tahun ?></option>
    <?php
    $tahun --;
  }
  ?>
</select><br />

<label for="">Prodi</label><br />
<select name="id_prodi" required>
<?php $this->prodi_option() ?>
</select><br />
<button type="submit" class="p-2 bg-sky-100"><?=$text ?></button>
</form>

</div>



</div>
</div>