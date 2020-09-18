<!-------MOD LOG-------------------------------
---------DATE: 9/18/2020-----------------------
---------Made statement.php--------------------
---------moved code from index.html------------
---------to here------------------------------>
<?php

function getStatment() {
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
