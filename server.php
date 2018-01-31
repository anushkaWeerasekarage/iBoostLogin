<?php

session_start();


$username = "";
$url = "";
$errors = array();

$conn = mysqli_connect('localhost', 'root', '', 'IBoostAssignment');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if(isset($_POST['change_password'])) {
    $old_password = mysqli_real_escape_string($conn, $_POST['password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $new_password2 = mysqli_real_escape_string($conn, $_POST['new_password2']);

    if($new_password != $new_password2) {array_push($errors, "Passwords do not match!");}
    if (empty($old_password) or empty($new_password) or empty($new_password2)) { array_push($errors, "Password is required"); }
  

      if(count($errors) == 0) {
          $query = "UPDATE Users SET Password='$new_password' WHERE Password='$old_password'";

          //$result = mysqli_query($conn, $query);
              if(mysqli_query($conn, $query)) {
                  header('location: index2.php');
            }
    
        }      
    }
  


  if(isset($_POST['signin_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    
    if(count($errors) == 0) {

        $query = "SELECT * FROM Users WHERE Username='$username' AND Password='$password'";
        $results = mysqli_query($conn, $query);

        if(mysqli_num_rows($results) == 1) {
            while($row = $results->fetch_assoc()){
            $_SESSION['username'] = $username;
            $url = $row['url'];
            $_SESSION['url'] = $url;
            header('location: index2.php');
            }
        }
        else {
			array_push($errors, "Wrong username/password combination");
		}
        }

    }
  


?>