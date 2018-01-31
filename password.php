<?php include('server.php') ?>
<?php 
    //session_start(); 
    if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
    }
    ?>
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
                <h1>Change Password</h1>
                <form method="post" action="password.php">
                    <?php include('error.php') ?>
                <input type="password" name="password" placeholder="Old Password" />
                <input type="password" name="new_password" placeholder="New Password" />
                <input type="password" name="new_password2" placeholder="Confirm New Password" />
                <input type="submit" name="change_password" value="SUBMIT" />
                
                </form>
            </div>

        </div>

    </body>

</html>