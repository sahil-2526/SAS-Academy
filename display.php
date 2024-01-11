<?php
include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

// Check if there are any rows in the result set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <style>
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #ffc0cb; /* Pink background */
    }

    table, th, td {
        border: 1px solid #4CAF50; /* Green border */
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #4CAF50; /* Green background */
        color: white; /* White text */
    }

    tr:nth-child(even) {
        background-color: #f0f8ff; /* Light Blue background */
    }

    a {
        text-decoration: none;
        padding: 5px 10px;
        color: #fff; /* White text */
        background-color: #4CAF50; /* Green background */
        border: 1px solid #45a049; /* Darker green border */
        border-radius: 3px;
    }
</style>

</head>
<body>

<?php
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Subject</th><th>Message</th><th>Action</th></tr>";
if (mysqli_num_rows($data) > 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        $id = $result['ID'];
        $name = $result['name'];
        $email = $result['email'];
        $phone = $result['phone'];
        $sub = $result['subject'];
        $msg = $result['message']; 

        echo "<tr>";
        echo "<td>$id</td><td>$name</td><td>$email</td><td>$phone</td><td>$sub</td><td>$msg</td>";
        echo "<td><a href='edit.php?id=$result[ID] & name=$result[name] & email=$result[email] & ph=$result[phone] & sub=$result[subject]
        & msg=$result[message]'>Edit</a> | <a href='delete.php'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found in the 'form' table.";
}
?>

</body>
</html>
