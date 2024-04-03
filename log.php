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
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Popup Login Form Design | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  <style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  height: 100vh;
  width: 100%;
  background: linear-gradient(115deg, #ffc800 10%, #9f01ea 90%);

}
/* .show-btn{
  background: #fff;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 500;
  color: #3498db;
  cursor: pointer;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}*/
 .container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
} 

input[type="checkbox"]{
  display: none;
}
.container{
  display: block;
  background: #fff;
  width: 410px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
}
#show:checked ~ .container{
  display: block;
}
.container .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
}
.container .close-btn:hover{
  color: #3498db;
}
.container .text{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
}
.container form{
  margin-top: -20px;
}
.container form .data{
  height: 45px;
  width: 100%;
  margin: 40px 0;
}
form .data label{
  font-size: 18px;
}
form .data input{
  height: 100%;
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  border: 1px solid silver;
}
form .data input:focus{
  border-color: #3498db;
  border-bottom-width: 2px;
}
form .forgot-pass{
  margin-top: -8px;
}
form .forgot-pass a{
  color: #3498db;
  text-decoration: none;
}
form .forgot-pass a:hover{
  text-decoration: underline;
}
form .btn{
  margin: 30px 0;
  height: 45px;
  width: 100%;
  position: relative;
  overflow: hidden;
}
form .btn .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  z-index: -1;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  transition: all 0.4s;
}
form .btn:hover .inner{
  left: 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  background: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
}
form .signup-link{
  text-align: center;
}
form .signup-link a{
  color: #0f16eb;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
	  </style>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <!-- <label for="show" class="show-btn">View Form</label> -->
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close" id="popup" onclick="closeLoginPopup()"></label>
            <div class="text">
               Login Form
            </div>
            <form action="#" method="post">
               <div class="data">
                  <label>Username</label>
                  <input type="text" id="username" name="username">
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" id="password" name="password" required>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="submit">login</button>
               </div>
               <div class="signup-link">
                  Not a member? <a href="regi.php">Register now</a>
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
</html>
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