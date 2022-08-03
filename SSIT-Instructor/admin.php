<!DOCTYPE html>
<html>
    <head>
        <title>aDmIn CoNtRoLs</title>
        <style>
            body{
                /* font-family: cursive; */
                font-family: monospace;
            }
        </style>
    </head>
<body>
<?php
session_start();
if(isset($_SESSION['userid'])){
    include './apis/config.php';
    //
    $userid = $_SESSION['userid'];
    echo "userid: ".$userid."<br>";
    //
    $q ="truncate table added_courses";
    $q1 ="truncate table added_resources";
    if (mysqli_query($con,$q)){
        echo "c. truncated!!<br>";
    }else{
        echo "c. not truncated!!<br>";
    }
    if (mysqli_query($con,$q1)){
        echo "r. truncated!!<br>";
    }else{
        echo "r. not truncated!!<br>";
    }
    $query="alter table added_courses auto_increment = 0";
    if (mysqli_query($con,$query)){
        echo "<br>c. auto increment done!!";
    }else{
        echo "<br>c. not worked!!";
    }
    $query1="alter table added_resources auto_increment = 0";
    if (mysqli_query($con,$query1)){
        echo "<br>r. auto increment done!!";
    }else{
        echo "<br>r. not worked!!";
    }
}else{
    echo "You Should Login To use this Feature.";
}
?>
</body>
</html>