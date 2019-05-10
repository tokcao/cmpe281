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
                    page_title: 'apple',
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
    <img class="card-img-top" src="../images/apple.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Apple</h5>
        <p class="card-text">A typical apple serving weighs 242 grams and provides 126 calories with a moderate
            content of dietary fiber.Otherwise, there is generally low content of essential nutrients.</p>
        <a href="#" class="btn btn-primary">$10</a>

        <a href="../products.php" class="btn btn-primary">Other Products</a>
    </div>
</div>
</body>
</html>

