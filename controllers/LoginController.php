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
        if (isset($_POST['validaLogin'])) {
            if ($this->model->validaLogin($_POST['login'], $_POST['senha'])) {
                echo ('Logado!' . '<br>');
            } else {
                echo ('Falha no login!' . '<br>');
            }
        }
        $this->view->render('login');
    }
}
