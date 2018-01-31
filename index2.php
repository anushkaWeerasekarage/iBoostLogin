
<?php 
    session_start(); 
    if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
}
   //if(isset($_GET['password'])) {
        //header('location: password.php');
    //}

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
        <div class="topContent">
            <nav>
            
                <?php  if (isset($_SESSION['username'])) : ?>
                   <ul>
                        <li>Welcome         <strong><?php echo $_SESSION['username']; ?></strong>!</li>
                        <li><a href="password.php?password">Change Password</li>
                        <li><a href="index2.php?logout">SIGN OUT</a></li>  
                    </ul>
		        <?php endif ?>
            </nav>
        </div>
        <div class="bottomContent">
        
           
            <iframe src=<?php echo $_SESSION['url']; ?>></iframe>
        </div>

    </body>

</html>