<html>
    <head>
        <title>Activity 03</title>
        <style>
            .form-control{
                font-family: verdana;
            }
            .btn{
                background-color: blue;
                color: white;
            }
            .btn:hover{
                background-color: white;
                color: blue;
            }
        </style>
    </head>
    <body>
        <form method="post" action="activity_03_receiver.php">
            <label>First Name</label><br>
            <input type="text" class="form-control" name="txtFirstName" placeholder="First Name..."> <br>
            <label>Last Name</label><br>
            <input type="text" class="form-control" name="txtLastName" placeholder="Last Name..."> <br>
            <label>Status</label><br>        
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><br>
            <label>Date of Birth</label><br>
            <input type="date" class="form-control" name="txtDOB" placeholder="Date of Birth..."> <br>
            <label>Address</label><br>
            <textarea rows="15" class="form-control"
                    cols="21" type="text" name="txtAddressName" placeholder="Address..."></textarea><br><br>
            <input class="btn" type="submit" name="btnSubmit" value="Submit" />
            <input class="btn" type="reset" value="clear" />
        </form>
    </body>
</html>