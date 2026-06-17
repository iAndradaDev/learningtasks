<h1>Contact us</h1>
<?php
    if(isset($_POST["btnSubmit"])){
        echo "Thank you for your response, <strong>".htmlspecialchars($_POST["txtName"])."!</strong><br><br>";
        echo "<a href='index.php' class='button'>Back to Home</a>";
    } else {
?> 
<form method="post" action="index.php?page=contact-us">
    <label>Email Address</label><br>
    <input type="text" class="form-control" name="txtEmail" placeholder="Email Address..." required> <br>

    <label>Name</label><br>
    <input type="text" class="form-control" name="txtName" placeholder="Name..." required> <br>
    
    <label>Subject</label><br>
    <input type="text" class="form-control" name="txtSubject" placeholder="Subject..."> <br>
    
    <label>Letter</label><br>
    <textarea rows="15" class="form-control" cols="30" name="txtLetter" placeholder="Content of letter..."></textarea><br><br>
    
    <input class="btn" type="submit" name="btnSubmit" value="Submit" />
</form>
<?php } ?>