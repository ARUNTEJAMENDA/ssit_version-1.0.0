<?php 
    include "../apis/config.php";
    include "../repeats/top.php";
?>
<?php
    $query1 = "Select * from `added_courses` where `uploadedby` = '$userid'";
    $query2 = "Select * from `added_resources` where `uploadedby` = '$userid'";
    if ($result1 = mysqli_query($con, $query1)) {
        $count1 = mysqli_num_rows( $result1 );
    }
    if ($result2 = mysqli_query($con, $query2)) {
        $count2 = mysqli_num_rows( $result2 );
    }
?>
            <div class="shower" id="dashboard_box">
                <div id="courses_offered">
                    <p id="dp"><img class="dash_ico" src="../warehouse/Course.png" alt="courses"><span id="co_num"><?php echo $count1;?></span></p>
                    <span id="coh">Courses Offered</span>
                </div>
                <div id="resources_updated">
                    <p id="dp"><img class="dash_ico" src="../warehouse/Book.png" alt="resourses"><span id="re_num"><?php echo $count2;?></span></p>
                    <span id="reh">Resourses Uploaded</span>
                </div>
                <div id="students_benefited">
                    <p id="dp"><img class="dash_ico" src="../warehouse/Alarm.png" alt="students_b"><span id="st_num">999</span></p>
                    <span id="sth">Students Benefited</span>
                </div>
            </div>
            <script>
                $("#dashboard").addClass("navhighlighter");
            </script>
<?php include "../repeats/bottom.php"?>
        