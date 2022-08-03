<?php 
    include "../repeats/top.php";
    include "../apis/config.php";
?>
<div id="course_added">
<?php
    //-----------
    $ref_name = $_POST["rt"];
    $ref_author = $_POST["rn"];
    echo $ref_name." > ".$ref_author;
    //---------------------------
    $file = basename( $_FILES["rfile"]["name"]);
    echo "filename: ".$file.".";
    $target_dir = "../client_goods/added_resources/";
    $target_file = $target_dir . basename($_FILES["rfile"]["name"]);
    echo $target_file;
    $uploadOk = 1;
    // Check if file already exists
    if (file_exists($target_file)) {
    echo "<span class='danger'> Sorry, file already exists</span>.";
    $uploadOk = 0;
    }
    // Check file size
    $size = $_FILES["rfile"]["size"];
    echo "size: ".$size;

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "<span class='danger'> Sorry, your file was not uploaded</span>.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["rfile"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["rfile"]["name"])). " has been uploaded</span>.";
    } else {
        echo "<span class='danger'> Sorry, , there was an error uploading your file</span>.";
    }
    }
?>
</div>
<?php //header("refresh:2, url = courses.php")?>
<?php include "../repeats/bottom.php";?>