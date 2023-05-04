<?php

namespace Woodpacker\Http;

use Woodpacker\Http\Controllers\LoginController;
use Woodpacker\Http\Controllers\PageNotFoundController;

final class Router
{
  public function __construct(private Request $request = new Request())
  {
  }

  public function dispatch()
  {
    match ($this->request->getUriPath()) {
      '/login' => new LoginController(),
      default => new PageNotFoundController(),
    };
  }
}
