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
                    page_title: 'asian_pear',
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
    <img class="card-img-top" src="../images/asian_pear.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Asian Pear</h5>
        <p class="card-text">Raw pear is 84% water, 15% carbohydrates and contains negligible protein and fat
        </p>
        <a href="#" class="btn btn-primary">$9</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>