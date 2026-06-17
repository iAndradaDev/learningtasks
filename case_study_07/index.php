<!DOCTYPE html>
<html>
    <head>
        <title>.:Login:.</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php
        if (isset($_POST["Submit"])){
            
            $txtUser = $_POST["txtUser"];
            $txtPass = $_POST["txtPass"];

            if ($txtUser == "user" && $txtPass == "1234") {
                echo "Successful login! Hello, <strong>" .$_POST["txtUser"] . ".</strong><br><br>";
                echo "<a href='index.php'>Back</a>";
            } else {
                echo "Invalid username or password.<br><br>";
                echo "<a href='index.php'>Try Again</a>";
            }
            
        } else {
        ?>
        <div class="wrapper">
            <form method="post" action="index.php">
                <label class="main-text">Username</label><br>
                <input type="text" class="box-control" name="txtUser" placeholder="Username" required> <br><br>

                <label class="main-text">Password</label><br>
                <input type="password" class="box-control" name="txtPass" placeholder="Password" required> <br><br>
                
                <input class="btn" type="submit" name="Submit" value="Submit" />
            </form>
        </div>
        <?php } ?>
    </body>
</html>