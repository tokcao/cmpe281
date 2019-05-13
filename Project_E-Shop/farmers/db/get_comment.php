<?php
const HOST = 'mysql:host=cmpe281.cncts77r3ktf.us-west-1.rds.amazonaws.com:3306;dbname=cmpe281';
const USER = 'cmpe281';
const PASSWORD = 'mypassword';

class Comment
{
    private $comment;

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }
}

function get_comments()
{
//    try {
////        $conn = new PDO(HOST, USER, PASSWORD);
////        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        $servername = "cmpe281.cncts77r3ktf.us-west-1.rds.amazonaws.com:3306";
//        $username = "cmpe281";
//        $password = "mypassword";
//        $dbname = "cmpe281";
//
//// Create connection
//        $conn = new mysqli($servername, $username, $password, $dbname);
//
//// Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//        echo "Connected successfully";
//        $query = 'SELECT * FROM COMMENT;';
//        $ps = $conn->prepare($query);
//        $ps->execute();
//        $ps->setFetchMode(PDO::FETCH_CLASS, "Comment");
//        $comments = $ps->fetchAll();
//        return $comments;
//    } catch (PDOException $ex) {
//        echo '<script language="javascript">';
//        echo 'alert("error")';
//        echo '</script>';
//    } catch (Exception $ex) {
//        echo '<script language="javascript">';
//        echo 'alert("error")';
//        echo '</script>';
//    }
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

// Display Data
    $sql = "SELECT * FROM COMMENT";
    $result = $conn->query($sql);

    $comments = array();

    while ($row = $result->fetch_assoc()) {
        array_push($comments, array('id' => $row["id"], 'firstName' => $row["firstname"], 'lastName' => $row["lastname"], 'email' => $row["email"]));
    }

//    echo json_encode($comments);
    $conn->close();
}

?>