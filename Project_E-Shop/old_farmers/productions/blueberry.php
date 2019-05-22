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
                    page_title: 'blueberry',
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
    <img class="card-img-top" src="../images/blueberry.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Blackberry</h5>
        <p class="card-text">Blueberries consist of 14% carbohydrates, 0.7% protein, 0.3% fat and 84% water</p>
        <a href="#" class="btn btn-primary">$11</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>