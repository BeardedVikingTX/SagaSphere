<?php
require_once __DIR__ . '/cookies.php';
require_once __DIR__ . '/config.php';

if (!isset($pageTitle)) {
    $pageTitle = "Nexora";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Security Headers -->
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
    <meta http-equiv="Permissions-Policy" content="geolocation=(), microphone=(), camera=()">

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Self-Hosted Google Fonts -->
    <style>
        @font-face {
            font-family: 'Orbitron';
            src: url('/assets/vendors/GoogleFonts/Orbitron/Orbitron-Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'Space Grotesk';
            src: url('/assets/vendors/GoogleFonts/Space_Grotesk/SpaceGrotesk-Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            src: url('/assets/vendors/GoogleFonts/Inter/Inter-Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'JetBrains Mono';
            src: url('/assets/vendors/GoogleFonts/JetBrains_Mono/JetBrainsMono-Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'IBM Plex Sans';
            src: url('/assets/vendors/GoogleFonts/IBM_Plex_Sans/IBMPlexSans-Regular.ttf') format('truetype');
        }
    </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/vendors/Bootstrap/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="/assets/vendors/FontAwesome/css/all.min.css">

    <!-- Main Theme -->
    <link rel="stylesheet" href="/assets/css/main.css">

</head>
<body>
