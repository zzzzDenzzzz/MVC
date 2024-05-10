<?php

function show($stuff)
{
    echo "<pre>";
    var_dump($stuff);
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