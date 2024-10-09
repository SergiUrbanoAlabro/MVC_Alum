<?php

class defaultController extends Controller {
    public function index() {
        //cridar a la vista corresponent
<<<<<<< HEAD
        // $this -> render("prova");
        // echo"estic al controller main";
        $params['title'] = 'Home';
        $this->render('mp/index',$params,'layouts/main');
    }

protected function render($path,$params=[],$layout=""){
    //rennderitzar la vista
    ob_start();
    require_once(__DIR__.'/../Views/'.$path.'.view.php');
    $params['content'] = ob_get_clean();
    require_once(__DIR__.'/../Views/'.$layout.'.layout.php');
}
=======
        
        // echo"estic al controller default";
        $params['title']="Home";
        $this->render('mp/index',$params,'main');
    }


>>>>>>> 675ad98f8d4e6d5306329cfe33ec7cd64df4ac2f

}
