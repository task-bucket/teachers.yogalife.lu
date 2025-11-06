<?php
require_once('libraries/phpdotenv/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Protocol and Host
$protocol = "https://";
$host = $_SERVER['HTTP_HOST'];

// Site URL
$site_url = $protocol . $host;
$cdn_url = $site_url . "/public";

// Logging Errors & Warnings
$error_log_path = __DIR__ . '/error.log';  // safer absolute path
ini_set('log_errors', 1);
ini_set('error_log', $error_log_path);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// Database Connection
$servername = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($servername, $username, $password, $database);
} catch (Exception $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Database Connection Failed! Please try again later.");
}