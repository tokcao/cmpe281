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
                    page_title: 'apricots',
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
    <img class="card-img-top" src="../images/apricots.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Apricots</h5>
        <p class="card-text">In a 100-gram amount, raw apricots supply 48 Calories and are composed of 11%
            carbohydrates, 1% protein, less than 1% fat and 86% water
        </p>
        <a href="#" class="btn btn-primary">$16</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>