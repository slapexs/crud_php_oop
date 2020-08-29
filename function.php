<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'YOUR_DATABASE_NAME');

        class DB_con {
            function __construct(){
                $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
                $this->dbcon = $conn;

                if(mysqli_connect_errno()){
                    echo 'Fail to connect database' . mysqli_connect_errno() ;
                }
            }

            public function insertdata($m_name, $m_phone, $m_email){
                $query = mysqli_query($this->dbcon, "INSERT INTO tbl_user (m_name, m_phone, m_email) VALUES ('$m_name', '$m_phone', '$m_email')");
                return $query;
            }

            public function fetchAll(){
                $query = mysqli_query($this->dbcon, "SELECT * FROM tbl_user");
                return $query;
            }

            public function fetchone($id){
                $query = mysqli_query($this->dbcon, "SELECT * FROM tbl_user WHERE m_id = '$id'");
                return $query;
            }

            public function updateData($m_name, $m_phone, $m_email, $id){
                $query = mysqli_query($this->dbcon, "UPDATE tbl_user SET m_name = '$m_name', m_phone = '$m_phone', m_email = '$m_email' WHERE m_id = '$id' ");
                return $query;
            }

            public function deleteData($id){
                $query = mysqli_query($this->dbcon, "DELETE FROM tbl_user WHERE m_id = '$id' ");
                return $query;
            }
           
        }
?>