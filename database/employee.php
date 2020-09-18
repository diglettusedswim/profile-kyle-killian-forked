<!-------MOD LOG-------------------------------
---------DATE: 9/18/2020-----------------------
---------moved over getEmployees---------------
---------as a function------------------------->

<?php

function getEmployees() {
    global $db;
    $query = 'SELECT * FROM information ORDER BY userID';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    $statement->closeCursor();
    
    return $users;
}

?>
