<?php include "../repeats/top.php"?>
<div id="resources_box">
                <div id="rbtop"><span id="rheading">Resources</span></div>
                <div id="rbbottom">
                    <table>
                        <tr id="table_heads"><th>#</th><th>Name of the Book</th><th>Size</th><th>Views</th><th>Downloads</th></tr>
                        <script>
                            for (var i= 0; i<50;i++){document.write("<tr><td>"+(i+1)+"</td><td>xxxx</td><td>xx</td><td>xxxxx</td><td>xxx</td></tr>")}
                        </script>
                    </table>
                </div>
            </div>
            <script>
                $("#resources").addClass("navhighlighter");
            </script>
<?php include "../repeats/bottom.php"?>
