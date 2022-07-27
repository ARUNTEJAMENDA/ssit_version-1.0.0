<?php 
    session_start();
    if(isset($_SESSION["userid"])){
        header("location:pages/dashboard.php");
        // echo "<script>alert('Welcome ".$_SESSION["userid"]."')</script>";
        echo "<script>alert('Welcome')</script>";
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ins_login.css">
    <link rel="icon" href="web.ico">
    <script src="js/jquery.js"></script>
    <title>Instructor Login | SSIT</title>
</head>
<body>
    <section id="sec1">
        <hr id="line1">
        <hr id="line2">
        <hr id="line3">
    </section>
    <section id="sec2">
        <div id="left">
            <div id="left_top"></div>
            <div id="left_bottom"></div>
        </div>
        <div id="right">
            <div id="login_box">
                <div id="login_box_heading">
                    <h1 style="color:rgb(162, 74, 255);">INSTRUCTOR LOGIN</h1>
                </div>
                <div id="login_uid">
                    <!--  -->
                    <img src="warehouse/User0.png" height="60%" alt="userid"/>
                    <input type="text" id="username" name="username" placeholder="Username" required autofocus>
                    <!--  -->
                </div>
                <div id="login_pass">
                    <!--  -->
                    <img src="warehouse/Lock.png" height="60%" alt="password"/>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <!--  -->
                </div>
                <div id="buttons">
                        <button id="login_button_b" type="submit" >Log in</button>
                        <button id="forgot_pass_b" type="button" >Forgot Password</button>
                </div>
                <!-- <div id="reset_pass"><button id="reset_pass_b" type="button" >Reset Password</button></div> -->
            </div>
            <div id="copyrights">Copyright &copy 2022 SSIT PVT. LTD. All rights reserved</div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            // alert("hi!!;")
            $("#forgot_pass_b").click(function(){
                document.getElementById("login_box").innerHTML = "<div id='nph'><h1>Forgot Password</h1></div><div id='login_mail'><img src='warehouse/User0.png' height='60%' alt='userid'/><input type='email' placeholder='Email'/></div><div id='buttons'><button id='login_button_b' class='sendOtp' onclick='sendOtp()' >Send OTP</button></div>";
            });
            //
            $("#login_button_b").click(function(){
                var uname = $("#username").val().trim();
                var pass = $("#password").val().trim();
                $.ajax({
                    url:"apis/authentication.php",
                    method:"post",
                    data:{u:uname,p:pass},
                    success:function(response){
                        if(response == "success"){
                            location.reload();
                        }else{
                            alert("Try Again!!");
                        }
                    }
                });
            });
        });
        var sendOtp = function(){
            var patch ="<div id='reset_pass'><button id='reset_pass_b' class='resend_2' type='button' >Resend OTP</button></div>";
            var inputPatch ='<div id="otp_container"><input type="text" class="otp" maxlength="1" ><input type="text" class="otp" maxlength="1" ><input type="text" class="otp" maxlength="1" ><input type="text" class="otp" maxlength="1" ><input type="text" class="otp" maxlength="1" ><input type="text" class="otp" maxlength="1" ></div>';
            document.getElementById("login_box").innerHTML="<div id='sent_to_mail'>The OTP has been sent to ****@gmail.com</div>"+inputPatch+"<div id='buttons'><button id='login_button_b' class='verify' type='submit' onclick='newPass()'>Verify</button></div>"+patch;
        }
        var newPass = function(){
            var patch ="<div id='nph'><b>New Password</b></div><div id='np'><input id='newpass' name='newpass' type='text' placeholder='New Password'></div><div id='np'><input id='confpass' name='confpass' type='text' placeholder='Confirm Password'></div><div id='npb'><button id='login_button_b' class='submit_newpass' type='submit' onclick='changePass()' >Change Password</button></div>";
            document.getElementById("login_box").innerHTML=patch;
        }
        var changePass = function(){
            var np = $("#newpass").val().trim();
            var cp = $("#confpass").val().trim();
            alert(np+">"+cp);
        }
    </script>
</body>
</html>
<?php
    }
?>