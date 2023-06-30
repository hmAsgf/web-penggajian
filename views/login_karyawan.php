<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/style_login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
require_once "../controllers/loginController.php";
$loginC = new loginController();
?>
    <div class="card">
        <div class="card-content">
            <div class="card-title">
                <h3>KARYAWAN</h3>
            </div>
            <div class="card-title2">
                <h4>Sign in for work absence</h4>
            </div>
            <form method="post" class="form">
                <label class="user" style="padding-top: 13px;">Email</label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required/>
                <div class="form-border"></div>
                
                <label class="user-password" style="padding-top: 13px;">Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required/>
                <div class="form-border"></div>
                    <input onclick="login()" class="submit-btn" type="submit" name="submit" value="LOGIN">
            </form>
        </div>
    </div>

    <?php
    $loginC->login();
    ?>
    <script src="../js/login.js"></script>
</body>
</html>