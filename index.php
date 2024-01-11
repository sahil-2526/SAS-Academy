<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SAS Academy</title>

    <link rel="stylesheet" href="Style Sheets/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="small-screen">
        <p class="text">Rotate your phone to landscape mode</p>
    </div>

    <header>
        <div class="logo"><a href="index.php"><img src="Media/Logo.jpg" alt=""></a></div>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="achievements.php">Achievemets</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="#contact">Contact Us</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </nav>

        <label for="menu"><img src="Media/menu-bar.png" alt=""></label>
        <input type="checkbox" id="menu">
        <div class="menu-box">
            <div class="head">
                <div class="logo"><a href="index.php"><img src="Media/Logo.jpg" alt=""></a></div>
                <label for="menu">
                    <span class="material-symbols-outlined">close</span>
                </label>
            </div>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="achievements.php">Achievemets</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="#contact" onclick="hide()">Contact Us</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <section class="ad">
            <button id="prev" onclick="goPrev()"><img src="Media/Home/prev.png" alt=""></button>
            <img name="slide" class="slide" src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <img name="slide" class="slide" src="https://images.unsplash.com/photo-1535982330050-f1c2fb79ff78?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <img name="slide" class="slide" src="https://plus.unsplash.com/premium_photo-1671069848075-c9faefe4df18?q=80&w=1373&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <img name="slide" class="slide" src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <button id="next" onclick="goNext()"><img src="Media/Home/next.png" alt=""></button>
        </section>
        <section class="teacher">
            <h3>OUR FACULTIES</h3>
            <div class="slider">
                <div class="box">
                    <img src="Media/Teachers/Jayanta sir.jpg" alt=""><br>
                    <span class="imgtxt">Mr. Jayanta Chatterjee</span><br>
                    <span>B.Sc. Maths(H), M.Sc.(Maths)</span>
                </div>
                <div class="box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLY4aT6JxU4kE9F6X8YQ30MGiFd89dh10Wj5ozmejxYA&s"
                        alt=""><br>
                    <span class="imgtxt">Dr. Oindrila Das</span><br>
                    <span>B.Sc. Chem.(H), M.Sc.(Chem), PhD.(Chem) from J.U.</span>
                </div>
                <div class="box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLY4aT6JxU4kE9F6X8YQ30MGiFd89dh10Wj5ozmejxYA&s"
                        alt=""><br>
                    <span class="imgtxt">Mr. Saikat Chakraborty</span><br>
                    <span>B.Sc. Comp. Sc.(H), MCA</span>
                </div>
                <div class="box">
                    <img src="Media/Teachers/Arup sir.jpg" alt=""><br>
                    <span class="imgtxt">Mr. Arup Nath</span><br>
                    <span>B.Com(H), M.Com.(Finance), CA(Inter)</span>
                </div>
                <div class="box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLY4aT6JxU4kE9F6X8YQ30MGiFd89dh10Wj5ozmejxYA&s"
                        alt="."><br>
                    <span class="imgtxt">Mr. Oishik Das</span><br>
                    <span>B.Com (Accounting & Finance Honours), M.Com from C.U.</span>
                </div>
                <div class="box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLY4aT6JxU4kE9F6X8YQ30MGiFd89dh10Wj5ozmejxYA&s"
                        alt="."><br>
                    <span class="imgtxt">Mr. Debojyoti Mukherjee</span><br>
                    <span>B.Sc. Physics(H), M.Sc. (Physics)</span>
                </div>
                <div class="box">
                    <img src="Media/Teachers/Chirasree mam.jpg" alt=""><br>
                    <span class="imgtxt">Mrs. Chirasree Barui</span><br>
                    <span>M.Sc. in Anthropology</span>
                </div>
                <div class="box">
                    <img src="Media/Teachers/Diasha mam.jpg" alt=""><br>
                    <span class="imgtxt">Mrs. Diasha Banerjee</span><br>
                    <span>B.A. English(H), Pursuing L.L.B.</span>
                </div>
                <div class="box">
                    <img src="Media/Teachers/Sayani mam.jpg" alt=""><br>
                    <span class="imgtxt">Mrs. Sayani Dutta</span><br>
                    <span>B.A. Hist.(H), M.A.(Hist.)</span>
                </div>
                <div class="box">
                    <img src="Media/Teachers/Tathagata sir.jpg" alt=""><br>
                    <span class="imgtxt">Mr. Tathagata Dutta</span><br>
                    <span>B.Sc. Comp. Sc.(H)</span>
                </div>
            </div>
        </section>
        <section class="title">
            <p>SPECIALISED INSTITUTE WITH QUALITY CARE</p>
            <h3>ACHIEVING DREAMS</h3>
        </section>
        <section class="details">
            <div class="tile">
                <h4>Academic</h4>
                <ul>
                    <li>ICSE, CBSE, WBBSE ALL BOARD Students are welcome.</li><br>
                    <h6>Courses offered</h6>
                    <li>Classes 5-10 All Subjects with Computer Science.</li>
                    <li>Classes 11-12 Science, Commerce, Computer Applications/Science, Arts.</li>
                </ul>
                <a href=""><button>More Info</button></a>
            </div>
            <div class="tile">
                <h4>Computer Learning</h4>
                <ul>
                    <li>ICSE, CBSE, WBBSE ALL BOARD Students are welcome.</li>
                    <li>Classes 5-12 Computer Applications/Science.</li>
                    <li>Practical test every month with special doubt clearing session Practical and theoretical Classes
                        taken By Software Professionals.</li><br>
                    <h6>Professional Course Details</h6>
                    <li>C, C++, Java, Python, Microsoft Word, Excel, PowerPoint, Tally ERP 9.</li><br>
                    <h6>Special Class</h6>
                    <li>GST and Income Tax Course.</li>
                </ul>
                <a href=""><button>More Info</button></a>
            </div>
            <div class="tile">
                <h4>Art Classes</h4>
                <ul>
                    <li>Weekly Drawing, Painting & More By Renowned Professional.</li>
                </ul>
                <a href=""><button>More Info</button></a>
            </div>
        </section>
        <section class="about">
            <h3>ABOUT US</h3>
            <h6>Specialized Institute with Quality Care</h6>
            <p>SAS Academy is a educational institution at Garden Reach, Kolkata that provides Complete Solution for
                academic and Computer learning.<br>
                Our journey was initiated in 2015 by Mr. Saikat Chakroborty and Mr. Arup Nath by offering courses on
                Computer Science/Application and Commerce. Today we are highly recognized to offer guidance to the
                students of all boards- ICSE, CBSE, WBBSE to enlighten their careers with the dreamt success.</p>
            <a href="about.php"><button>Read More</button></a>

            <span id="contact"></span>
        </section>

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
                        <a href="https://www.facebook.com/sasacademy20" target="_blank"><img src="Media/facebook.png"
                                alt=""></a>
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
                    <form action="#" method="POST>
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