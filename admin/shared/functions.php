<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);


function getMembersList(){
    include("connect.php");
    
    $db = new Database();
    $conn = $db->dbConnection();

    $sql = "SELECT name, phoneno, email_id, city, study_destination, utm_source, utm_medium, utm_campaign, utm_term, utm_content , created_at FROM enquiry ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $res = array("result" => $result);
    return $res;
}


// Contact Us
function getContactUs()
{
    include("connect.php");

    $db = new Database();
    $conn = $db->dbConnection();

    $sql = "SELECT cname, cphoneno, cemail_id, ccity, cstudy_destination, cutm_source, cutm_medium, cutm_campaign, cutm_term, cutm_content , created_at FROM contactus";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $res = array("result" => $result);
    return $res;
}

// Get In Touch

function getinTouch()
{
    include("connect.php");

    $db = new Database();
    $conn = $db->dbConnection();

    $sql = "SELECT tname, tphoneno, temail, tcity, tstudy_destination, tutm_source, tutm_medium, tutm_campaign, tutm_term, tutm_content , created_at FROM getintouch";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $res = array("result" => $result);
    return $res;
}


function checkAuth($data) {
   // echo md5($data["pass"]);//exit;  // password - admin@ff2022
    if((strtolower($data["username"]) == "fairfuture") && (md5($data["pass"]) == "f5c547f3761b174baa9d431961595a28")) {
        return true;
    } else {
        return false;
    }
}

