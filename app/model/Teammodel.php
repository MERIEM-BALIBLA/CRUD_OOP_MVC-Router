<?php
    namespace NS\model;
    use config\db\db;
    use PDO;
    class Teammodel {
        private $PDO;

        public function __construct(){
            require_once (__DIR__ . "/../../config/db.php");
            $con = new db();
            $this -> PDO = $con -> conexion();
        }

        public function insert($name, $description){
            $statement = $this -> PDO -> prepare('INSERT INTO Team VALUES (null,:name,:description)');
            $statement -> bindParam(":name",$name);
            $statement -> bindParam(":description",$description);
            // return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
            return $statement -> execute();
        }

        public function read(){
            $statement = $this->PDO->prepare('SELECT * FROM Team');
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }

        public function show($id) {
            $statement = $this->PDO->prepare('SELECT * FROM team WHERE id = :id');
            $statement->bindParam(":id", $id);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_OBJ);
            return $result;
        }
        
        public function edit($id,$name, $description) {
            $statement = $this->PDO->prepare('UPDATE Team SET name = :name, description = :description WHERE id = :id');
            $statement->bindParam(":id", $id);
            
            $statement->bindParam(":name", $name);
            $statement->bindParam(":description", $description);
            
            return $statement->execute();
        }
        
        public function delete($id){
            $statement = $this->PDO->prepare('DELETE FROM Team WHERE id = :id');
            $statement -> bindParam(":id",$id);
            return $statement->execute();
        }
        
    }