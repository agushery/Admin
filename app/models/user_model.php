<?php
    class User_model {
        private $nama = 'Agus Hery';

        public function __construct()
        {
            $this->db = new Database;
        }

        //nama about
        public function getUser()
        {
            return $this->nama;
        }

        //login
        public function login($data){
            $this->db->query("SELECT * FROM users WHERE email = :email AND password = :password");
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', $data['password']);
            $this->db->execute();
            return $this->db->rowCount();
            // echo 'Login_modal';
        }
    }