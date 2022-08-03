<?php include "../repeats/top.php"?>
<div id="resources_box">
                <div id="rbtop"><span id="rheading">Resources</span><a href="add_resources.php"><button class="add_new">Add New +</button></a></div>
                <!-- <div id="w_one"><span id="zx">Resources</span><a href="add_resources.php"><button class="add_new">Add New +</button></a></div> -->
                <div id="rbbottom">
                    <table>
                        <tr id="table_heads"><th>#</th><th>Name of the Book</th><th>Size</th><th>Views</th><th>Downloads</th></tr>
                        <?php 
                            echo "<tr><td></td><td>xxxx</td><td>xx</td><td>xxxxx</td><td>xxx</td></tr>";
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
