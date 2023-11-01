<?php
class Application
{
    const DEFAULT = 'Login';

    public function run()
    {
        // Pega parametro passado via URL
        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);
            $class = ucfirst($url[0]);
        } else {
            $class =  ucfirst(self::DEFAULT);
        }

        // Instancia caminhos dos arquivos MVC
        $model  = 'models\\' . $class . 'Model';
        $view = 'views\\' . $class . 'View';
        $controller = 'controller\\' . $class . 'Controller';

        echo ($class . '<br>');
        echo ($model . '<br>');
        echo ($view . '<br>');
        echo ($controller . '<br>');

        // $controller = new $class(new $view, new $model);
        // $controller->index;
    }
}
