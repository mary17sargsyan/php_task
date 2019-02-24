<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="view/styles.css">
</head>
<body>



<div class="marginAuto">
    <form method="post" action=" index.php">
        <label for="userName">User Name</label><br>
        <input type="text" id="fname" name="userName" placeholder="User Name . . ."> <br>
        <label for="password">Password</label> <br>
        <input type="password" id="lname" name="password" placeholder="Passvord . . ."><br>
        <input type="submit" value="Login">
    </form>


</div>
<br>
<br>

<div class="marginMessageAuto">
    <form method="post" action="index.php">
        <label for="firstName">First Name</label><br>
        <input type="text"  name="firstName" placeholder="First Name . . ."> <br>

        <label for="lastName">Last Name</label><br>
        <input type="text"  name="lastName" placeholder="Last Name . . ."> <br>

        <label for="eMail">E: mail</label><br>
        <input type="text"  name="eMail" placeholder="eMail . . ."> <br>

        <label for="Message">Message</label><br>
        <textarea id="subject" name="message" placeholder="Write something.."></textarea>

        <input type="submit" value="SEND">

    </form>


</div>

</body>
</html>