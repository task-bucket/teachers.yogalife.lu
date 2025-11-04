<?php
    require_once('libraries/phpdotenv/vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    require_once('functions/sessions.php');

    //Protocol and Host
    $protocol = "https://";
    $host = $_SERVER['HTTP_HOST'];

    //Site URL
    $site_url = $protocol . $host;
    $cdn_url = $site_url . "/public";

    // Logging Errors & Warnings
    $error_log_path = 'error.log';
    ini_set('log_errors', 1); // Enable error logging
    ini_set('error_log', $error_log_path); // Set log file path
    ini_set('display_errors', 0); // Disable error display on screen
    ini_set('display_startup_errors', 0); // Disable startup errors on screen
    error_reporting(E_ALL);


    //Database Connection
    $servername = $_ENV['DB_HOST'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASS'];
    $database = $_ENV['DB_NAME'];

    try{
        $conn = new mysqli($servername, $username, $password, $database);
    } 
    catch(Exception $e){
        error_log("Database connection failed: " . $e->getMessage());
        die("Database Connection Failed! Please try again later.");
    }

    // Set session.gc_maxlifetime to 30 days
    ini_set('session.gc_maxlifetime', 30*24*60*60);

    // Set the custom session handler functions
    $handler = new TBSessionHandler($conn);
    session_set_save_handler($handler, true);
    session_start();
