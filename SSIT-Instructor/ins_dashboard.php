<!-- <?php
    session_start();
    if(isset($_SESSION["userid"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ins_dashboard.css">
    <link rel="icon" href="web.ico">
    <script src="jquery.js"></script>
    <title>Instructor | SSIT</title>
</head>
<body> -->
    <!-- <section id="top">
        <div id="logo"></div>
        <header>
            <div id="header_one">
                <h1>Welcome</h1>&nbsp&nbsp<h1 id="name"><?php //echo $_SESSION['userid'];?></h1>
            </div>
            <div id="header_two">
                <img id="profile_pic" src="warehouse/profile (2).png" alt="profile_pic" >
            </div>
        </header>
    </section> -->
    <?php
        include "repeats/top.php";
    ?>
    
    <section id="bottom">
        <?php include "repeats/nav.php"?>
        <!-- <nav>
            <a class="dashboard" href="#"><li id="dashboard" class="me"><img class="icons" src="warehouse/Speed.png" alt="dashboard"> Dashboard</li></a>
            <a class="courses" href="#"><li id="courses" class="me"><img class="icons" src="warehouse/Course.png" alt="courses"> Courses</li></a>
            <a class="schedule" href="#"><li id="schedule" class="me"><img class="icons" src="warehouse/Schedule.png" alt="schedule"> Schedule</li></a>
            <a class="profile" href="#"><li id="profile" class="me"><img class="icons" src="warehouse/User.png" alt="profile"> Profile</li></a>
            <a class="resources" href="#"><li id="resources" class="me"><img class="icons" src="warehouse/Book.png" alt="resources"> Resources</li></a>
            <a class="notification" href="#"><li id="notification" class="me"><img class="icons" src="warehouse/Alarm.png" alt="notifications"> Notifications</li></a>
            <a class="logout" href="logout.php" ><li id="logout" class="me"><img class="icons" src="warehouse/Logout.png" alt="logout"> Logout</li></a>
        </nav> -->
        <main id="main" name="main">
            <!-- <div class="shower" id="dashboard_box">
                <div id="courses_offered">
                    <p id="dp"><img class="dash_ico" src="warehouse/Course.png" alt="courses"><span id="co_num">99</span></p>
                    <span id="coh">Courses Offered</span>
                </div>
                <div id="resources_updated">
                    <p id="dp"><img class="dash_ico" src="warehouse/Book.png" alt="resourses"><span id="re_num">99</span></p>
                    <span id="reh">Resourses Uploaded</span>
                </div>
                <div id="students_benefited">
                    <p id="dp"><img class="dash_ico" src="warehouse/Alarm.png" alt="students_b"><span id="st_num">999</span></p>
                    <span id="sth">Students Benefited</span>
                </div>
            </div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="courses_box" >
                <section id="workshops">
                    <div id="w_one"><span id="zx">Workshops</span><button class="add_new">Add New +</button></div>
                    <div id="w_two">
                        <p>
                        <script>
                            var patch='<div id="card"><div id="card_top"></div><div id="card_bottom"><div id="card_bottom_top"><p id="c_title">Course/Intern/Workshop Name</p><p id="c_duration">9999 days </p></div><div id="card_bottom_bottom"><button id="c_edit"><img src="warehouse/Edit.png" alt="edit">EDIT</button><button id="c_delete"><img src="warehouse/Delete.png" alt="edit">DELETE</button></div></div></div>';
                            for(var i=0;i<10;i++){document.write(patch);}
                        </script>
                        </p>
                    </div>
                </section>
                <section id="internships">
                    <div id="i_one"><span id="zx">Internships</span><button class="add_new">Add New +</button></div>
                    <div id="i_two">
                        <script>
                            var patch='<div id="card"><div id="card_top"></div><div id="card_bottom"><div id="card_bottom_top"><p id="c_title">Course/Intern/Workshop Name</p><p id="c_duration">9999 days </p></div><div id="card_bottom_bottom"><button id="c_edit"><img src="warehouse/Edit.png" alt="edit">EDIT</button><button id="c_delete"><img src="warehouse/Delete.png" alt="edit">DELETE</button></div></div></div>';
                            for(var i=0;i<10;i++){document.write(patch);}
                        </script>
                    </div>
                </section>
            </div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="addcourses_box" >
                <div id="heading">
                    <h1>Courses/Internships</h1>
                </div>
                <div id="progress_bar">
                    <progress id="pbar" value="1" max="2"></progress>
                    <div id="pbar_dots">
                        <span>▲</span>
                        <span>▲</span>
                        <span>▲</span>
                        //-- △▲▴-//
                    </div>
                    <div id="points">
                        <span>Course Intro</span>
                        <span>Course Description</span>
                        <span>Course Content</span>
                    </div>
                </div>
                <div id="details_box1" >//--▶◼▸--//
                    <li><div id="workshop_title"><span class="xz">▸&nbsp Workshop Title</span><input type="text" name="wt" id="wt" placeholder="Title"></div>
                    </li><li><div id="duration"><span class="xz">▸&nbsp Duration</span><input type="number"name="wd"id="wd" placeholder="Duration"></div>
                    </li><li><div id="workshop_image"><span class="xz"> ▸&nbspWorkshop Image</span><input type="file" name="wf" id="wf" placeholder="Browse"></div>
                    </li><li><div id="language"><span class="xz">▸&nbspLanguage</span><input type="text" name="wl" id="wl" placeholder="Language"></div>
                    </li><li><div id="prerequisites"><span class="xz">▸&nbspPrerequisites</span><input type="text" name="wp" id="wp" placeholder="Prerequisites"></div>
                    </li><li><div class="next"><button id="next1">NEXT</button></div>
                    </li>
                </div>
                <div id="details_box2" >
                    <li id="wdl"><div id="wdescription"><span class="xz">▸&nbspDescription</span><textarea name="wd" id="wd" placeholder="Type Here..."></textarea></div>
                    </li><li><div class="next"><button id="previous1">PREVIOUS</button><button id="next2">NEXT</button></div>
                    </li>
                </div>
                <div id="details_box3" >
                    <li><div id="module_name"><span class="xz">▸&nbspAdd Module</span><input type="text" name="wm" id="wm" placeholder="Module Name"></div>
                    </li><li><div id="topic_name"><span class="xz">▸&nbspAdd Topic</span><input type="text" name="wt" id="wt" placeholder="Topic Name"></div>
                    </li><li><div id="sub_topic"><span class="xz">▸&nbspAdd Sub Topic</span><input type="text" name="wst" id="wst" placeholder="Sub Topic Name"></div>
                    </li><li><div id="add_field"><DUMMY></DUMMY><button id="add_fieldb">Add Another Field +</button></div>
                    </li><li><div class="next"><button id="previous2">PREVIOUS</button><button id="next3">ADD</button></div>
                    </li>
                </div>
            </div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="schedule_box"></div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="profile_box">
                <div id="one">
                    <div id="one_left"><img id="profile_pic" src="" alt="profile_pic"><span><img src="warehouse/Camera.png" alt="icon" id="icon"></span></div>
                    <div id="one_right"><button id="cover_pic"><img src="warehouse/Edit Image.png" alt="icon" id="icon"> Edit Cover Image</button></div>
                </div>
                <div id="two"><input type="text" name="first_name" id="fname" placeholder="First Name"><input type="text" name="middle_name" id="mname" placeholder="Middle Name"><input type="text" name="last_name" id="lname" placeholder="Last Name"></div>
                <div id="three"><textarea name="user_description" id="user_description" cols="30" rows="10" placeholder="Describe Your Self ........."></textarea></div>
                <div id="four">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <select name="addskill" id="addskill">
                        <option value="">one</option>
                        <option value="">two</option>
                        <option value="">three</option>
                        <option value="">four</option>
                        <option value="">five</option>
                    </select>
                    <select name="expertise_level" id="expertise_level">
                        <option value="">lvl 1</option>
                        <option value="">lvl 2</option>
                        <option value="">lvl 3</option>
                        <option value="">lvl 4</option>
                        <option value="">lvl 5</option>
                    </select>
                </div>
                <div id="five"><h1>Social Media Links</h1></div>
                <div id="six">
                    <div id="sone"><img src="warehouse/Facebook F.png" alt="fb icon" id="fb"><input type="text" name="fblink" id="fblink" placeholder="Facebook"></div>
                    <div id="stwo"><img src="warehouse/Instagram.png" alt="fb icon" id="fb"><input type="text" name="instalink" id="instalink" placeholder="Instagram"></div>
                    <div id="sthree"><img src="warehouse/LinkedIn 2.png" alt="fb icon" id="fb"><input type="text" name="linkedinlink" id="linkedinlink" placeholder="LinkedIn"></div>
                    <div id="sfour"><img src="warehouse/Twitter.png" alt="fb icon" id="fb"><input type="text" name="twitterlink" id="twitterlink" placeholder="Twitter"></div>
                    <div id="sfive"><button id="submit">SUBMIT</button></div>
                    <div id="ssix"><button id="cancel">CANCEL</button></div>
                </div>
            </div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="resources_box">
                <div id="rbtop"><span id="rheading">Resources</span></div>
                <div id="rbbottom">
                    <table>
                        <tr id="table_heads"><th>#</th><th>Name of the Book</th><th>Size</th><th>Views</th><th>Downloads</th></tr>
                        <script>
                            for (var i= 0; i<50;i++){document.write("<tr><td>"+(i+1)+"</td><td>xxxx</td><td>xx</td><td>xxxxx</td><td>xxx</td></tr>")}
                        </script>
                    </table>
                </div>
            </div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="addresources_box">
                <div id="rtop"><span id="rheading">Resources/New item</span></div>
                <div id="rbottom">//--▶◼▸--//
                    <li><div id="resource_title"><span class="xz">▸&nbsp Resource Title</span><input type="text" name="rt" id="rt" placeholder="Title"></div>
                    </li><li><div id="author"><span class="xz">▸&nbsp Author</span><input type="text" name="rn" id="rn" placeholder="Author name"></div>
                    </li><li><div id="r_upload"><span class="xz"> ▸&nbspWorkshop Image</span><input type="file" name="ru" id="ru" placeholder="Browse"></div>
                    </li><li><div class="addr"><dummy></dummy><button id="addr">Add Book</button></div>
                    </li>
                </div>
            </div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="notification_box"></div> -->
            <!---------------------------------------------------------------------------->
            <!-- <div id="logout_box"></div> -->
            <!---------------------------------------------------------------------------->
        <!-- </main>
    </section>
    <script>
        $("#dashboard").addClass("navhighlighter");
        $("nav a").click(function(){
            $("#dashboard").removeClass("navhighlighter");
            //
            $("#"+this.className+"_box").addClass("shower").siblings().removeClass("shower");
            $(".me").removeClass("navhighlighter");
            $("#"+this.className).addClass("navhighlighter");
        });
    </script>
</body>
</html>
<?php }else{header("location:ins_login.php");}?>
-->