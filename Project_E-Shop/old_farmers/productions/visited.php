<?php
if (isset($_COOKIE['recent'])) {
    $history_size = $_COOKIE['recent'] + 1;
} else {
    $history_size = 1;
}

$page_titles = array($_GET["page_title"]);
$page_uris = array($_GET["page_uri"]);

for ($i = 0; $i < $history_size - 1; $i++) {
    $title_name = "page_title_" . $i;
    $uri_name = "page_uri_" . $i;
    $page_titles[] = $_COOKIE[$title_name];
    $page_uris[] = $_COOKIE[$uri_name];
}

for ($i = 0; $i < $history_size; $i++) {
    $title_name = "page_title_" . $i;
    $uri_name = "page_uri_" . $i;

    setcookie($title_name, $page_titles[$i], time() + (86400 * 30), "/");
    setcookie($uri_name, $page_uris[$i], time() + (86400 * 30), "/");
}

// save history size to cookie
setcookie('recent', $history_size, time() + (86400 * 30), "/");

print_r($_COOKIE);
?>
