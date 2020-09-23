<!-------MOD LOG-------------------------------
---------DATE: 9/18/2020-----------------------
---------moved over getEmployees---------------
---------as a function-------------------------
---------Date 9/23/2020------------------------
---------Changed $db to use function----------->

<?php

function getEmployees() {
    try {
        $db = Database::getDB();
        $query = 'SELECT * FROM information ORDER BY userID';
        $statement = $db->prepare($query);
        $statement->execute();
        $users = $statement->fetchAll();
        $statement->closeCursor();
    } catch (PDOException $e) {
        include ('../database/database_error.php');
    }

    return $users;
}
?>
