<?php
    class Profile extends Controller{
        public function index()
        {   $data['page_title'] = "Login";
            $this->view("profile", $data);
        }
    }
?>