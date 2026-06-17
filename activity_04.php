<html>
    <head>
        <title>Activity 04</title>
    </head>
    <body>
        <?php
        if (isset($_POST["btnSubmit"])){
            $num1 = $_POST["Num1"];
            $operator = $_POST["operator"];
            $num2 = $_POST["Num2"];
            $result = "";

            if ($operator == "add") {
                $result = $num1 + $num2;
            } else if ($operator == "subtract") {
                $result = $num1 - $num2;
            } else if ($operator == "multiply") {
                $result = $num1 * $num2;
            } else if ($operator == "divide") {
                if ($num2 == 0) {
                    $result = "Error: Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                }
            }

            echo "Result: <strong>".$result."</strong><br><br>";
            
            echo "<a href='activity_04.php'>Back</a>";
        } else {
        ?>
        <form method="post" action="activity_04.php">
            <label>First Number</label><br>
            <input type="number" name="Num1" id="Num1" placeholder="First Number..."><br><br>
            
            <label>Second Number</label><br>
            <input type="number" name="Num2" id="Num2" placeholder="Second Number..."><br><br>
            
            <label>Operation</label><br>
            <select name="operator" id="operator"> 
                <option value="add">Add (+)</option>
                <option value="subtract">Subtract (-)</option>
                <option value="multiply">Multiply (*)</option>
                <option value="divide">Divide (/)</option>
            </select><br><br>

            <input type="submit" name="btnSubmit" value="Submit" />
        </form>
        <?php } ?>
    </body>
</html>