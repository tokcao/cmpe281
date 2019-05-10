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
                    page_title: 'grapefruit',
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
    <img class="card-img-top" src="../images/grapefruit.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Grapefruit</h5>
        <p class="card-text">Grapefruit is a rich source of vitamin C (>20% of the Daily Value, DV in a 100 gram
            serving), contains the fiber pectin,and the pink and red hues contain the beneficial antioxidant
            lycopene.</p>
        <a href="#" class="btn btn-primary">$7</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>