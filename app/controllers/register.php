<?php
    class Register extends Controller{
        public function index()
        {   $data['page_title'] = "Login";
            $this->view("register", $data);
        }
    }
?>