<?php
session_start();
if (isset($_SESSION['id'])) {
	
	echo "<script>window.location='user.php'</script>";
}
 else{
	//echo "session expire pls login";
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
        background-image: url("");
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
        <form action="" method="post">
            <div id="loginForm">
                <h3>Log in</h3>
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required><br><br>
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required><br><br>
                <button type="submit" name="submit">Login</button>
            </div>
            
            </form>
        </div>
    </div>
    <script>
        function closeLoginPopup() {
            document.getElementById('popup').style.display = 'none';
            window.location='home.php';
        }
        document.addEventListener('DOMContentLoaded', function() {
            const showPopupButton = document.querySelector('.show-popup');
            const overlay = document.getElementById('overlay');
            const popup = document.getElementById('popup');
            const closePopupButton = document.getElementById('close-popup');

            showPopupButton.addEventListener('click', function() {
                overlay.style.display = 'block';
                popup.style.display = 'block';
            });

            closePopupButton.addEventListener('click', function() {
                overlay.style.display = 'none';
                popup.style.display = 'none';
            });
        });
    </script>
</body>
<html>
<?php
include "conn.php";
if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	// echo $pass;

	if ($username == '') {
		echo "Enter Username";
	} elseif ($password == '') {
		echo "Enter Password";
	} else {
		$query = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
		$res = mysqli_query($conn, $query) or die("query not run");

		$rowcount = mysqli_num_rows($res);
		$row = mysqli_fetch_array($res);
		// echo $row[name];
		// echo $row[email];
		// echo $row[id];
		if ($rowcount > 0) :
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			//   echo $_SESSION['id'];
			//   echo   $_SESSION['name'] ;
			echo "<script>alert ('Login successfully')</script>";
			echo "<script>window.location='user.php'</script>";
		else :
			echo "<script>alert ('Login failed:wrong username or password')</script>";


		endif;
	}
}

?>