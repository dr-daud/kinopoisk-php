<?php

namespace App\Kernel\Http;

interface ViewInterface
{
  public function page(string $name):void;
  public function component(string $name):void;
}