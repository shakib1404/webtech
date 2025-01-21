<?php
require("db_config.php"); // Database configuration
include("header.php"); // Header file
include("menu.php"); // Menu file
?>
<div id="main_content">

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all users
$sql = "SELECT * FROM `user`";

// Execute query
if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . 
                 " - Name: " . $row["firstname"] . " " . $row["lastname"] . 
                 " - Email: " . $row["email"] . 
                 " - Mobile No: " . $row["mobileNo"] . 
                 " - Address: " . $row["Address"] . 
                 " <a style='color:white;' href='details.php?id=" . $row["id"] . "'>Detail</a> | " . 
                 " <a style='color:white;' href='delete.php?id=" . $row["id"] . "'>Delete</a> | " . 
                 " <a style='color:white;' href='edit.php?id=" . $row["id"] . "'>Edit</a><br>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Error executing query: " . $conn->error;
}

// Close connection
$conn->close();
?>

</div>
<?php
include("footer.php"); // Footer file
?>
