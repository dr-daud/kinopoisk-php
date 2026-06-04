<?php

namespace App\Kernel\Auth;

class User
{
  public function __construct(
    public int $id,
    public string $name,
    public string $email,
    public string $password,
  ) {
  }

  public function id(): int
  {
    return $this->id;
  }

  public function email(): string
  {
    return $this->email;
  }

  public function password(): string
  {
    return $this->password;
  }

  public function name(): string
  {
    return $this->name;
  }
}