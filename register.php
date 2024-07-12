<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Ocean</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/d.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <?php
                        function displayError($fieldName)
                        {
                            if (!empty($_SESSION["errors"][$fieldName])) {
                                echo "<small style='color:red;'>" . $_SESSION["errors"][$fieldName] . "</small>";
                            }
                        }
                        ?>
                        <h3 class="mb-4 text-center">Welcome, Sing up and Join Us</h3>
                        <?php
                        if (isset($_GET["msg"]) && $_GET["msg"] == 'ar') {
                        ?>
                            <div class="alert alert-warning" role="alert">
                                <strong>Warning</strong> You are Already Registered, Please <a href="index.php">Login</a>!
                            </div>





                        <?php
                        }
                        ?>



                        <form action="handel_register.php" class="signin-form" method="POST">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Name">
                                <small style='color:white' ;> <?php if (isset($_SESSION["errors"]["name"])) echo $_SESSION["errors"]["name"]; ?> </small>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email">
                                <small style='color:white' ;> <?php if (isset($_SESSION["errors"]["email"])) echo $_SESSION["errors"]["email"]; ?> </small>
                            </div>
                            <div class="form-group">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                                <small style='color:white' ;> <?php if (isset($_SESSION["errors"]["phone"])) echo $_SESSION["errors"]["phone"]; ?> </small>
                            </div>
                            <div class="form-group">

                                <input name="pw" id="password-field" type="password" class="form-control" placeholder="Password">
                                <small style='color:white' ;> <?php if (isset($_SESSION["errors"]["password"])) echo $_SESSION["errors"]["password"]; ?> </small>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">

                                <input name="pc" id="password-field" type="password" class="form-control" placeholder="password confirmation">
                                <small style='color:white' ;> <?php if (isset($_SESSION["errors"]["password_confirmation"])) echo $_SESSION["errors"]["password_confirmation"]; ?> </small>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">

                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

<?php
$_SESSION["errors"] = null;
?>