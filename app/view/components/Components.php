<?php

namespace App\view\components;

use App\Config;
class Components
{
  public function navbar() {}

  static public function button($text, $href = null, $color = "bg-stone-200", $img = null,) {

    if ($color == null) {
      $color = "bg-stone-200";
    }

    ?>

    <a href="<?= $href ?>" class="w-full">
      <button class="w-full <?= $color ?> btn">
        <?php
        if ($img == null) {
          echo "<span>".$text."</span>";
        } else {
          ?>
          <img src=<?= Config::url().'/img/'.$img ?> width="20" alt="">
          <?php
          echo "<span class='w-2/3'>".$text."</span>";
        } ?>
      </button>
    </a>
    <?php
  }
}