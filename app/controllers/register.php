<?php
    class Register extends Controller{
        public function index()
        {   
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                //show($_POST);
                $user = $this->load_model("user");
                $user->daftar($_POST);
            }
            $data['page_title'] = "Register";
            $this->view("register", $data);
        }
    }
?>