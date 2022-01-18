<?php
//Trước khi cho người dùng vào bên trong 
//phải kiểm tra thẻ làm việc
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: feed.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <main id="login">
        <div class="login__column">
            <img src="images/phoneImage.png" class="login__phone" />
        </div>
        <div class="login__column">
            <div class="login__box">
                <img src="images/loginLogo.png" class="login__logo" />
                <form action="feed.php" method="get" class="login__form">
                    <div class="error"></div>
                    <input type="text" name="email" placeholder="Enter your email" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <div class="button"><input type="submit" value="Log in" /></div>
                </form>
                <span class="login__divider">or</span>
                <a href="#" class="login__link">
                    <i class="fa fa-money"></i>
                    Log in with Facebook
                </a>
                <a href="#" class="login__link login__link--small">Forgot password</a>
            </div>
            <div class="login__box">
                <span>Don't have an account?</span> <a href="./index.php">Sign up</a>
            </div>
            <div class="login__box--transparent">
                <span>Get the app.</span>
                <div class="login__appstores">
                    <img src="images/ios.png" class="login__appstore" alt="Apple appstore logo" title="Apple appstore logo" />
                    <img src="images/android.png" class="login__appstore" alt="Android appstore logo" title="Android appstore logo" />
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2021 meta</span>
        </div>
    </footer>

    <script src="JS/login.js"></script>

</body>

</html>