<?php

<<<<<<< HEAD
class errorController
{
    public function error()
    {
        $params['title'] = 'Error 404';
        $this->render('error/error404', $params, 'layouts/main');
    }

    protected function render($path, $params = [], $layout = "")
    {
        //rennderitzar la vista
        ob_start();
        require_once(__DIR__ . '/../Views/' . $path . '.view.php');
        $params['content'] = ob_get_clean();
        require_once(__DIR__ . '/../Views/' . $layout . '.layout.php');
    }
=======
class errorController {
    public function index() {
        //cridar a la vista corresponent
        
        // echo"estic al controller error";
        $params['title']="Error";
        $this->render('error/e404',$params,'main');
    }


>>>>>>> 675ad98f8d4e6d5306329cfe33ec7cd64df4ac2f
}
