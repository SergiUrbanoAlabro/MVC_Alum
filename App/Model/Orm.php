<?php

class Orm {
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
        if (isset($_SESSION[$model])) {
            $_SESSION[$model] = [];
        }
    }

    public function getById($id) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            if ($value['id'] == $id) {
                unset($_SESSION[$this->model][$key]);
                return $value;
            }
        }
        return null;
    }

    public function getAll() {
        return $_SESSION[$this->model];
    }

    public function updateItemById($itemUpdated) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            
        }
    }
}