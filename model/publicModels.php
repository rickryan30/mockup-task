<?php
    include '../config/dbconfig.php';
    /* user model */ 
    class Course_Model extends DB {

        protected $_table = 'courses';
        public $id;
        public $type;
        public $title;
        public $author;
        public $content;
        public $created;


        public function save() {
            try {
                $sql = "INSERT INTO $this->_table (type, title, author, content, created) VALUES (:type, :title, :author, :content, :created)";
                $stmt = $this->DB_con->prepare($sql);

                $data = array(
                    'type' => $this->type,
                    'title' => $this->title,
                    'author' => $this->author,
                    'content' => $this->content,
                    'created' => $this->created
                );

                return $result = $stmt->execute($data);
            } catch (PDOException $ex) {
                throw new Exception("DB Error: ".$ex->getMessage());	
            }

            return $result;
        }

        public function getAll() {
            try {
                $sql = "SELECT * FROM $this->_table";
                $stmt = $this->DB_con->prepare($sql);
                $stmt->execute();
                return $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            } catch (PDOException $ex) {
                throw new Exception("DB Error: ".$ex->getMessage());
            }

            return $result;
        }

        public function update() {
            try {
                $sql = "UPDATE $this->_table SET type = :type, title = :title, author = :author, content = :content 
                WHERE id = :id";
                $stmt = $this->DB_con->prepare($sql);

                $data = array(
                    'id' => $this->id,
                    'type' => $this->type,
                    'title' => $this->title,
                    'author' => $this->author,
                    'content' => $this->content
                );

                return $result = $stmt->execute($data);
            } catch (PDOException $ex) {
                throw new Exception("DB Error: ".$ex->getMessage());
            }

            return $result;
        }

        public function delete() {
            try {
                $sql = "DELETE FROM $this->_table WHERE id = :id";
                $stmt = $this->DB_con->prepare($sql);
                $result = $stmt->execute(['id' => $this->id]);
            }  catch(PDOException $e) {
                die("Query Error: ". $e->getMessage());
            }
    
        }
        
    }

?>
    