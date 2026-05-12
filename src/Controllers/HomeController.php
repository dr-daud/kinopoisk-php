<?php

namespace App\Controllers;

class HomeController
{
  public function index():void
  {
    $view = new View();

    $view->page('home');
  }
}