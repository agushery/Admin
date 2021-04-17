<?php
    class Controller {
        //view
        public function view($view, $data= [])
        {
            require '../app/views/' . strtolower($view) . '.php';
        }

        //model
        public function model($model)
        {
            require '../app/models/' . strtolower($model) . '.php';
            return new $model;
        }

    }