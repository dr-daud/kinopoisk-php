<?php

namespace App\Kernel\Container;

class Container
{
  public readonly RequestInterface $request;

  public readonly RequestInterface $router;

  public readonly ViewInterface $view;

  public readonly ValidatorInterface $validator;

  public readonly RedirectInterface $redirect;

  public readonly SessionInterface $session;

  public readonly ConfigInterface $config;

  public readonly DatabaseInterface $database;

  public function __constructor()
  {
      $this->registerServices();
  }

  private function registerServices() {
    $this-> request = Request::createFromGlobals();
    $this-> validator = new Validator();
    $this->request->setValidator($this->validator);
    $this-> redirect = new Redirect();
    $this-> session = new Session();
    $this-> view = new View($this->session);
    $this-> config = new Config();
    $this-> database = new Database($this->config);
    $this-> router = new Router($this->view, $this->request, $this->redirect, $this->database);
  }
}