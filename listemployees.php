<?php
/* * *******made listemploeyees.php********* */
/* * *************************************** */
/* * *************************************** */
/* * *************************************** */
/* * *************************************** */

class Database {

    private static $dsn = 'mysql:host=localhost;dbname=portfolio';
    private static $username = 'recrute_user';
    private static $password = 'Pa$$w0rd';
    private static $db;

    private function __construct() {
        
    }

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                        self::$username,
                        self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                //include('../errors/database_error.php');
                echo "Connection error";
                exit();
            }
        }
        return self::$db;
    }

}

class Employee {

    private $id;
    private $first_name;
    private $last_name;

    public function __construct($id, $first_name, $last_name) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($value) {
        $this->first_name = $value;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($value) {
        $this->last_name = $value;
    }
}
class EmployeeDB {
    public static function getEmploeeys() {
        $db = Database::getDB();
        $query = 'SELECT * FROM information
                 ORDER BY last_name';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $employees = array();
        foreach ($statement as $row) {
            $employee = new Employee($row['userID'],
                                     $row['first_name'],
                                     $row['last_name']);
            $employees[] = $employee;
        }
        return $employees;
    }

}

$employees = EmployeeDB::getEmploeeys();
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
                <li><a href="index.html#home">Home</a></li>
                <li><a href="index.html#projects">Projects</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </nav>
        <div id="home">
            <div class="showcase">
                <div class="container">
                    <h1 id="name">Employees listing:
                        <span                           
                            class="txt-type"
                            data-wait="1500"
                            data-words='[""]'
                            >
                        </span> 
                    </h1>
                    <ul>
                        <?php foreach ($employees as $employee) : ?>
                        <li>
                            <?php echo $employee->getLastName() . " " . $employee->getFirstName(); ?>
                        </li>
                        <?php  endforeach; ?>
                    </ul>
                    
                </div>
            </div>
        </div>
    </body>
    <script src="main.js"></script>
</html>