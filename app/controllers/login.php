<?php
    class Login extends Controller{
        public function index()
        {
            // models
            $data['title'] = 'Login Page';
            
            // view
            $this->view('templates/header', $data);
            $this->view('login/index');
            $this->view('templates/footer');
        }
        public function masuk(){
            if ($this->model('User_model')->login($_POST)>0) {
                session_start();
                $_SESSION['name'] = 'Admin';
                header('Location: ' . ROOT);
                exit;
            }else{
                Flasher::setFlash('Failed', 'login', 'danger');
                header('Location: ' . ROOT);
                exit;
            }
        }
        public function logout(){
            session_destroy();
            header('Location: ' . ROOT);
            exit;
        }

    }