<?php
  
   // $base_url = "http://13.127.150.114/";

// utm data
session_set_cookie_params(0);
session_start();

if (isset($_GET['utm_source']) && !empty($_GET['utm_source'])) {
    $_SESSION['utm_source'] = isset($_GET['utm_source']) ? $_GET['utm_source'] : '';
    $_SESSION['utm_medium'] = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '';
    $_SESSION['utm_campaign'] = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '';
    $_SESSION['utm_term'] = isset($_GET['utm_source']) ? $_GET['utm_term'] : '';
    $_SESSION['utm_content'] = isset($_GET['utm_source']) ? $_GET['utm_content'] : '';
}

	
    if (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') {
        header('Location: http'.(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 's':'').'://' . substr($_SERVER['HTTP_HOST'], 4).$_SERVER['REQUEST_URI']);
        exit;
    }

?>