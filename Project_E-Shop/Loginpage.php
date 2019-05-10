<?php
$posted = false;
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'farmer' && $password == 'farmer') {
        $_SESSION['user'] = $username;
        header("location: ./farmers/farmerDashboard.php");
    } else if ($username == 'cityman' && $password == 'cityman') {
        $_SESSION['user'] = $username;
        header("location: ./cityview.html");
    } else {
        $posted = true;
    }
}
if ($posted) {
    echo "<script type='text/javascript'>alert('Incorrect username or password');</script>";
}
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>E-Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<form class="form-signin" action="" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label>UserName</label>
    <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter Password" name="password" required>
    <button class="btn btn-lg btn-primary btn-block siginbutton" type="submit">Sign in</button>
</form>

<div class="loginName">
    <p> User Name: farmer/cityman</p>
    <p>Password: farmer/cityman</p>

</div>
</body>