<?php

namespace App\Kernel\Http;

interface ViewInterface
{
  public function page(string $name, array $data = []): void;
  public function component(string $name):void;
}