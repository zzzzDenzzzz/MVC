<?php

if ($_SERVER["SERVER_NAME"] == "mvc") {
    define("DBNAME", "my_db");
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBDRIVER", "");

    define("ROOT", "http://mvc/public");
} else {
    define("DBNAME", "my_db");
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBDRIVER", "");

    define("ROOT", "https://www.mysyte.com");
}

define("APP_NAME", "My Website");
define("DEBUG", true);
