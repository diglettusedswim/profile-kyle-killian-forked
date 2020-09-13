<?php
require_once('database.php');

// Get IDs
$visitor_id = filter_input(INPUT_POST, 'visitor_id', FILTER_VALIDATE_INT);
$user_id = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);


//echo "The visitor id: $visitor_id";
//echo "The visitor id: $user_id";

// Delete the product from the database
if ($visitor_id != false && $user_id != false) {
    $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
//    echo "this works";
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_id', $visitor_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('admin.php');