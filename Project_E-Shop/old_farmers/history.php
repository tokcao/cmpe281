<?php require_once('./farmer_navbar.php'); ?>
<html>

<body>
<div class="card-group">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Recently Viewed Fruits
        </div>
        <?php
        $history_size = 5;

        $page_titles = array();
        $page_uris = array();
        for ($i = 0; $i < $history_size; $i++) {
            $title_name = "page_title_" . $i;
            $uri_name = "page_uri_" . $i;
            $page_titles[] = $_COOKIE[$title_name];
            $page_uris[] = $_COOKIE[$uri_name];

            echo '<li class="list-group-item"><a href="' . $page_uris[$i] . '"><h2>' . $page_titles[$i] . '</h2></a></li>';
        }

        ?>
    </div>
</div>
</body>
</html>

