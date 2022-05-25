<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

function consultation()
{
    

    include("db.php");
    
    extract($_POST);
    global $resp;
    $created_at = date("Y-m-d H:i:s");

    $db = new Database();
    $conn = $db->dbConnection();

    $sql = "INSERT INTO consultation(name, phoneno, email_id, city, study_destination, utm_source, utm_medium, utm_campaign, utm_term, utm_content, created_at) 
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
        $resp["status"] = 1;
        $resp["msg"] = "Thank you for contacting us. We will reach out to you shortly.";

        //send email
        //include("swiftmailer/mail.php");
        
        // $subject = "Thank You";                

        // $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';
    
        // $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;"><img src="https://gozoop.us/gz-projects/fairfuture/images/logo2.png"></td></tr>';
        
        // $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;">Congratulations! </td></tr>';


        // $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:500;"> 
        // Dear '.$name.', <br /><br /> 
        // You have taken the first step towards realizing your overseas education dream.
        // Rest assured, our respresentative will connect with you within the next 24 hours and 
        // show you how easy it is study abroad with Fair Future
        // </td></tr>';

        // $data.='</table>';

        // $message=$data;
        // sendMail($email_id, "", $message, $subject);

    } else {
        $resp["msg"] = "Error!";
    }
    
    exit(json_encode($resp));

}



// contact us

function contact()
{


    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

    include("db.php");
    
    extract($_POST);
    global $resp;
    $created_at = date("Y-m-d H:i:s");

    $db = new Database();
    $conn = $db->dbConnection();

    $sql = "INSERT INTO contactus(cname, cphoneno, cemail_id, ccity, cstudy_destination, cutm_source, cutm_medium, cutm_campaign, cutm_term, cutm_content, created_at) 
            VALUES (:cname, :cphoneno, :cemail_id, :ccity, :cstudy_destination, :cutm_source, :cutm_medium, :cutm_campaign, :cutm_term, :cutm_content, :created_at)";
    $stmt = $conn->prepare($sql);     

    $stmt->bindParam("cname", $cname);
    $stmt->bindParam("cphoneno", $cphoneno);
    $stmt->bindParam("cemail_id", $cemail_id);
    $stmt->bindParam("ccity", $ccity);
    $stmt->bindParam("cstudy_destination", $cstudy_destination);
    $stmt->bindParam("cutm_source", $cutm_source);
    $stmt->bindParam("cutm_medium", $cutm_medium);
    $stmt->bindParam("cutm_campaign", $cutm_campaign);
    $stmt->bindParam("cutm_term", $cutm_term);
    $stmt->bindParam("cutm_content", $cutm_content);
    $stmt->bindParam("created_at", $created_at);

    if($stmt->execute()) {
        $resp["status"] = 1;
        $resp["msg"] = "Thank you for contacting us. We will reach out to you shortly.";

        //send email
    //   include("swiftmailer/mail.php");
        
    //     $subject = "Thank You";                

    //     $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';
    
    //     $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;"><img src="https://gozoop.us/gz-projects/fairfuture/images/logo2.png"></td></tr>';
        
    //     $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;"> Congratulations! </td></tr>';


    //     $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:500;"> 
    //     Dear '.$cname.', <br /><br /> 
    //     You have taken the first step towards realizing your overseas education dream.
    //     Rest assured, our respresentative will connect with you within the next 24 hours and 
    //     show you how easy it is study abroad with Fair Future
    //     </td></tr>';

    //     $data.='</table>';

    //     $message=$data;
    //     sendContactMail($cemail_id, "", $message, $subject);
    } else {
        $resp["msg"] = "Error!";
    }
    
    exit(json_encode($resp));
}


function getInTouch()
{
    include("db.php");
    
    extract($_POST);
    global $resp;
    $created_at = date("Y-m-d H:i:s");

    $db = new Database();
    $conn = $db->dbConnection();

    $sql = "INSERT INTO getintouch(tname, tphoneno, temail, tcity, tstudy_destination, tutm_source, tutm_medium, tutm_campaign, tutm_term, tutm_content, created_at) 
            VALUES (:tname, :tphoneno, :temail, :tcity, :tstudy_destination, :tutm_source, :tutm_medium, :tutm_campaign, :tutm_term, :tutm_content, :created_at)";
    
    $stmt = $conn->prepare($sql);     

    $stmt->bindParam("tname", $tname);
    $stmt->bindParam("tphoneno", $tphoneno);
    $stmt->bindParam("temail", $temail);
    $stmt->bindParam("tcity", $tcity);
    $stmt->bindParam("tstudy_destination", $tstudy_destination);
    $stmt->bindParam("tutm_source", $tutm_source);
    $stmt->bindParam("tutm_medium", $tutm_medium);
    $stmt->bindParam("tutm_campaign", $tutm_campaign);
    $stmt->bindParam("tutm_term", $tutm_term);
    $stmt->bindParam("tutm_content", $tutm_content);
    $stmt->bindParam("created_at", $created_at);

    if($stmt->execute()) {
        $resp["status"] = 1;
        $resp["msg"] = "Thank you for contacting us. We will reach out to you shortly.";

        // include("swiftmailer/mail.php");
        
        // $subject = "Thank You";                

        // $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';
    
        // $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;"><img src="https://gozoop.us/gz-projects/fairfuture/images/logo2.png"></td></tr>';
        
        // $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;"> Congratulations!</td></tr>';


        // $data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:500;"> 
        // Dear '.$tname.', <br /><br /> 
        // You have taken the first step towards realizing your overseas education dream.
        // Rest assured, our respresentative will connect with you within the next 24 hours and 
        // show you how easy it is study abroad with Fair Future
        // </td></tr>';

        // $data.='</table>';

        // $message=$data;
        // sendGetInTouchMail($temail, "", $message, $subject);
    } else {
        $resp["msg"] = "Error!";
    }
    
    exit(json_encode($resp));
}

date_default_timezone_set('Asia/Kolkata');

$action = $_GET['action'];
$allowed_methods  = array("consultation", "contact","getInTouch");

if(!in_array($action, $allowed_methods)){
    echo "Sorry, no dice!";exit;
}
$resp["status"] = 0;
$resp["msg"] = "";

call_user_func($action);