<?php

require __DIR__ . '/../vendor/autoload.php';

$db_file_path = __DIR__ . '/../temp/database.sqlite';

// $connection = new PDO("sqlite:{$db_file_path}");

// dump($connection);

// /login
// /register
// /dashboard

abstract class Controller
{
}

final class LoginController extends Controller
{
  public function __construct()
  {
    dump(self::class);
  }
}

final class RegisterController extends Controller
{
}

class Request
{
  public function getUriPath()
  { // TODO: remove trailing slash
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    return $path;
  }
}

class Response
{
  public function send(mixed $content)
  {
    dump($content);
  }
}

class Router
{
  public function __construct(private Request $request = new Request())
  {
    //
  }

  public function dispatch()
  {
    // $response = new Response();

    match ($this->request->getUriPath()) {
      '/login' => new LoginController(),
    };
  }
}

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

$app = new App(
  router: new Router(),
);

$app->run();
