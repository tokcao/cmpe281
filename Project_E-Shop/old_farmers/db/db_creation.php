<?php

$servername = "cmpe281.cncts77r3ktf.us-west-1.rds.amazonaws.com:3306";
$username = "cmpe281";
$password = "mypassword";
$dbname = "cmpe281";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE cmpe281";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

//Drop old table
$sql = "DROP TABLE COMMENT";
if ($conn->query($sql) === TRUE) {
    echo "Old table droped successfully";
} else {
    echo "Error dropping table: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE COMMENT (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
farmerID VARCHAR (30),
comment VARCHAR (1000)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

//insert data
$sql = "INSERT INTO COMMENT (farmerID,comment)
VALUE ('2001','Good product')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO COMMENT (farmerID, comment)
VALUE ('2002','Poor product')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO COMMENT (farmerID, comment)
VALUE ('2003','I dont like it')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO COMMENT (farmerID, comment)
VALUE ('2004','Will definitely buy it again')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO COMMENT (farmerID, comment)
VALUE ('2005','Delivery really fast')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT * FROM COMMENT";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
//        echo "<h2>" . $row["firstname"] . " " . $row["lastname"] . "</h2>";
        echo "<h3>id: " . $row["id"] . "</h3>";
        echo "<h3>FarmerID: " . $row["farmerID"] . "</h3>";
        echo "<h3>Commet: " . $row["comment"] . "</h3>";
//        echo "<h3>Address: " . $row["homeaddress"] . "</h3>";
//        echo "<h3>Home Phone: " . $row["homephone"] . "</h3>";
//        echo "<h3>Cell Phone: " . $row["cellphone"] . "</h3>";
        echo "<br><br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>