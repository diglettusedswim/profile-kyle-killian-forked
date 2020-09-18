<!-------MOD LOG-------------------------------
---------DATE: 9/18/2020-----------------------
---------Made visitor.php---------------------
---------moved code from index.html------------
---------to here as well as make them----------
---------functions---------------------------->
<?php

function getVisitorByEmp($userID) {
    global $db;
    $queryVisitors = 'SELECT * FROM visitor
                  WHERE userID = :userID
                  ORDER BY visitor_id';
    $statement3 = $db->prepare($queryVisitors);
    $statement3->bindValue(':userID', $userID);
    $statement3->execute();
    $visitors = $statement3->fetchAll();
    $statement3->closeCursor();
    return $visitors;
}

function delVisitor($visitor_id) {
    global $db;
    $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
//    echo "this works";
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_id', $visitor_id);
    $success = $statement->execute();
    $statement->closeCursor();
    return $success;
}

function adVisitor($visitor_comments, $visitor_email, $visitor_name, $visitor_subject) {
    global $db;
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
}

?>