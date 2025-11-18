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


    $sql = "SELECT * FROM teacher_applications WHERE slug='$requested_file'  AND approved = 1";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0){
        $slug = $requested_file;
        require_once('pages/teacher.php');
    }
    else{
        switch ($requested_file) {
            case "":
                require_once('pages/yogalife-teachers.php');
                break;
            case "teacher-form":
                require_once('pages/teacher-form.php');
                break;
            case "create-teacher":
                require_once('backend/create-teacher.php');
                break;
            case "read-teacher":
                require_once('backend/read-teacher.php');
                break;
            case "send-mail":
                require_once('backend/send-mail.php');
                break;
            default:
                header("HTTP/1.1 404 Not Found");
                echo "404 page not found";
                break;
        } 
    }

     
     
 

?>