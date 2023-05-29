<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="card">
        <div class="card-content">
            <div class="card-title">
                <h3>Lets's Get Started</h3>
            </div>
            <div class="card-title2">
                <h4>Sign in for work absence</h4>
            </div>
            <form method="post" class="form">
                <label class="user" style="padding-top: 13px;">Username</label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required/>
                <div class="form-border"></div>
                
                <label class="user-password" style="padding-top: 13px;">&nbsp; Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required/>
                <div class="form-border"></div>
                    <a href="">
                        <legend class="forgot-pass">Forget your password?</legend>
                    </a>
                    <input class="submit-btn" type="submit" name="submit" value="LOGIN">
            </form>
        </div>
    </div>
</body>
</html>