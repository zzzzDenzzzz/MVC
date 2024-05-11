<?php

function show($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function esc($string)
{
    return htmlspecialchars($string);
}

function redirect($path)
{
    header("Location: " . ROOT . "/" . $path);
    die;
}