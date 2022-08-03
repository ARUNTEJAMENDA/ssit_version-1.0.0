<?php include "../repeats/top.php"?>
<div id="addresources_box">
                <div id="rtop"><span id="rheading">Resources/New item</span></div>
                <form id="rbottom" action="course_added.php" method="post" enctype="multipart/form-data"><!--▶◼▸--->
                    <input type="hidden" name = "resources" value="true"/>
                    <li><div id="resource_title"><span class="xz">▸&nbsp Resource Title</span><!-----><input type="text" name="rt" id="rt" placeholder="Title"/></div>
                    </li><li><div id="author"><span class="xz">▸&nbsp Author</span><!----------------><input type="text" name="rn" id="rn" placeholder="Author name"></div>
                    </li><li><div id="r_upload"><span class="xz"> ▸&nbspWorkshop Image</span><!------><input type="file" name="rfile" id="rfile" placeholder="Browse"></div>
                    <!-- </li><li><div class="addr"><dummy></dummy><button type="submit" id="addr">Add Book</button></div> -->
                    </li><li><div class="addr"><dummy></dummy><input type="submit" id="addr" value="Add Book"></div>
                    </li>
                </form>
            </div>
<?php include "../repeats/bottom.php"?>