<?php
    class Data extends Controller{
        public function __construct()
        {
            if(!isset($_SESSION['name'])){
                header('Location:' . ROOT . 'login');
            }
        }
        public function index()
        {
            //model

            $data['title'] = 'Data Citizen';
            $data['ctz'] = $this->model('data_model')->getAllCitizen(); 
            
            //view
            $this->view('templates/header', $data);
            $this->view('data/index', $data);
            $this->view('templates/footer');
        }

        public function detail($url_warga)
        {
            //model

            $data['title'] = 'Detail Citizen';
            $data['ctz'] = $this->model('data_model')->getCitizenByURL($url_warga); 
            
            //view
            $this->view('templates/header', $data);
            $this->view('data/detail', $data);
            $this->view('templates/footer');
        }

        public function add()
        {
            if ($this->model('data_model')->addData($_POST) > 0 ) {
                Flasher::setFlash('Success', 'Add', 'success');
                header('Location: ' . ROOT . 'data');
                exit;
            }else{
                Flasher::setFlash('Failed', 'Add', 'danger');
                header('Location: ' . ROOT . 'data');
                exit;
            }
        }

        public function delete($url_warga)
        {
            if ($this->model('data_model')->deleteData($url_warga) > 0 ) {
                Flasher::setFlash('Success ', ' Delete', 'success');
                header('Location: ' . ROOT . 'data');
                exit;
            }else{
                Flasher::setFlash('Failed ', ' Delete', 'danger');
                header('Location: ' . ROOT . 'data');
                exit;
            }
        }

        public function getEdit(){
            echo json_encode($this->model('data_model')->getCitizenByURL($_POST['url_warga']));
        }

        public function edit (){
            if ($this->model('data_model')->editData($_POST) > 0 ) {
                Flasher::setFlash('Success ', ' Edit', 'success');
                header('Location: ' . ROOT . 'data');
                exit;
            }else{
                Flasher::setFlash('Failed ', ' Edit', 'danger');
                header('Location: ' . ROOT . 'data');
                exit;
            }
        }
    }