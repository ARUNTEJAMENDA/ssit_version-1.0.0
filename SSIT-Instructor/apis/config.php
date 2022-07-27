<?php
    $host = "localhost";
    $username="root";
    $dbname = "ssit";
    $password = "";
    $con = mysqli_connect($host,$username,$password,$dbname);
    if($con){
        // echo "<script>alert('Connected..!!')</script>";
        // echo "connected";
    }else{
        // echo "<script>alert('Not Connected..!!')</script>";
        // echo "db connection problem";
    }
?>