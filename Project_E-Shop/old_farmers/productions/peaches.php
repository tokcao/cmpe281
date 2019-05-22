<?php require_once('./navbar_copy.php'); ?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        jQuery(function () {
            jQuery.get(
                './visited.php',
                {
                    page_title: 'peaches',
                    page_uri: window.location.pathname
                },
                function (returned_data) {
                    //alert(returned_data);
                }
            );
        });
    </script>
</head>

<body>
<div class="card" style="width: 18rem; height:500px">
    <img class="card-img-top" src="../images/peaches.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Peaches</h5>
        <p class="card-text">A medium peach, weighing 100 g (3.5 oz), contains small amounts of essential
            nutrients, but none is a significant proportion of the Daily Value
        </p>
        <a href="#" class="btn btn-primary">$7</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>