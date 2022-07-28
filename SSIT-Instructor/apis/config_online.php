<?php
    $host = "localhost";
    $username="id19331295_aruntejamenda";
    $dbname = "id19331295_ssit";
    $password = "@#%+53tedFyy";
    $con = mysqli_connect($host,$username,$password,$dbname);
    if($con){
        // echo "<script>alert('Connected..!!')</script>";
        //echo "connected";
    }else{
        // echo "<script>alert('Not Connected..!!')</script>";
        echo "<h1>db connection problem</h1>";
    }
?>