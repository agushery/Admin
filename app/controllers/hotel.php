<?php
    class Hotel extends Controller{
        public function __construct()
        {
            if(!isset($_SESSION['name'])){
                header('Location:' . ROOT . 'login');
            }
        }
        public function index()
        {
            //model

            $data['title'] = 'Data Hotel';
            $data['hotel'] = $this->model('hotel_model')->getAllHotel();
            $this->model('data_model');

            
            //view
            $this->view('templates/header', $data);
            $this->view('hotel/index', $data);
            $this->view('templates/footer');
        }

        public function detail($id_hotel)
        {
            //model

            $data['title'] = 'Detail Hotel';
            $data['htl'] = $this->model('hotel_model')->getHotelById($id_hotel); 
            
            //view
            $this->view('templates/header', $data);
            $this->view('hotel/detail', $data);
            $this->view('templates/footer');
        }

        public function add()
        {
            if ($this->model('hotel_model')->addData($_POST) > 0 ) {
                Flasher::setFlash('Success', 'Add', 'success');
                header('Location: ' . ROOT . 'hotel');
                exit;
            }else{
                Flasher::setFlash('Failed', 'Add', 'danger');
                header('Location: ' . ROOT . 'hotel');
                exit;
            }
        }

        public function delete($id_hotel)
        {
            if ($this->model('hotel_model')->deleteData($id_hotel) > 0 ) {
                Flasher::setFlash('Success ', ' Delete', 'success');
                header('Location: ' . ROOT . 'hotel');
                exit;
            }else{
                Flasher::setFlash('Failed ', ' Delete', 'danger');
                header('Location: ' . ROOT . 'hotel');
                exit;
            }
        }

        public function getEdit(){
            echo json_encode($this->model('hotel_model')->getHotelById($_POST['id_hotel']));
        }

        public function edit (){
            if ($this->model('hotel_model')->editData($_POST) > 0 ) {
                Flasher::setFlash('Success ', ' Edit', 'success');
                header('Location: ' . ROOT . 'hotel');
                exit;
            }else{
                Flasher::setFlash('Failed ', ' Edit', 'danger');
                header('Location: ' . ROOT . 'hotel');
                exit;
            }
        }
    }