<?php

class errorController
{
    public function error()
    {
        $params['title'] = 'Error 404';
        $this->render('error/error404', $params, 'main');
    }

    protected function render($path, $params = [], $layout = "")
    {
        //rennderitzar la vista
        ob_start();
        require_once(__DIR__ . '/../Views/' . $path . '.view.php');
        $params['content'] = ob_get_clean();
        require_once(__DIR__ . '/../Views/' . $layout . '.layout.php');
    }
}
