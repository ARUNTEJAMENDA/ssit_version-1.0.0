<?php 
    include "../repeats/top.php";
    include "../apis/config.php";
?>
<div id="course_added">
<?php
    if($_POST["resources"]){
        $ref_name = $_POST["rt"];
        $ref_author = $_POST["rn"];
        // echo $ref_name." > ".$ref_author;
        //---------------------------
        $file = basename( $_FILES["rfile"]["name"]);
        echo "<span class='green'>Resource file: ".$file."</span>";
        $target_dir = "../client_goods/added_resources/";
        $target_file = $target_dir.$ref_name."_".$userid."_".basename($_FILES["rfile"]["name"]);
        // echo $target_file;
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<span class='danger'> Sorry, file already exists</span>.";
            $uploadOk = 0;
        }
        // Check file size
        $size = $_FILES["rfile"]["size"];
        if($size> 40000000){
            $uploadOk = 0;
            echo "<span class='danger'> Sorry, your file was not uploaded Due to large in size!!</span>.";
        }
        echo "<br> <span class='green'>Resource size: ".round($size/(1024*1024),2)."mb </span>";
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "<span class='danger'> Sorry, your file was not uploaded</span>.";
        // if everything is ok, try to upload file
        } else {
            $checkexist = "SELECT * from `added_resources` where `ref_name` = '$ref_name'";
            $go0 = mysqli_query($con,$checkexist);
            $count0 = mysqli_num_rows($go0);
            // echo "<br>count:".$count0."<br>";
            if ($count0 == 0){
                $query0 = "INSERT INTO `added_resources`(`ref_name`, `ref_author`, `ref_filesize`, `ref_views`, `ref_downloads`) VALUES('$ref_name','$ref_author','$size',0,0)";
                if(mysqli_query($con,$query0)){
                    echo "<span class='green'>File uploaded!!</span>";
                }
                if (move_uploaded_file($_FILES["rfile"]["tmp_name"], $target_file)) {
                    echo "<br><span class='green'>The Resource file ". htmlspecialchars( basename( $_FILES["rfile"]["name"])). " has been uploaded Successfully.</span>.";
                } else {
                    echo "<span class='danger'> Sorry, there was an error uploading your file</span>.";
                }
            }else{
                echo "<span class='danger'> file found in db!!</span>.";
            }
        }
    }else{
        //-----------
        $title = $_POST["wt"];
        $duration = $_POST["wdu"];
        $file = basename( $_FILES["wf"]["name"]);
        $lang = $_POST["wl"];
        $prereq = $_POST["wp"];
        //-----------
        $desc = $_POST["wd"];
        //-----------
        $mod = $_POST["wm"];
        $topic = $_POST["wtp"];
        $subtopic = $_POST["wst"];
        //-----------
        if($title=="" || $title==NULL){
            echo "<span class='danger'>Course/ Workshop Title is Mandatory!!</span>";
        }else{
            $target_dir = "../client_goods/course_backgrounds/";
            $target_file = $target_dir . $title."_".$_SESSION["userid"]."_".basename($_FILES["wf"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            //-------------for type checking
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";$uploadOk = 0;}
            //-------------for type checking
            if (file_exists($target_file)) {echo "<span class='danger'>Sorry, file already exists.</span><br>";$uploadOk = 0;}
            //--------------for uploading
            if ($uploadOk == 0) {
                echo "<span class='danger'>Sorry, your file/Course was not uploaded due to previous existance.</span>";
            } else {
                $checkexist = "SELECT * from `added_courses` where `title` = '$title'";
                $go = mysqli_query($con,$checkexist);
                $count = mysqli_num_rows($go);
                echo "<br>count:".$count."<br>";
                if ($count == 0){
                    $query = "INSERT INTO `added_courses`(`title`, `duration`, `image_name`, `language`, `prerequisites`, `description`, `module_name`, `topic_name`, `subtopic_name`) VALUES ('$title','$duration','$file','$lang','$prereq','$desc','$mod','$topic','$subtopic')";
                    if(mysqli_query($con,$query)){
                        echo "course uploaded!!";
                    }
                    if (move_uploaded_file($_FILES["wf"]["tmp_name"], $target_file)) {
                        echo "<h1>Course Added Successfully!!</h1><br>The file ". htmlspecialchars( basename( $_FILES["wf"]["name"])). " has been uploaded.";
                    }
                    else {echo "<span class='danger'>Sorry, there was an error uploading your file.</span>";}
                }else{
                    echo "Course with this name is already exists!!" ;
                }
            }
        }
    }
?>
</div>
<?php //header("refresh:2, url = courses.php")?>
<?php include "../repeats/bottom.php";?>