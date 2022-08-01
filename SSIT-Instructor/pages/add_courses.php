<?php include "../repeats/top.php"?>
<div id="addcourses_box" >
                <!------------------->
                <div id="heading">
                    <h1>Courses/Internships</h1>
                </div>
                <!------------------->
                <div id="progress_bar">
                    <progress id="pbar" value="0" max="2"></progress>
                    <div id="pbar_dots">
                        <span>▲</span>
                        <span>▲</span>
                        <span>▲</span>
                        <!-- △▲▴-->
                    </div>
                    <div id="points">
                        <span>Course Intro</span>
                        <span>Course Description</span>
                        <span>Course Content</span>
                    </div>
                </div>
                <form id="form1" action="course_added.php" method="post" enctype="multipart/form-data">
                <!--------------------------------->
                <div id="details_box1"><!--▶◼▸-->
                    <li><div id="workshop_title"><span class="xz">▸&nbsp Workshop Title</span><!----><input type="text" name="wt" id="wt" placeholder="Title" title="**Title should be unique from other courses/Workshops**"></div>
                    </li><li><div id="duration"><span class="xz">▸&nbsp Duration</span><!----------------><input type="number"name="wdu" id="wdu" placeholder="Duration"></div>
                    </li><li><div id="workshop_image"><span class="xz"> ▸&nbspWorkshop Image</span><!----><input type="file" name="wf" id="wf" placeholder="Browse"></div>
                    </li><li><div id="language"><span class="xz">▸&nbspLanguage</span><!----------------><input type="text" name="wl" id="wl" placeholder="Language"></div>
                    </li><li><div id="prerequisites"><span class="xz">▸&nbspPrerequisites</span><!------><input type="text" name="wp" id="wp" placeholder="Prerequisites"></div>
                    </li><li><div class="next"><button id="next1" type="button">NEXT</button></div>
                    </li>
                </div>
                <!--------------------------------->
                <div id="details_box2">
                    <li id="wdl"><div id="wdescription"><span class="xz">▸&nbspDescription</span><textarea name="wd" id="wd" placeholder="Type Here..."></textarea></div>
                    </li><li><div class="next"><button id="previous1"type="button">PREVIOUS</button><button id="next2" type="button">NEXT</button></div>
                    </li>
                </div>
                <!--------------------------------->
                <div id="details_box3" >
                    <li><div id="module_name"><span class="xz">▸&nbspAdd Module</span><input type="text" name="wm" id="wm" placeholder="Module Name"></div>
                    </li><li><div id="topic_name"><span class="xz">▸&nbspAdd Topic</span><input type="text" name="wtp" id="wtp" placeholder="Topic Name"></div>
                    </li><li><div id="sub_topic"><span class="xz">▸&nbspAdd Sub Topic</span><input type="text" name="wst" id="wst" placeholder="Sub Topic Name"></div>
                    </li><li><div id="add_field"><DUMMY></DUMMY><button id="add_fieldb">Add Another Field +</button></div>
                    </li><li><div class="next"><button id="previous2"type="button">PREVIOUS</button><button id="next3" type="submit">ADD</button></div>
                    </li>
                </div>
                <!--------------------------------->
                </form>
            </div>

            <script>
                var iter =1;
                $("button").click(function(){
                    // console.log(iter);
                    if(this.id.slice(0,4)=="next"){
                        $("#details_box"+iter).css("display","none");
                        iter++;
                        $("#details_box"+iter).css("display","flex");
                    }else if(this.id.slice(0,4)=="prev"){
                        $("#details_box"+iter).css("display","none");
                        iter--;
                        $("#details_box"+iter).css("display","flex");
                    }else if(this.id=="next3"){
                        // $.ajax({
                        //     url:"course_added.php",
                        //     method="post",
                        //     data:{},
                        //     success:function(response){

                        //     }
                        // });
                    }
                    // console.log(this.id.slice(0,4));
                    document.getElementById("pbar").value=iter-1;
                });
            </script>
            <?php include "../repeats/bottom.php"?>