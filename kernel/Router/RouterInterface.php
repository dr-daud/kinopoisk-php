<?php

namespace App\Kernel\Http;

interface RequestInterface 
{
   public function dispatch(string $uri, string $method): void;
}