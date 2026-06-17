<html>
    <head>
        <title>..:My Personal Information:..</title>
         <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="wrapper">  
            <div class="header">
                <div class="header-text">
                    <h1>MYRO C. ANDRADA</h1>
                </div>
            </div>
            
            <div class="main-navigation">
                <a href="index.php" class="button">Home</a>
                <a href="index.php?page=personal_info" class="button">Personal Information</a>
                <a href="index.php?page=contact_information" class="button">Contact Information</a>
                <a href="index.php?page=family_background" class="button">Family Background</a>
                <a href="index.php?page=educational_attainment" class="button">Educational Attainment</a>
            </div>

            <div class="content">
                <?php
                    switch(@$_GET["page"]){
                        case "personal_info":
                            include ("personal_info.php");
                            break;
                        
                        case "contact_information":
                            include ("contact_information.php");
                            break;

                        case "family_background":
                            include ("family_background.php");
                            break;

                        case "educational_attainment":
                            include ("educational_attainment.php");
                            break;

                        default:
                            include("home.php");
                            break;
                    }
                ?>
            </div>

            <div class="footer">
                <p>© 2026 Myro C. Andrada</p>
            </div>
        </div>
    </body>
</html>