<?php
use App\view\Components\Components;
if ($action == "form/add") {
  $text = "Tambah";
} else {
  $text = "Edit";
}
?>
<div class="w-screen flex p-3 justify-center ">
  <div class="card shadow-xl mx-12 w-full  border border-2 h-fit">
    <div class="card-body">
      <h1 class="card-title text-sky-600 border-b border-1"><?= $text." Kelas" ?></h1>
      <form action="<?=$action ?>" method="POST" class="form-control">
        <input type="hidden" name="id" value="<?=@$x['id_kelas'] ?>" required>
        <?php Components::textInput("Nama Kelas:", "nama_kelas", @$x['nama_kelas']) ?>

        <?php
        $tahun = date("Y");
        $years = [];
        while ($tahun >= 2006) {
          $years[$tahun] = $tahun;
          $tahun --;
        }
        Components::selectInput("Tahun Akademik:", "thn_akademik", $years, @$x['thn_akademik'])
        ?>

        <?php Components::selectInput("Prodi:", "id_prodi", $this->prodi_option(), @$x['id_prodi']) ?>

        <button type="submit" class="btn bg-sky-300 text-lg text-white"><?=$text ?></button>
      </form>

    </div>
  </div>
</div>