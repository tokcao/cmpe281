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
                    page_title: 'strawberry',
                    page_uri: window.location.pathname
                },
                function (returned_data) {
                    // document.getElementById("his").innerText = returned_data;
                }
            );
        });
    </script>
</head>

<body>
<div class="card" style="width: 18rem; height:550px">
    <img class="card-img-top" src="../images/strawberries.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Strawberry</h5>
        <p class="card-text">One serving (100g) of strawberries contains approximately 33
            kilocalories, is an excellent source of vitamin C, a good source of manganese, and provides several
            other vitamins and dietary minerals in lesser amounts.
        </p>
        <a href="#" class="btn btn-primary">$18</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>