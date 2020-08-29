<?php
    include_once('function.php');
    $id = $_GET['id'];
    $deleteData = new DB_con();

        $sql = $deleteData->deleteData($id);
        if($sql){
            echo "<script>alert('Data deleted');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }else{
            echo "<script>alert('Fail to delete data');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
?>