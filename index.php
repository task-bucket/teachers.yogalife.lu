<?php
    
    require_once('config.php');


    //Routing
    $request_url = $_SERVER['REQUEST_URI'];
    $query_string = explode('?', $request_url);
    if(count($query_string) - 1){
        $query =  $query_string[1];
    }
    $requested_file =  rtrim($query_string[0],'/\\');
    $requested_file =  ltrim($requested_file,'/\\');

    if(str_starts_with($requested_file, "listing/")){
        // Remove "listing/" prefix
        $afterPrefix = substr($requested_file, strlen("listing/"));
        $parts = explode("/", $afterPrefix);
        $listingId = intval($parts[0]);

        if($listingId > 0 && (count($parts) === 1 || $parts[1] === '')) {
            require_once('pages/single-listing.php');
        } 
        else{
            echo "404 page not found";
        }
    }
    else{
        switch ($requested_file) {
        case "":
            require_once('pages/home.php');
            break;
        case "listing":
            require_once('pages/listing.php');
            break;
        case "sellx":
            require_once('pages/sell.php');
            break;
        case "about":
            require_once('pages/about.php');
            break;
        case "contact":
            require_once('pages/contact.php');
            break;
        case "login":
            require_once('pages/login.php');
            break;
        case "my-profile":
            require_once('pages/my-profile.php');
        case "taskbucket-api/crm/create-message":
            require_once('taskbucket-api/crm/create-message.php');
            break;
        case "taskbucket-api/upload-files":
            require_once('taskbucket-api/upload-files.php');
            break;
        case "taskbucket-api/ai/process-sell-image":
            require_once('taskbucket-api/ai/process-sell-image.php');
            break;

        default:
            header("HTTP/1.1 404 Not Found");
            echo "404 page not found";
            break;
    }
    
}


?>