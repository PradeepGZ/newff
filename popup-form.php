<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

include("db.php");
    
    extract($_POST);
    global $resp;
    $created_at = date("Y-m-d H:i:s");
    
     $page = $_POST['viewInstitute'];

    $db = new Database();
    $conn = $db->dbConnection();
    
    $sql = "INSERT INTO enquiry(name, phoneno, email_id, city, study_destination, utm_source, utm_medium, utm_campaign, utm_term, utm_content, created_at) 
            VALUES (:name, :phoneno, :email_id, :city, :study_destination, :utm_source, :utm_medium, :utm_campaign, :utm_term, :utm_content, :created_at)";

    $stmt = $conn->prepare($sql);     

    $stmt->bindParam("name", $name);
    $stmt->bindParam("phoneno", $phoneno);
    $stmt->bindParam("email_id", $email_id);
    $stmt->bindParam("city", $city);
    $stmt->bindParam("study_destination", $study_destination);
    $stmt->bindParam("utm_source", $utm_source);
    $stmt->bindParam("utm_medium", $utm_medium);
    $stmt->bindParam("utm_campaign", $utm_campaign);
    $stmt->bindParam("utm_term", $utm_term);
    $stmt->bindParam("utm_content", $utm_content);
    $stmt->bindParam("created_at", $created_at);

    if($stmt->execute()) {
        
         if($page == 'FFInsitute')
         {
            header("Location: thank-you.php?page=viewInstitute");   
         }
         else
         {
            header("Location: thank-you.php"); 
         }
    }
    else
    {
        header("Location: index.php"); 
    }


?>