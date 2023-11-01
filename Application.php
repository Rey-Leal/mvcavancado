<?php
class Application
{
    const DEFAULT = 'Login';

    public function run()
    {
        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);
            $class = 'controllers\\' . ucfirst($url[0]) . 'Controller';
        } else {
            $class = 'controllers\\' . self::DEFAULT . 'Controller';
            $url[0] = self::DEFAULT;
        }

        $nameClass = explode('\\', $class);
        $nameClass = $nameClass[count($nameClass) - 1];

        $view = 'views\\' . $url[0] . 'View';
        $model  = 'models\\' . $url[0] . 'Model';

        echo ($url . '<br>');
        echo ($url[0] . '<br>');
        echo ($class . '<br>');
        echo ($nameClass . '<br>');
        echo ($view . '<br>');
        echo ($model . '<br>');

        // $controller = new $class(new $view, new $model);
        // $controller->index;
    }
}
