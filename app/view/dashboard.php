<?php
use App\view\components\Components;
use App\controller\KelasController;
use App\controller\ProdiController;
use App\controller\MahasiswaController;
$kelas = new KelasController;
$prodi = new ProdiController;
$mahasiswa = new MahasiswaController;

?>

<div class="flex flex-col gap-4 items-center justify-center w-full">
  <h1 class="text-6xl font-semibold text-sky-500">SI-PERKULIAHAN</h1>
  <p class="text-xl">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis!
  </p>
  <div class="stats border border-2">
    <div class="stat">
      <div class="stat-title">
        Kelas
      </div>
      <div class="stat-value">
        <?= mysqli_num_rows($kelas->getAll()) ?>
      </div>
      <div class="stat-desc">
        Lorem ipsum.
      </div>
    </div>
    <div class="stat">
      <div class="stat-title">
        Mahasiswa
      </div>
      <div class="stat-value">
        <?= mysqli_num_rows($mahasiswa->getAll()) ?>
      </div>
      <div class="stat-desc">
        Lorem ipsum.
      </div>
    </div>
    <div class="stat">
      <div class="stat-title">
        Prodi
      </div>
      <div class="stat-value">
        <?= mysqli_num_rows($prodi->getAll()) ?>
      </div>
      <div class="stat-desc">
        Lorem ipsum.
      </div>
    </div>
  </div>

  

</div>