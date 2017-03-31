<?php
   ob_start();
   session_start();
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Team Poseidon</title>
        <link rel="stylesheet" href="resources/css/bootstrap/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="resources/css/signin.css" type="text/css" />

    </head>

    <body>
        <div class="container">

            <form class="form-signin" action="resources/fx_login.php" method="post">
                <h2 class="form-signin-heading">Team Poseidon Login</h2>
                <label for="inputusername" class="sr-only">Username</label>
                <input type="text" id="inputusername" name="username" class="form-control" placeholder="Username" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="userpassword" class="form-control" placeholder="Password" required="">
                <div class="checkbox">
                    <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div>
    </body>

    </html>
