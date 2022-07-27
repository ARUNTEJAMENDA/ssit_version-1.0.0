<?php 
    session_start();
    if(isset($_SESSION["userid"])){
        // header("location:../ins_dashboard.php");
        session_unset();
        header("location:../ins_login.php");
    }else{
        header("location:../ins_login.php");
    }
?>