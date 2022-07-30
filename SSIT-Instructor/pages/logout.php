<?php 
    session_start();
    if(isset($_SESSION["userid"])){
        // header("location:../ins_dashboard.php");
        session_unset();
        header("location:../index.php");
    }else{
        header("location:../index.php");
    }
?>