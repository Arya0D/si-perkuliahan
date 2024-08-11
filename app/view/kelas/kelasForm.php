<div class="w-screen flex p-3 justify-center ">
  <div class="w-[700px] h-fit p-4 border border-1 rounded-md shadow-lg ">
    <h1 class="text-2xl text-sky-600 border-b border-1"><?php if ($action == "form/add") {
      echo "Tambah Kelas";
    } else {
      echo "Edit Kelas";
    } ?></h1>


    <form action="<?=$action ?>" method="POST">
      <input type="hidden" name="id" value="<?=@$x['id_kelas'] ?>" required>
      <label for="">Nama Kelas:</label><br />
    <input type="text" name="nama_kelas" value="<?=@$x['nama_kelas'] ?>" /><br required />
<label for="">Tahun Akademik:</label><br />
<select>
<?php
if (@$x) {
?>
<option><?=@$x['thn_akademik'] ?></option>
<?php
}
$tahun = 2006;
while ($tahun <= 2024) {
?>
<option value="<?=$tahun ?>"><?= $tahun ?></option>
<?php
$tahun ++;
}
?>
</select><br />

<label for="">Prodi</label><br />
<select name="id_prodi" required>
<?php $this->prodi_option() ?>
</select><br />
<button type="submit" class="p-2 bg-sky-100">Tambah</button>
</form>
</div>
</div>