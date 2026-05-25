<?php

namespace App\Controllers;

use App\Kernel\Router\RouterInterface;

class RegisterContoller extends Controller
{
  public function index(): void
  {
    $this->view('register');
  }

  public function register(): void
  {
    $validation = $this->request()->validate([
      'email' => ['required', 'email'],
      'password' => ['required', 'min:8'],
    ]);

    if(! $validate) {
       foreach($this->request()->errors() as $field => $errors) {
        $this->session()->set($field , $errors);
    }
    $this->redirect('register');
  }

  $userId = $this->db()->insert('users', [
    'email' => $this->request()->input('email'),
    'password' => password_hash($this->request()->input('password'), PASSWORD_DEFAULT),
  ]);
  }
}