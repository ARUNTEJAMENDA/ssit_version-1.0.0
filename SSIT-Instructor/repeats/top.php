<?php
    session_start();
    if(isset($_SESSION["userid"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ins_dashboard.css">
    <link rel="icon" href="../web.ico">
    <script src="../js/jquery.js"></script>
    <title>Instructor | SSIT</title>
</head>
<body>
        <section id="top">
            <!-- <button id="navigation">⊗</button> -->
            <div id="logo"></div>
            <header>
                <div id="header_one">
                    <h1>Welcome</h1>&nbsp&nbsp<h1 id="name"><?php echo $_SESSION['userid'];?></h1>
                </div>
                <div id="header_two">
                    <img id="profile_pic" src="../warehouse/profile (2).png" alt="profile_pic" >
                </div>
            </header>
        </section>
        <section id="bottom">
            <?php include "../repeats/nav.php"?>
            <main id="main" name="main">
<?php }else{header("location: ../ins_login.php");}?>