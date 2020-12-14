<?php

namespace App\Http;

class Request
{
  protected $segments = [];
  protected $controller;
  protected $method;

  public function __construct()
  {
    // localhosy
    $this->segments = explode('/', $_SERVER['REQUEST_URI']);

    var_dump($_SERVER['REQUEST_URI']);
  }
}
