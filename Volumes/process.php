<?php

    $message = $_POST["message"];

    $file = scandir("./messages");
    $num_files = count($file) - 2; // . e ..

    $fileName = "msg-{$num_files}.txt";

    $file = fopen("./messages/{$fileName}", "x");

    fwrite($file, $message);
    fclose($file);

    header("Location: index.php");