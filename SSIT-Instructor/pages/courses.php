<?php
    include "../repeats/top.php";
    include "../apis/config.php";
?>

            <div id="courses_box" >
                <section id="workshops">
                    <div id="w_one"><span id="zx">Workshops</span><a href="add_courses.php"><button class="add_new">Add New +</button></a></div>
                    <div id="w_two">
                        <p>
                            <?php
                                $x = "SELECT * FROM `added_courses` where `uploadedby`='$userid'";
                                $result = mysqli_query($con,$x);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $background = "background:url('../client_goods/course_backgrounds/".$row['image_name']."');background-size: cover;background-position: center;background-repeat: no-repeat;";
                                        echo '
                                            <div id="card">
                                                <!--<div id="card_top" style="'.$background.'"></div>-->
                                                <div id="card_top"><img style="height:95%;border-radius:10px;box-shadow: 0 0 2px 2px rgba(128, 128, 128, 0.567);" src="../client_goods/course_backgrounds/'.$row['image_name'].'" alt="image"/></div>
                                                <div id="card_bottom">
                                                    <div id="card_bottom_top">
                                                        <p id="c_title">'.$row['title'].'</p>
                                                        <p id="c_duration">'.$row['duration'].'hrs </p>
                                                    </div>
                                                    <div id="card_bottom_bottom">
                                                        <button id="c_edit"><img src="../warehouse/Edit.png" alt="edit">EDIT</button>
                                                        <button id="c_delete"><img src="../warehouse/Delete.png" alt="edit">DELETE</button>
                                                    </div>
                                                </div>
                                            </div>';
                                    }
                                }   
                            ?>
                        <!-- <script>var patch='<div id="card"><div id="card_top"></div><div id="card_bottom"><div id="card_bottom_top"><p id="c_title">Course/Intern/Workshop Name</p><p id="c_duration">9999 days </p></div><div id="card_bottom_bottom"><button id="c_edit"><img src="../warehouse/Edit.png" alt="edit">EDIT</button><button id="c_delete"><img src="../warehouse/Delete.png" alt="edit">DELETE</button></div></div></div>';for(var i=0;i<10;i++){document.write(patch);}</script> -->
                        </p>
                    </div>
                </section>
                <section id="internships">
                    <div id="i_one"><span id="zx">Internships</span><a href="add_courses.php"><button class="add_new">Add New +</button></a></div>
                    <div id="i_two">
                        <?php
                                $x = "SELECT * FROM `added_courses` where `uploadedby`='$userid'";
                                $result = mysqli_query($con,$x);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $background = "background:url('../client_goods/course_backgrounds/".$row['image_name']."');background-size: cover;background-position: center;background-repeat: no-repeat;";
                                        echo '
                                            <div id="card">
                                                <!--<div id="card_top" style="'.$background.'"></div>-->
                                                <div id="card_top"><img style="height:95%;border-radius:10px;box-shadow: 0 0 2px 2px rgba(128, 128, 128, 0.567);" src="../client_goods/course_backgrounds/'.$row['image_name'].'" alt="image"/></div>
                                                <div id="card_bottom">
                                                    <div id="card_bottom_top">
                                                        <p id="c_title">'.$row['title'].'</p>
                                                        <p id="c_duration">'.$row['duration'].'</p>
                                                    </div>
                                                    <div id="card_bottom_bottom">
                                                        <button id="c_edit"><img src="../warehouse/Edit.png" alt="edit">EDIT</button>
                                                        <button id="c_delete"><img src="../warehouse/Delete.png" alt="edit">DELETE</button>
                                                    </div>
                                                </div>
                                            </div>';
                                    }
                                }
                            ?>
                        <!-- <script>var patch='<div id="card"><div id="card_top"></div><div id="card_bottom"><div id="card_bottom_top"><p id="c_title">Course/Intern/Workshop Name</p><p id="c_duration">9999 days </p></div><div id="card_bottom_bottom"><button id="c_edit"><img src="../warehouse/Edit.png" alt="edit">EDIT</button><button id="c_delete"><img src="../warehouse/Delete.png" alt="edit">DELETE</button></div></div></div>';for(var i=0;i<10;i++){document.write(patch);}</script> -->
                    </div>
                </section>
            </div>
            <script>
                $("#courses").addClass("navhighlighter");
            </script>

<?php include "../repeats/bottom.php"?>