<?php include "../repeats/top.php"?>
<div id="profile_box">
                <div id="one">
                    <div id="one_left"><img id="profile_pic" src="" alt="profile_pic"><span><img src="../warehouse/Camera.png" alt="icon" id="icon"></span></div>
                    <div id="one_right"><button id="cover_pic"><img src="../warehouse/Edit Image.png" alt="icon" id="icon"> Edit Cover Image</button></div>
                </div>
                <div id="two"><input type="text" name="first_name" id="fname" placeholder="First Name"><input type="text" name="middle_name" id="mname" placeholder="Middle Name"><input type="text" name="last_name" id="lname" placeholder="Last Name"></div>
                <div id="three"><textarea name="user_description" id="user_description" cols="30" rows="10" placeholder="Describe Your Self ........."></textarea></div>
                <div id="four">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <select name="addskill" id="addskill">
                        <option value="">one</option>
                        <option value="">two</option>
                        <option value="">three</option>
                        <option value="">four</option>
                        <option value="">five</option>
                    </select>
                    <select name="expertise_level" id="expertise_level">
                        <option value="">lvl 1</option>
                        <option value="">lvl 2</option>
                        <option value="">lvl 3</option>
                        <option value="">lvl 4</option>
                        <option value="">lvl 5</option>
                    </select>
                </div>
                <div id="five"><h1>Social Media Links</h1></div>
                <div id="six">
                    <div id="sone"><img src="../warehouse/Facebook F.png" alt="fb icon" id="fb"><input type="text" name="fblink" id="fblink" placeholder="Facebook"></div>
                    <div id="stwo"><img src="../warehouse/Instagram.png" alt="fb icon" id="fb"><input type="text" name="instalink" id="instalink" placeholder="Instagram"></div>
                    <div id="sthree"><img src="../warehouse/LinkedIn 2.png" alt="fb icon" id="fb"><input type="text" name="linkedinlink" id="linkedinlink" placeholder="LinkedIn"></div>
                    <div id="sfour"><img src="../warehouse/Twitter.png" alt="fb icon" id="fb"><input type="text" name="twitterlink" id="twitterlink" placeholder="Twitter"></div>
                    <div id="sfive"><button id="submit">SUBMIT</button></div>
                    <div id="ssix"><button id="cancel">CANCEL</button></div>
                </div>
            </div>
            <script>
                $("#profile").addClass("navhighlighter");
            </script>
<?php include "../repeats/bottom.php"?>