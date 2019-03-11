<?php 
    // Set security headers 
	header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
	header("X-XSS-Protection: 1; mode=block");
    header("Content-Security-Policy: default-src 'self'; script-src 'self' https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline'; font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com; img-src 'self' data: https://www.googletagmanager.com https://www.google-analytics.com; connect-src https://www.google-analytics.com
    ");
	header("X-Powered-By: tinyFluffyKittens");
	header("X-Frame-Options: deny");
	header("X-Content-Type-Options: nosniff");
	header("Referrer-Policy: strict-origin");
    header("Feature-Policy: accelerometer 'none'; camera 'none'; geolocation 'none'; gyroscope 'none'; magnetometer 'none'; microphone 'none'; payment 'none'; usb 'none'");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="all.min.css">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#A12192">
    <link rel="manifest" href="./site.webmanifest">
    <meta name="msapplication-TileColor" content="#A12192">
    <meta name="theme-color" content="#ffffff">
    <link rel="canonical" href="<?php echo $canonUrl; ?>"/>
    <meta name="description" content="<?php echo $metaDesc; ?>">
    <title><?php echo $pageTitle; ?></title>