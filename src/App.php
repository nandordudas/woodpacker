<?php

namespace Woodpacker;

use Woodpacker\Http\Router;

class App
{
  public function __construct(private Router $router)
  {
  }

  public function run()
  {
    $this->router->dispatch();
  }
}
