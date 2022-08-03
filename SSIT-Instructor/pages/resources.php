<?php include "../repeats/top.php"?>
<div id="resources_box">
                <div id="rbtop"><span id="rheading">Resources</span><a href="add_resources.php"><button class="add_new">Add New +</button></a></div>
                <!-- <div id="w_one"><span id="zx">Resources</span><a href="add_resources.php"><button class="add_new">Add New +</button></a></div> -->
                <div id="rbbottom">
                    <table>
                        <tr id="table_heads"><th>#</th><th>Name of the Book</th><th>Size</th><th>Views</th><th>Downloads</th></tr>
                        <?php 
                            include "../apis/config.php";
                            $query = "SELECT * from added_resources";
                            $qrun = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($qrun)){
                                echo "<tr><td>".$row['sno']."</td><td>".$row['ref_name']."</td><td>".$row['ref_filesize']."</td><td>".$row['ref_views']."</td><td>".$row['ref_downloads']."</td></tr>";
                            }
                        ?>
                        <!-- <tr><td></td><td>xxxx</td><td>xx</td><td>xxxxx</td><td>xxx</td></tr> -->
                        <!-- <script>for (var i= 0; i<50;i++){document.write("<tr><td>"+(i+1)+"</td><td>xxxx</td><td>xx</td><td>xxxxx</td><td>xxx</td></tr>")}</script> -->
                    </table>
                </div>
            </div>
            <script>
                $("#resources").addClass("navhighlighter");
            </script>
<?php include "../repeats/bottom.php"?>
