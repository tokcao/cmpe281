
<?php
$posted = false;
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'farmer' && $password == 'farmer') {
        $_SESSION['user'] = $username;
        header("location: ./farmerDashboard.php");
    } else if ($username == 'cityman' && $password == 'cityman') {
        $_SESSION['user'] = $username;
        heardr("location: ./cityview.html");
    } else {
        $posted = true;
    }
}
if ($posted) {
    echo "<script type='text/javascript'>alert('Incorrect username or password');</script>";
}
?>

<body>
<form class="form-signin" action="" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label>UserName</label>
    <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter Password" name="password" required>
    <button class="btn btn-lg btn-primary btn-block siginbutton" type="submit">Sign in</button>
</form>

<div class="adminName">
    <p> User Name: farmer</p>
    <p>Password: farmer</p>
</div>
</body>