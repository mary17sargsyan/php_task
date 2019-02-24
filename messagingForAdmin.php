<?php


session_start();
if(empty($_SESSION['userId'])){
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['view'])) {
    include "db.php";
    $sql = "SELECT * FROM message ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<form method='post' action='delete.php'>";

        echo "<table class='table'>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td colspan='2'> <input type='checkbox'  name='checkbox[]' value='" . $row['id'] . "'> </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> <b> Date </b></td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> <b> First Name </b></td>";
            echo "<td>" . $row['firstName'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> <b> Last Name </b></td>";
            echo "<td>" . $row['lastName'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> <b> Email </b></td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> <b> Message </b></td>";
            echo "<td>" . nl2br($row['message']) . "</td>";
            echo '</tr>';
        }

        echo "</table>";
        echo " <input type='submit' name='delete' id='delete' value='delete'> </form>";
    }

}


require_once "view/messagingForAdmin.php";