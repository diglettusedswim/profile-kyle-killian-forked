<!-------MOD LOG-------------------------------
---------DATE: 9/18/2020-----------------------
---------Made admin.php------------------------
---------moved code to the data base-----------
---------to make functions---------------------
---------Then connected to the functions------->
<?php
require_once('./database\database.php');
require_once('./database\employee.php');
require_once('./database\visitor.php');

require_once('./util\valid_admin.php');
require_once('./util\secure_conn.php');
//echo "Connection ok";

// Get category ID
if (!isset($userID)) {
    $userID = filter_input(INPUT_GET, 'userID',
            FILTER_VALIDATE_INT);
    if ($userID == NULL || $userID == FALSE) {
        $userID = 1;
    }
}

$users = getEmployees();
$visitors = getVisitorByEmp($userID);
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
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav id="nav" class="hideNav">
            <ul class="navbar">
                <li><a href="index.html#home">Home</a></li>
                <li><a href="index.html#projects">Projects</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </nav>
        <div id="home">
            <div class="showcase">
                <div class="container">
                    <h1 id="name">Admin:
                        <span                           
                            class="txt-type"
                            data-wait="1500"
                            data-words='["Admin"]'
                            >
                        </span> 
                    </h1>
                    <span                           
                        class="txt-type"
                        data-wait="1500"
                        data-words='["Select an user to view messages"]'
                        >
                    </span> 
                    <?php foreach ($users as $user) : ?>
                    <li class="admin_li"><a href="?userID=<?php echo $user['userID']; ?>">
                                <?php echo $user['first_name']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <table id="customers">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Comments</th>
                            <th>Date</th>
                            <th>&nbsp;</th>
                        </tr>

                        <?php foreach ($visitors as $visitor) : ?>
                            <tr>
                                <td><?php echo $visitor['name']; ?></td>
                                <td><?php echo $visitor['email']; ?></td>
                                <td><?php echo $visitor['subject']; ?></td>
                                <td><?php echo $visitor['comments']; ?></td>
                                <td><?php echo $visitor['vist_date']; ?></td>
                                <td><form action="delete_visitor.php" method="post">
                                        <input type="hidden" name="visitor_id"
                                               value="<?php echo $visitor['visitor_id']; ?>">
                                        <input type="hidden" name="userID"
                                               value="<?php echo $visitor['userID']; ?>">
                                        <input type="submit" value="Delete">
                                    </form></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>


            </div>
        </div>
    </body>
    <script src="main.js"></script>
</html>