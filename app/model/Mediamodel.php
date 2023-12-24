<?php
    namespace NS\model;
    use config\db\db;
    use PDO;
    class Mediamodel {
        private $PDO;

        public function __construct(){
            require_once (__DIR__ . "/../../config/db.php");
            $con = new db();
            $this -> PDO = $con -> conexion();
        }

        public function insert($des){
            $statement = $this -> PDO -> prepare('INSERT INTO media VALUES (null,:des)');
            $statement -> bindParam(":des",$des);
            return $statement -> execute();
        }

        public function read(){
            $statement = $this->PDO->prepare('SELECT * FROM media');
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }

        public function show($id) {
            $statement = $this->PDO->prepare('SELECT * FROM media WHERE id = :id');
            $statement->bindParam(":id", $id);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_OBJ);
            return $result;
        }
        
        public function edit($id,$des) {
            $statement = $this->PDO->prepare('UPDATE media SET des = :des WHERE id = :id');
            $statement->bindParam(":id", $id);
            $statement->bindParam(":des", $des);
            
            return $statement->execute();
        }
        
        public function delete($id){
            $statement = $this->PDO->prepare('DELETE FROM media WHERE id = :id');
            $statement -> bindParam(":id",$id);
            return $statement->execute();
        }
        
    }