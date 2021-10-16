<?php

if (!isset($title)) {
    $title = "Default Title";
}
?>

<html>
    <head>
        <title><?php echo $title; ?> | My Site</title>

        <link rel="stylesheet" href="dist/css/main.css" />
    </head>

    <body>

        <nav>
            <ul>
                <li><a href="index.php">Index</a></li>
                <li><a href="form.php">Contact US</a></li>
                <li><a href="page2.php">Page 2</a></li>
            </ul>
        </nav>