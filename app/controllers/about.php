<?php
    class About extends Controller{

        public function __construct()
        {
            if(!isset($_SESSION['name'])){
                header('Location:' . ROOT . 'login');
            }
        }

        public function index($name = 'AgusHery', $pekerjaan = 'mahasiswa')
        {   
            $data['name'] = 'Agus Hery';
            $data['pekerjaan'] = $pekerjaan;
            $data['title'] = 'About';

            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }
        public function page()
        {
            if(!isset($_SESSION['name'])){
                header('Location:' . ROOT . 'login');
            }
            $this->view('templates/header');
            $this->view('about/page');
            $this->view('templates/footer');
        }
    }