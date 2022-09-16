<?php
    class Database {
        public $servername  = "localhost";
        public $username    = "root";
        public $password    = "";
        public $dbname      = "belajar";
        public $conn        = null;
        public $datas       = array();

        function __construct(){
            self::connect();
        }

        function connect(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        function getData($id = null){
            if(!empty($id)){
                $result = $this->conn->query("SELECT * FROM members WHERE id = ".$id." ORDER BY id ASC");
            } else {
                $result = $this->conn->query("SELECT * FROM members ORDER BY id ASC");
            }

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    $data['id']         = $row["id"];
                    $data['name']       = $row["name"];
                    $data['city']       = $row["city"];
                    $data['status']     = $row["status"];
                    $data['created']    = $row["created"];
                    $data['modified']   = $row["modified"];

                    array_push($this->datas, $data);
                }
                return $this->datas;
            } else {
                echo "0 results";
            }
            $this->conn->close();
        }

        function update($sql){
            $this->conn->query($sql);
            $this->conn->close();
        }
    }
    
?>