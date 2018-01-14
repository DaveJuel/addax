<?php

/*
 * Live connection
 */
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
if (isset($url)&&isset($url["host"])&&isset($url["user"])) {
    $host = $url["host"];
    $db_user = $url["user"];
    $pass_phrase = $url["pass"];
    $db = substr($url["path"], 1);
} else {
    /*
     * Local connection
     */
    $host = "localhost";
    $db = "addax";
    $db_user = "root";
    $pass_phrase = "pesadev123";
}

