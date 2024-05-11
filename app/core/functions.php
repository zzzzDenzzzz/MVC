<?php

function show($data)
{
    echo "<pre>";
    var_dump($data);
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