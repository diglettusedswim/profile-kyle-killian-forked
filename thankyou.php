<?php
$visitor_comments = filter_input(INPUT_POST, 'Comments');
$visitor_email = filter_input(INPUT_POST, 'Email');
$visitor_name = filter_input(INPUT_POST, 'Name');
$visitor_subject = filter_input(INPUT_POST, 'Subject');


 /*echo "Fields: " . $visitor_name ." " . $visitor_email ." " . $visitor_comments ." " . $visitor_subject;*/

// Validate inputs
if ($visitor_name == null || $visitor_email == null ||
        $visitor_comments == null) {
    $error = "Invalid input data. Check all fields and try again.";
    /* include('error.php'); */
    echo "Form Data Error: " . $error;
    exit();
} else {
    $dsn = 'mysql:host=localhost;dbname=portfolio';
    $username = 'recrute_user';
    $password = 'Pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        /* include('database_error.php'); */
        echo "DB Error: " . $error_message;
        exit();
    }

    // Add the product to the database  
    $query = 'INSERT INTO visitor
                         (comments, email, name, subject, vist_date, userID)
                      VALUES
                         (:comments, :email, :name, :subject, NOW(), 1)';
    $statement = $db->prepare($query);
    $statement->bindValue(':comments', $visitor_comments);
    $statement->bindValue(':email', $visitor_email);
    $statement->bindValue(':name', $visitor_name);
    $statement->bindValue(':subject', $visitor_subject);
    $statement->execute();
    $statement->closeCursor();
    /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_comments; */
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="My personal portfolio website" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="./favicon/digglett.png"
            />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="./favicon/digglett.png"
            />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="./favicon/digglett.png"
            />
        <link rel="manifest" href="./favicon/site.webmanifest" />
        <title>Kyle Killian</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <nav id="nav" class="hideNav">
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
        <div id="home">
            <div class="showcase">
                <div class="container">
                    <h1 id="name">Thank you!:
                        <span                           
                            class="txt-type"
                            data-wait="1500"
                            data-words='["<?php echo $visitor_name; ?>, for contacting me! I will get back to you shortly.", "Click Below to get back to the main page!"]'
                            >
                        </span> 
                    </h1>
                    <a href="index.html" target="_top">Click me</a>
                </div>
            </div>
        </div>
    </body>
    <script src="main.js"></script>
</html>