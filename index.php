//test
//test for branchTwo
<?php include('server.php') ?>
<html lang="en">
    <head>
        <title>iBoost Login Assignment - Anushka Weerasekarage</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
    </head>
    <body class="mainBody">
        <div class="loginForm">
            <div class="content">
                <h1>Sign In</h1>
                <form method="post" action="index.php">
                    <?php include('error.php') ?>
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <input type="submit" name="signin_user" value="LOGIN" />
                
                </form>
            </div>

        </div>

    </body>

</html>