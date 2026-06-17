<!DOCTYPE html>
<html>
    <head>
        <title>.:Case 06:.</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="wrapper">  
            <div class="header">
                <div class="header-text">
                    <h1>MYRO C. ANDRADA</h1>
                    <p>Web Developer | Programmer | Designer</p>
                </div>
            </div>
            
            <div class="main-navigation">
                <a href="index.php" class="button">Home</a>
                <a href="index.php?page=projects" class="button">Projects</a>
                <a href="index.php?page=job-postings" class="button">Job Postings</a>
                <a href="index.php?page=testimonies" class="button">Testimonies</a>
                <a href="index.php?page=contact-us" class="button">Contact Us</a>
            </div>

            <div class="content">
                <?php
                    switch(@$_GET["page"]){
                        case "projects":
                            include ("projects.php");
                            break;
                        
                        case "job-postings":
                            include ("job-postings.php");
                            break;

                        case "testimonies":
                            include ("testimonies.php");
                            break;

                        case "contact-us":
                            include ("contact-us.php");
                            break;

                        default:
                            include("home.php");
                            break;
                    }
                ?>
            </div>
            <div class="footer">
                © 2026 Myro C. Andrada. All Rights Reserved.
            </div>
        </div>
    </body>
</html>