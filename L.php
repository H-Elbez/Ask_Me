<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
                    <link rel="icon" type="image/png" href="picture/logo.png">
        <title>Login</title>
        <link rel="stylesheet" href="L.css">
    </head>
    <?php
 include "includes/header.php";
 ?>
    <body>
        <body>
            <div class="login">
                <div class="login-screen">
                    <div class="app-title">
                        <h1>Login</h1>
                    </div>
                    <div class="login-form">
                        <form class="login-form" method="post" action="includes/login.inc.php">
                            <div class="control-group">
                                <input type="text" name="Name" class="login-field" value="" placeholder="username" id="login-name">
                                <label class="login-field-icon fui-user" for="login-name"></label>
                            </div>
                            <div class="control-group">
                                <input type="password" name="Pass" class="login-field" value="" placeholder="password" id="login-pass">
                                <label class="login-field-icon fui-lock" for="login-pass"></label>
                            </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </body>
</html>
