<?php

namespace App\Kernel\Container;

class Container
{
  public readonly Request $request;
  public readonly Request $router;

  public readonly View $view;

  public readonly Validator $validator;

  public readonly Redirect $redirect;

  public function __constructor()
  {
      $this->registerServices();
  }

  private function registerServices() {
    $this-> request = Request::createFromGlobals();
    $this-> view = new View();
    $this-> validator = new Validator();
    $this->request->setValidator($this->validator);
    $this-> redirect = new Redirect();
    $this-> router = new Router($this->view, $this->request, $this->redirect);
  }
}