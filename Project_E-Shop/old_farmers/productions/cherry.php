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
                    page_title: 'cherry',
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
<div class="card" style="width: 18rem; height:400px">
    <img class="card-img-top" src="../images/cherry.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Cherry</h5>
        <p class="card-text">Raw sweet cherries are 82% water, 16% carbohydrates, 1% protein, and negligible in
            fat</p>
        <a href="#" class="btn btn-primary">$12</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>