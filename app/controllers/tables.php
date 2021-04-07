<?php
    class Tables extends Controller{
        public function index()
        {   $data['page_title'] = "Login";
            $this->view("tables", $data);
        }
    }
?>