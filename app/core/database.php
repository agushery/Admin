<?php
    class Database{

        public static $con;

        public function __construct(){
            try{
                $string = DB_TYPE .  ":host=" . DB_HOST . ";dbname=" . DB_NAME;
                self::$con = new PDO($string,DB_USER,DB_PASS);
                //show(self::$con);
            } catch (PDOException $e){
                die($e->getMessage());
            }
        }
        
        public static function getInstance(){
            if (self::$con) {
                return self::$con;
            }
            return $instance = new self();
        }

        //Read Database
        public function read($query, $data = array()){
            // menyiapkan statment
            $stm = self::$con->prepare($query);
            $result = $stm->execute();

            //fetch static value pdo
            if ($result) {
                $data = $stm->fetchAll(PDO::FETCH_OBJ);
                if (is_array($data)) {
                    return $data;
                }
            }
            return false;
        }

        //Write Database
        public function write($query, $data = array()){
            // menyiapkan statment
            $stm = self::$con->prepare($query);
            $result = $stm->execute($data);

            //fetch static value pdo
            if ($result) {
                    return true;
            }
            return false;
        }
    }
?>
