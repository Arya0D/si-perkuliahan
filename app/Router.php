<?php

namespace App;
class Router
{
  private $routes = [];

  public function add($method, $path, $controller, $function) {
    $this->routes[] = [
      "method" => $method,
      "path" => $path,
      "controller" => $controller,
      "function" => $function,
    ];
  }

  public function run() {
    $path = "/";

    if (isset($_SERVER["PATH_INFO"])) {
      $path = $_SERVER["PATH_INFO"];
    }
    $method = $_SERVER["REQUEST_METHOD"];

    foreach ($this->routes as $x) {
      if ($path == $x['path'] && $method == $x['method']) {
        $controller = new $x['controller'];
        $function = $x['function'];
        $controller->$function();
      } 
    }
  }
}