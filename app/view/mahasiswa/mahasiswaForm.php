<div class="w-screen flex p-3 justify-center ">
  <div class="w-[700px] h-fit p-4 border border-1 rounded-md shadow-lg ">
    <h1 class="text-2xl text-sky-600 border-b border-1"><?php if ($action == "form/add") {
      echo "Tambah Mahasiswa";
    } else {
      echo "Edit Mahasiswa";
    } ?></h1>


    <form action="<?=$action ?>" method="POST">
      <input type="hidden" name="id" value="<?=@$x['id_mahasiswa'] ?>">
      <label for="">Nama Mahasiswa:</label><br />
    <input type="text" name="nama_mahasiswa" value="<?=@$x['nama_mahasiswa'] ?>" /><br />
<label for="">NPM:</label><br />
<input type="number" value="<?=@$x['npm'] ?>" name="npm" /><br />
<label for="">Alamat</label><br />
<textarea name="alamat">
<?= @$x['alamat'] ?>
</textarea><br />
<button type="submit" class="p-2 bg-sky-100">Tambah</button>
</form>
</div>
</div>