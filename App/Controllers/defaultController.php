<?php

class defaultController extends Controller {
    public function index() {
        //cridar a la vista corresponent
        // $this -> render("prova");
        // echo"estic al controller main";
        $params['title'] = 'Home';
        $this->render('home/index',$params,'layouts/main');
    }

protected function render($path,$params=[],$layout=""){
    //rennderitzar la vista
    ob_start();
    require_once(__DIR__.'/../Views/'.$path.'.view.php');
    $params['content'] = ob_get_clean();
    require_once(__DIR__.'/../Views/'.$layout.'.layout.php');
}

}
