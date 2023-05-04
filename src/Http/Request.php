<?php

namespace Woodpacker\Http;

final class Request
{
  public function getUriPath()
  { // TODO: remove trailing slash
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    return $path;
  }
}
