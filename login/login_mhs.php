<!DOCTYPE html>
<html class="" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/app.css">
    <meta class="foundation-mq">
</head>
<body class="authentication">
    <!-- <img src="../assets/img/logo.png" class="float-center" /> -->
    <div class="login-page">
        <div class="au-form">
            <form method="post" class="register-form" action="otentikasi_mhs.php">
                <h5> MASUK </h5>
                <label>NIU
                    <input name="username" type="text" class="form-control" placeholder="Username" required/>
                </label>
                <label>Password
                    <input name="password" type="password" class="form-control" placeholder="Password" required/>
                </label>
                <div class="expanded button-group">
                    <a class="button au-button third" href="forgot-password.html">Lupa Password?</a>
                    <input type="submit" class="button success" value="login">MASUK</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/foundation.js"></script>
</body>

</html>
