<!-------MOD LOG-------------------------------
---------DATE: 9/18/2020-----------------------
---------Made visitor.php---------------------
---------moved code from index.html------------
---------to here as well as make them----------
---------functions-----------------------------
---------Date 9/23/2020------------------------
---------Changed $db to use function---------->
<?php

function getVisitorByEmp($userID) {
    try {
        $db = Database::getDB();
        $queryVisitors = 'SELECT * FROM visitor
                  WHERE userID = :userID
                  ORDER BY visitor_id';
        $statement3 = $db->prepare($queryVisitors);
        $statement3->bindValue(':userID', $userID);
        $statement3->execute();
        $visitors = $statement3->fetchAll();
        $statement3->closeCursor();
    } catch (PDOException $e) {
        include ('../database/database_error.php');
    }

    return $visitors;
}

function delVisitor($visitor_id) {
    try {
        $db = Database::getDB();
        $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
//    echo "this works";
        $statement = $db->prepare($query);
        $statement->bindValue(':visitor_id', $visitor_id);
        $success = $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        include ('../database/database_error.php');
    }
    return $success;
}

function adVisitor($visitor_comments, $visitor_email, $visitor_name, $visitor_subject) {
    try {
        $db = Database::getDB();
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
    } catch (PDOException $e) {
        include ('../database/database_error.php');
    }
}
?>