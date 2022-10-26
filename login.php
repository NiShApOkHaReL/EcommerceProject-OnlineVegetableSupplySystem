<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/login.css">

</head>

<body>


    <div class="container">
        <!-- Container start-->
        <form class="form-login" action="" method="post">
            <!-- Form login starts-->
            <h2 class="form-login-heading"> Login </h2>
            <input type="text" class="form-control" name="admin_email" placeholder="Email Address" required>

            <input type="password" class="form-control" name="admin_pass" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">Log In </button>

            <h4 class="forgot-password">

                <a href="customer/change_password.php">Lost your password? Forgot Password </a>

            </h4>

        </form>

    </div>
</body>

</html>
