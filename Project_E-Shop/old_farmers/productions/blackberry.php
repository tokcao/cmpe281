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
                    page_title: 'blackberry',
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
    <img class="card-img-top" src="../images/blackberry.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Blackberry</h5>
        <p class="card-text">Cultivated blackberries are notable for their significant contents of dietary
            fiber, vitamin C, and vitamin K</p>
        <a href="#" class="btn btn-primary">$10</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>