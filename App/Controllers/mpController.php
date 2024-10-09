<?php

class mpController extends Controller {

    public function index() {
        $mpModel = new Mp;

        $params['title'] = 'Mps';
        $params['llista'] = $mpModel->getAll();

        $this->render('mp/index',$params,'main');
    }

    public function store() {
        $mpModel = new Mp();

        $idMp = $_SESSION['id']++;
        $numMp = $_POST['num_mp'];
        $nomMp = $_POST['nom_mp'];

        $mp = array (
            'id' => $idMp,
            'num_mp' => $numMp,
            'nom_mp' => $nomMp
        );

        $mpModel->create($mp);
        $this->index();
    }
}