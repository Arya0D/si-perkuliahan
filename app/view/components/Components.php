<?php
namespace App\view\components;

use App\Config;

class Components
{
  public function navbar() {}

  public static function button($text, $href = null, $color = "bg-stone-200", $img = null) {
    if ($color == null) {
      $color = "bg-stone-200";
    }
    ?>
    <a href="<?= $href ?>" class="w-full">
      <button class="w-12 md:w-full text-xs md:text-md <?= $color ?> btn">
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

  public static function textInput($label, $name, $value = null) {
    ?>
    <label for="" class="label"><?= $label ?></label>
    <input type="text" name="<?=$name ?>" value="<?= $value ?>" class="input input-bordered input-info" required /><br />
<?php
}

public static function numberInput($label, $name, $value = null) {
?>
<label for="" class="label"><?= $label ?></label>
<input type="number" name="<?=$name ?>" value="<?= $value ?>" class="input input-bordered input-info" required /><br  />
<?php
}

public static function selectInput($label, $name, $options = [], $selectedValue = null) {
?>
<label for="" class="label"><?=$label ?></label>
<select name="<?=$name ?>" class="select select-bordered select-info" required>
<?php foreach ($options as $value => $text): ?>
<option value="<?=$value ?>" <?= $value == $selectedValue ? 'selected' : '' ?>><?=$text ?></option>
<?php endforeach; ?>
</select><br  />
<?php
}
}