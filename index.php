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

        switch ($requested_file) {
            case "":
                require_once('');
                break;
            case "backend/listing-form":
                require_once('backend/listing-form.php');
                break;
            case "backend/send-mail":
                require_once('backend/send-mail.php');
                break;
            default:
                header("HTTP/1.1 404 Not Found");
                echo "404 page not found";
                break;
        }     
     

?>