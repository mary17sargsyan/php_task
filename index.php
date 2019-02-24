<?php
session_start();
require_once 'db.php';
$today = date("H:i:s");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['userName']) && !empty($_POST['password'])) {

        $userName = mysqli_escape_string($conn, $_POST['userName']);
        $password = mysqli_escape_string($conn, $_POST['password']);

        $sql = "SELECT id, userName, password FROM user where userName='$userName' AND password='$password' ";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['userId'] = $row['id'];
            header("Location: messagingForAdmin.php");
        }
        else{
            echo "Incorrect username/password combination";
        }
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['eMail'])  &&
        !empty($_POST['message']) ) {
        $firstName = mysqli_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_escape_string($conn, $_POST['lastName']);
        $eMail = mysqli_escape_string($conn, $_POST['eMail']);
        $message = mysqli_escape_string($conn, $_POST['message']);

        if (strlen($firstName) < 3) {
            echo "First Name should be longer than 3 characters";
            exit;
        }
        if (strlen($lastName) < 3) {
            echo "Last Name should be longer than 3 characters";
            exit;
        }
        if (empty($eMail)) {
            echo "Invalid eMail";
            exit;
        }
        if (strlen($message) > 600) {
            echo "Message is too long, it should be less chan 600 characters";
            exit;
        }
        $sqlInsertMessage = "INSERT INTO message (`lastName`,`firstName`,`email`,`message`)
		VALUES ('" . $lastName . "', '" . $firstName . "','" . $eMail . " ', '" . $message . "')  ";

        if ($conn->query($sqlInsertMessage) === TRUE) {
            echo "Thank you. Message Sent";
        } else {
            echo "Error: " . $sqlInsertMessage . "<br>" . $conn->error;
        }
    }
}




require_once "view/index.php";