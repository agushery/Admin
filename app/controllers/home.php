<?php
    class Home extends Controller{
        public function index()
        {
            // models
            $data['title'] = 'Dashboard';
            $data['nama'] = $this->model('user_model')->getUser();
            // view
            $this->view('templates/header',$data);
            $this->view('home/index',$data);
            $this->view('templates/footer');
        }
    }