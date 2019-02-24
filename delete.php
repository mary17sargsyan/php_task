<?php
require_once "db.php";
if(isset($_POST['delete'])){
    $chkarr=$_POST['checkbox'];
    foreach ($chkarr as $id){
        echo $id;
        mysqli_query($conn,"DELETE FROM message WHERE id=".$id);
    }
    header("Location: messagingForAdmin.php");

}
mysqli_close($conn);





require_once "view/delete.php";