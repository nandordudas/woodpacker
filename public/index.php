<?php

use Workspace\Woodpacker\App;
use Workspace\Woodpacker\Http\Router;

require __DIR__ . '/../vendor/autoload.php';

try {
  $app = new App(
    router: new Router(),
  );

  $app->run();
} catch (Throwable $error) {
  dump($error->getMessage());
}
