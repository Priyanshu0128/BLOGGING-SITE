<?php
session_start();
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$username = $_SESSION['username'];
	echo "<script>window.location='user.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>

    </title>
</head>
<style>
    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .overlay {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
    }

    /* Styles for the popup container */
    .popup-container {
        background-color: aqua;
        display: block;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        background: #c07eb2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    /* Styles for the form */
    #loginForm #registrationForm {
        text-align: center;
    }

    #loginForm #registrationForm input {
        display: block;
        width: 250px;
        margin: 10px 15px;
        padding: 10px;
        font-size: 1.3em;
        color: rgba(11, 177, 224, 0.82);
        outline: 2px solid #ffffff;

    }

    #loginForm #registrationForm button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }


    /* Show the overlay and popup when the button is clicked */
    .show-popup {
        display: block;
    }


    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>

<body>
    <div class="overlay" id="overlay">
        <div class="popup-container" id="popup">

        <span onclick="closeLoginPopup()" style="position: absolute; top: 10px; right: 10px; cursor: pointer;">&times;</span>
            <!-- <div id="loginForm"> -->
                <!-- <h3>Log in</h3> -->
                <!-- <input type="text" id="username" placeholder="Username" required><br><br>
                <input type="password" id="password" placeholder="Password" required><br><br>
                <button onclick="login()">Login</button>
                <button onclick="showRegistrationForm()">Register</button><br><br> -->
                <!-- <form action="/forgot-password" method="post">
      <input type="email" id="email" name="email" placeholder="Email address" style="display: none;">
      <button type="submit">Reset Password</button>
    </form> -->
            <!-- </div> -->
            <form action="" method="post">
            <div id="registrationForm">
                <h3>Register</h3>
                <input type="text"  name="username" id="regUsername" placeholder="Username" required><br><br>
                <input type="password" name="password"  id="regPassword" placeholder="Password" required><br><br>
                <input type="password" name="confpass"  id="rrp" placeholder="Re write Password" required /><br><br>
                <button type="submit" name="submit">Register</button>
                <div class="links">

                    <a style="color:white !important " class="right" href="login.php">Already User ? Login Here</a>
                    <div class="clear"></div>
                </div>
                
            </div>
            </form>
        </div>
    </div>
    <script>
        function closeLoginPopup() {
            document.getElementById('popup').style.display = 'none';
            window.location='home.php';
        }
    </script>
</body>
<html>
<?php
include "conn.php";
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confpass = $_POST['confpass'];
    if ($password != $confpass) {
        echo "<script>alert('Password not match')</script>";
    } else {
        $query1 = "SELECT * FROM `user` where `username`='$username'";
        $res = mysqli_query($conn, $query1) or die("query not run");
        $n = mysqli_num_rows($res);
        $row = mysqli_fetch_assoc($res);
        if ($n > 0) {
            echo "<script>alert('username Already Exist')</script>";
            // echo $row['email'];
        } else {
            $passwordHash = md5($_POST['password']);
            $query = "INSERT INTO `user`(`username`,`password`) VALUES ('$username','$passwordHash')";
            echo $query;
            $res = mysqli_query($conn, $query) or die("query not run");
            if ($res) :
                echo "<script>alert ('Registered successfully')</script>";
                echo "<script>window.location='login.php'</script>";
            else :
                echo "<script>alert ('Registration failed')</script>";

            endif;
        }
    }
}



?>