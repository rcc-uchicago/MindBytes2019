<?php

header('Content-type: application/json');

// SQL server connection information
require('config.php');

// Create connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8');

//var_dump($_POST);

$result = array();
    
if (is_ajax()) {    
    if (isset($_POST["awardCategory"]) && !empty($_POST["awardCategory"])) { //Checks if category value exists
        $cat = $_POST["awardCategory"];

        $year = $_POST["year"];
        
        if ($cat == "All") {
            $sql = "SELECT poster_id, files_upload, title_of_poster, project_abstract, is_winner, award_winner_category, year FROM tbl_poster WHERE year = $year"; // AND award_category IS NOT NULL
        //} else if($cat == "None"){
        //    $sql = "SELECT poster_id, files_upload, title_of_poster, project_abstract, is_winner, award_winner_category, year FROM tbl_poster WHERE is_public = 1 AND year = $year AND award_category=''";
        } else {
            $sql = "SELECT poster_id, files_upload, title_of_poster, project_abstract, is_winner, award_winner_category, year FROM tbl_poster WHERE year = $year AND award_category LIKE '%$cat%'";
            
            /*$sql = sprintf("SELECT poster_id, files_upload, title_of_poster, project_abstract FROM tbl_poster WHERE award_category LIKE '%s%%'",
               mysqli_real_escape_string($conn, $cat));*/
        }        
        $record = mysqli_query($conn, $sql);        
        
        while ($tuple = mysqli_fetch_assoc($record)) {
            $result[] = $tuple;
        }
        
    }
}

//Function to check if the request is an AJAX request
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

echo json_encode($result);

mysqli_close($conn);

?>