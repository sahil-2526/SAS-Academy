<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAS Academy | Achievemets</title>

    <link rel="stylesheet" href="Style Sheets/achievements.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="small-screen">
        <p class="text">Rotate your phone to landscape mode</p>
    </div>

    <header>
        <div class="logo"><a href="index.html"><img src="Media/Logo.jpg" alt=""></a></div>
        <nav>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="achievements.html">Achievemets</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="#contact">Contact Us</a>
                </li>
                <li>
                    <a href="login.html">Login</a>
                </li>
            </ul>
        </nav>

        <label for="menu"><img src="Media/menu-bar.png" alt=""></label>
        <input type="checkbox" id="menu">
        <div class="menu-box">
            <div class="head">
                <div class="logo"><a href="index.html"><img src="Media/Logo.jpg" alt=""></a></div>
                <label for="menu">
                    <span class="material-symbols-outlined">close</span>
                </label>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="achievements.html">Achievemets</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="#contact" onclick="hide()">Contact Us</a>
                </li>
                <li>
                    <a href="login.html">Login</a>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <section class="achieve">
            <h2>OUR ACHIEVEMENTS</h2>
            <p>Our SAS ACADEMY, with 100+ brilliant students of every classes and streams with UG applicants for JEE,WBJEE,other UG UNIVERSITY Exam candidates across their diversification. We will be your theoretical and practical guide throughout your journey of education for excellence. We ensure parents, schools and students to fly high in this challenging and dynamic learning environment. We enlighten the power of innovation the students are cultivating among themselves. As an institution, we know the rich educational factors with strong academic foundation with brain power and skills advancement of our students. The institute's dedication is to foster and hold hands in the educational arena with achievements of honors and knowledge.</p>
        </section>

        <span id="contact"></span>

        <label for="click"><i class="fa-brands fa-rocketchat"></i></label>
        <input type="checkbox" id="click">
        <div class="chatbox">
            <div class="top">
                <p>CHAT WITH US<br><span class="dot"></span>We'll reply as soon as possible</p>
                <label for="click">
                    <span class="material-symbols-outlined">close</span>
                </label>
            </div>
            <div class="textbox">
                <input type="text" name="msg" id="" placeholder="Type your message...">
            </div>
        </div>
    </main>

    <footer>
        <div class="bgc">
            <h3>LOCATION</h3>
            <div class="block">
                <div class="left">
                    <div class="follow">
                        <p>Follow Us:</p>
                        <a href="https://www.facebook.com/sasacademy20" target="_blank"><img src="Media/facebook.png" alt=""></a>
                        <a href="" target="_blank"><img src="Media/whatsapp.png" alt=""></i></a>
                        <a href="" target="_blank"><img src="Media/gmail.png" alt=""></a>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d268.2168752407035!2d88.-2891306535923!3d22.538113891386022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1702915747160!5m2!1sen!2sin"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="right">
                    <p class="address">ADDRESS: 1st Floor, M-126/J Paharpur Road, Kolkata-700024<br>
                        LANDMARK: Beside Unipon Hospital<br>
                        BUSINESS WEBSITE: <a
                            href="https://sas-academy-education.business.site/">sas-academy-education.business.site</a><br>
                        CONTACT NO.: +919903002969, +919831158107
                    </p>
                    <form action="">
                        <label for="name">Name <font class="imp">*</font></label><br>
                        <input type="text" placeholder="Name" id="name" name="name" required><br>

                        <label for="email">E-Mail <font class="imp">*</font></label><br>
                        <input type="email" name="email" id="email" placeholder="example@abc.com" required><br>

                        <label for="phone">Phone <font class="imp">*</font></label><br>
                        <input type="tel" name="phone" id="phone" placeholder="1234567890" required><br>

                        <label for="sub">Subject <font class="imp">*</font></label><br>
                        <select name="sub" id="sub" required>
                            <option value="" selected>Select a Subject</option>
                            <hr>
                            <optgroup label="Class 5-10">
                                <option value="eng">English</option>
                                <option value="hn">Hindi</option>
                                <option value="sc">Science</option>
                                <option value="comp">Computer</option>
                                <option value="math">Maths</option>
                                <option value="humanities & language">Humanities & Lang.</option>
                                <option value="drawing">Drawing</option>
                            </optgroup>
                            <hr>
                            <optgroup label="Class 11 & 12">
                                <option value="cs">Comp. Sc.</option>
                                <option value="bs">Bio. Sc.</option>
                                <option value="comm">Commerce</option>
                                <option value="">Arts</option>
                            </optgroup>
                            <hr>
                            <optgroup label="Bachelor's Degree">
                                <option value="bsc">B.Sc.</option>
                                <option value="bcom">B.Com.</option>
                                <option value="ba">B.A.</option>
                                <option value="btech">B.Tech</option>
                            </optgroup>
                        </select><br>

                        <textarea name="msg" id="msg" cols="30" rows="10"
                            placeholder="Type your message here..."></textarea><br>
                        <input type="submit" value="Submit" class="btn">
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">All Rights Reserved &copy; 2020 by SAS GROUP</div>
    </footer>

    <script src="Scripts/index.js"></script>
</body>

</html>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];

    if($name != "" && $email != "" && $phone != "" && $sub != "" && $msg != ""){
        

    $query = "INSERT INTO form (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$sub', '$msg')";
    $data = mysqli_query($conn, $query);

    if($data){
        echo "Data Inserted Successfully";
    } else {
        echo "Data not Inserted";
    }
}
else{
    echo "<script>alert('Fill the form first');</script>";
}


}



?>