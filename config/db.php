<?php
    namespace config\db;
    use PDO;
    use PDOException;
    class db{
        private $host= "localhost";
        private $dbname="team";
        private $user="root";
        private $password="";
        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);

                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }

?>
