<?php
    /*
    hash("sha256",str);
    mysqli_escape_string()
    // $uid = "q";$pass = "q";
    // $uid = mysqli_real_escape_string($con,"q");$pass = hash("sha256",mysqli_real_escape_string($con,"q"));
    */
    include "config.php";
    $uid = mysqli_real_escape_string($con,$_POST["u"]);$pass = hash("sha256",mysqli_real_escape_string($con,$_POST["p"]));
    
    $query = "select * from login where user = '$uid' and pass = '$pass'";
    $num = mysqli_query($con,$query);
    if($r = mysqli_num_rows($num)){
        // echo $r;
        if($r==1){
            session_start();
            $_SESSION["userid"] = $uid;
            echo "success";
            // print_r($_SESSION);
        }else{
            echo "fail";
        }
    }
/*
aruntejamenda
aruntejamenda
aruntejamenda
aruntejamenda
aruntejamenda
arunterjamenda
aruntejamenda
aruntejamenda
aruntejamenda
arunteajamenda
aruntjamenda
aruntejamenfda
ariuntejamenda
aruntejamenda
aruntejamenda
aruntejamenda
aruntejamenda
[aruntejamenda
aruntejmaneda
aruntejamenda
aruntejamenda
aruntehjamenda
aruntejamenda
aruntejamenda
autnjtejamenda
aruntejamendaaruntejamendaaruntejamendam
aruntejamneda
aruntejamendaaruntejamenda
aruntejamenda
aruntejamenda
aruntejamenda
aruntejamenda
aruntejamneda
aruntejamenda
aruntejamenda
aruntejamenda
aruntejamendead
aruntjemanedaaruntejamenda?phparuntejamendaAruntejamendaaruntejamenda
aruntajemenda
aruntejamendaaruntejamenfa
aruntejamnedaaruntejamenda
aruntejamendaaruntejamendaaruntejamenda
aruntejamendaaruntejamendaaruntejamendaaruntejamenda
aruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamenda
aruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamenda
aruntejamenda
aruntejamendaaruntejamenda
aruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamaenda
aruntejamendaaruntejakmenda
aruntejamendaaruntejakmendaarutntejamaenda
aruntejame3nda
aruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamenda
aruntejamendaaruntejamendaaruntejamenwrf
aruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamenda
aruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejamendaaruntejsmrnfdajseriifjfkfiikiq
aruntejamenda
*/
?>