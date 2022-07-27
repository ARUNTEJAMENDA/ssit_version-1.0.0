<?php include "../repeats/top.php"?>

            <div id="courses_box" >
                <section id="workshops">
                    <div id="w_one"><span id="zx">Workshops</span><button class="add_new">Add New +</button></div>
                    <div id="w_two">
                        <p>
                        <script>
                            var patch='<div id="card"><div id="card_top"></div><div id="card_bottom"><div id="card_bottom_top"><p id="c_title">Course/Intern/Workshop Name</p><p id="c_duration">9999 days </p></div><div id="card_bottom_bottom"><button id="c_edit"><img src="../warehouse/Edit.png" alt="edit">EDIT</button><button id="c_delete"><img src="../warehouse/Delete.png" alt="edit">DELETE</button></div></div></div>';
                            for(var i=0;i<10;i++){document.write(patch);}
                        </script>
                        </p>
                    </div>
                </section>
                <section id="internships">
                    <div id="i_one"><span id="zx">Internships</span><button class="add_new">Add New +</button></div>
                    <div id="i_two">
                        <script>
                            var patch='<div id="card"><div id="card_top"></div><div id="card_bottom"><div id="card_bottom_top"><p id="c_title">Course/Intern/Workshop Name</p><p id="c_duration">9999 days </p></div><div id="card_bottom_bottom"><button id="c_edit"><img src="../warehouse/Edit.png" alt="edit">EDIT</button><button id="c_delete"><img src="../warehouse/Delete.png" alt="edit">DELETE</button></div></div></div>';
                            for(var i=0;i<10;i++){document.write(patch);}
                        </script>
                    </div>
                </section>
            </div>
            <script>
                $("#courses").addClass("navhighlighter");
            </script>

<?php
    include "../repeats/bottom.php"
?>