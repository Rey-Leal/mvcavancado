<?php

namespace controllers;

class LoginController extends Controller
{
    public function __construct($view, $model)
    {
        parent::__construct($view, $model);
    }

    public function index()
    {
        echo ('Página de login!' . '<br>');
    }
}
