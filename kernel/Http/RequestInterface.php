<?php

namespace App\Kernel\Http;

interface RequestInterface 
{
  public static function createFromGlobals(): static;

  public function uri(): string;

  public function input(string $key, $default = null): mixed;

  public function setValidator(ValidatorInterface $validator): void;

  public function validate(array $rules): bool;

  public function errors(): array;
}