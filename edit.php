<?php
include("connection.php");

$id = $_GET['id'];
$query = "SELECT * FROM form WHERE ID = '$id'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        form {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form action="#" method="POST">
        <label for="name">Name <sup class="imp">*</sup></label>
        <input type="text" VALUE="<?php echo $result['name'] ?>" placeholder="Name" id="name" name="name" required>

        <label for="email">E-Mail <sup class="imp">*</sup></label>
        <input type="email" VALUE="<?php echo $result['email'] ?>" name="email" id="email" placeholder="example@abc.com" required>

        <label for="phone">Phone <sup class="imp">*</sup></label>
        <input type="tel" VALUE="<?php echo $result['phone'] ?>" name="phone" id="phone" placeholder="1234567890" required>

        <label for="sub">Subject <sup class="imp">*</sup></label>
        <select name="sub"  id="sub" required>
            <option value="" selected>Select a Subject</option>
            <optgroup label="1-10">
                <option value="eng">English</option>
                <option value="hn">Hindi</option>
                <option value="sc">Science</option>
                <option value="comp">Computer</option>
                <option value="math">Maths</option>
            </optgroup>
            <optgroup label="11 & 12">
                <option value="cs">Comp. Sc.</option>
                <option value="bs">Bio. Sc.</option>
                <option value="comm">Commerce</option>
                <option value="">Arts</option>
            </optgroup>
            <optgroup label="Bachelor's Degree">
                <option value="bsc">B.Sc.</option>
                <option value="bcom">B.Com.</option>
                <option value="ba">B.A.</option>
                <option value="btech">B.Tech</option>
            </optgroup>
        </select>

        <label for="msg">Message <sup class="imp">*</sup></label>
        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Type your message here..." required></textarea>

        <input type="submit" value="update details" class="btn" name="update">
    </form>

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
