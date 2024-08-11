<?php

namespace App\view\components;

use App\Config;
class Components
{
  public function navbar() {
    ?>
    <nav class="fixed top-0 left-0 w-full">
      <div class="w-100 flex justify-between items-center  px-6 py-4 border border-1">
        <a href="#" class="text-xl font-semibold">SI-PERKULIAHAN</a>
        <a href="" class="italic font-thin text-sky-100">User</a>
      </div>
    </nav>
    <?php
  }

  static public function button($text, $href = null, $color = "bg-stone-200", $img = null,) {

    ?>

    <a href="<?= $href ?>" class="w-full">
      <button class="p-2 rounded w-full flex items-center justify-center gap-2 <?= $color ?>">
        <?php
        if ($img == null) {
          echo $text;
        } else {
          ?>
          <img src=<?= Config::url().'/si-perkuliahan/public/img/'.$img ?> width="20" alt="">
          <?php echo $text;
        } ?>
      </button>
    </a>
    <?php
  }
}