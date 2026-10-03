<?php

$username = $_GET["username"] ?? "";
$show = $_GET["show"] ?? "";

echo "<h1>GitHub user: " . htmlspecialchars($username) . "</h1>";

if ($show == "followers") {
    echo "<h2>Followers</h2>";
}

if ($show == "repos") {
    echo "<h2>Repos</h2>";
}

if ($show == "events") {
    echo "<h2>Events</h2>";
}

if ($show == "gists") {
    echo "<h2>Gists</h2>";
}

?>