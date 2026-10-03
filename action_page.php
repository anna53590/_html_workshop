<?php

$username = $_GET["username"] ?? "";
$show = $_GET["show"] ?? "";

$base = "https://api.github.com/users/" . urlencode($username);

if ($show == "followers") {
    $url = $base . "/followers";
}

if ($show == "repos") {
    $url = $base . "/repos";
}

if ($show == "events") {
    $url = $base . "/events/public";
}

if ($show == "gists") {
    $url = $base . "/gists";
}

echo $url;
?>