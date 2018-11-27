<?php
    class BaseDeDatos {
        
        public function EjecutarQuery($sql){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "publicis";
            $conn = new mysqli($servername, $username, $password,$database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            if ($conn->query($sql) === TRUE) {
//                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        
        public function ObtenerResultado($sql){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "publicis";
            $conn = new mysqli($servername, $username, $password,$database);
            $result = $conn->query($sql);
            return $result;
                    
        }
    }
    
    
    