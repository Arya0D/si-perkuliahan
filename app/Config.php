<?php
namespace App;
class Config {
  public static function url() {
    return "http" . '://' . $_SERVER['HTTP_HOST'];
  }
}