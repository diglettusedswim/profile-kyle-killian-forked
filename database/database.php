<!-------MOD LOG-------------------------------
---------DATE: 9/18/2020-----------------------
---------Made Database.php---------------------
---------moved code from index.html------------
---------to here------------------------------>
<?php
//$dsn = 'mysql:host=localhost;dbname=portfolio';
//$username = 'recrute_user';
//$password = 'Pa$$w0rd';
//
//try {
//    $db = new PDO($dsn, $username, $password);
//} catch (PDOException $e) {
//    $error_message = $e->getMessage();
//    include('database_error.php');
//    exit();
//}

class Database {

    private static $dsn = 'mysql:host=localhost;dbname=portfolio';
    private static $username = 'recrute_user';
    private static $password = 'Pa$$w0rd';
    private static $db;

    private function __construct() {}

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                        self::$username,
                        self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('database_error.php');
                exit();
            }
        }
        return self::$db;
    }

}
?>