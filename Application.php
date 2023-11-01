<?php
class Application
{
    const DEFAULT = 'Login';

    public function run()
    {
        // Classe passada via URL
        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);
            $class = ucfirst($url[0]);
        } else {
            $class =  ucfirst(self::DEFAULT);
        }

        // Instancias dos caminhos MVC
        $models  = 'models\\' . $class . 'Model';
        $views = 'views\\' . $class . 'View';
        $controllers = 'controllers\\' . $class . 'Controller';

        // Testes
        // echo ($class . '<br>');
        // echo ($models . '<br>');
        // echo ($views . '<br>');
        // echo ($controllers . '<br>');

        // Referencia e instancia uma nova controller de acordo com parametro da classe
        $controller = new $controllers(new $views, new $models);
        $controller->index();
    }
}
