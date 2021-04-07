<?php
    class Controller{
        public function view($path, $data = []){
            //cek di folder views
            if (file_exists("../app/views/" . strtolower($path) . ".php")){
                include "../app/views/" . strtolower($path) . ".php";
            }else{
                include "../app/views/404.php";
            }
        }

        // 
        public function load_model($model){
            //cek di folder views
            if (file_exists("../app/models/" . strtolower($model) . ".class.php")){
                include "../app/models/" . strtolower($model) . ".class.php";
                return $a = new $model();
            }
            return false;
        }
    }