<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
  .mainDiv {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    background-color: #f9f9f9;
    font-family: 'Open Sans', sans-serif;
  }

  .cardStyle {
    width: 500px;
    border-color: white;
    background: #fff;
    padding: 36px 0;
    border-radius: 4px;
    margin: 30px 0;
    box-shadow: 0px 0 2px 0 rgba(0, 0, 0, 0.25);
  }

  #signupLogo {
    max-height: 100px;
    margin: auto;
    display: flex;
    flex-direction: column;
  }

  .formTitle {
    font-weight: 600;
    margin-top: 20px;
    color: #2F2D3B;
    text-align: center;
  }

  .inputLabel {
    font-size: 12px;
    color: #555;
    margin-bottom: 6px;
    margin-top: 24px;
  }

  .inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
  }

  input {
    height: 40px;
    font-size: 16px;
    border-radius: 4px;
    border: none;
    border: solid 1px #ccc;
    padding: 0 11px;
  }

  input:disabled {
    cursor: not-allowed;
    border: solid 1px #eee;
  }

  .buttonWrapper {
    margin-top: 40px;
  }

  .submitButton {
    width: 70%;
    height: 40px;
    margin: auto;
    display: block;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }

  .submitButton:disabled,
  button[disabled] {
    border: 1px solid #cccccc;
    background-color: #cccccc;
    color: #666666;
  }

  #loader {
    position: absolute;
    z-index: 1;
    margin: -2px 0 0 10px;
    border: 4px solid #f3f3f3;
    border-radius: 50%;
    border-top: 4px solid #666666;
    width: 14px;
    height: 14px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <img src="logo.png" class="logo" style="width: 100px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active show-popup" aria-current="page" href="#">Log In</a>
          </li>
          <li class="nav-item dropdown">
            <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;">

            <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="home.php">Home</a></li>
              <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
              <li><a class="dropdown-item" href="myBlog.php">My Blogs</a></li>
              <li><a class="dropdown-item" href="#">Setting</a></li>
              <li><a class="dropdown-item" href="home.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown1">
        <ul class="navbar-nav" style="
        justify-content: flex-start;
        width: 100%;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sports
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="sportsblog.php">Cricket</a></li>
              <li><a class="dropdown-item" href="sportsblog.php">FootBall</a></li>
              <li><a class="dropdown-item" href="sportsblog.php">Hockey</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Technology
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="techblog.php">Data Science</a></li>
              <li><a class="dropdown-item" href="techblog.php">Programming</a></li>
              <li><a class="dropdown-item" href="techblog.php">AI/ML</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Music
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Classical</a></li>
              <li><a class="dropdown-item" href="#">Romantic</a></li>
              <li><a class="dropdown-item" href="#">DJ</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Environment
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="enviroblog.php">Mountains</a></li>
              <li><a class="dropdown-item" href="enviroblog.php">River</a></li>
              <li><a class="dropdown-item" href="enviroblog.php">Lake</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="mainDiv">
    <div class="cardStyle">
      <form action="" method="post" name="signupForm" id="signupForm">

        <img src="change.jpeg" id="signupLogo" />

        <h2 class="formTitle">
          Change Your Password
        </h2>

        <div class="inputDiv">
          <label class="inputLabel" for="password">New Password</label>
          <input type="password" id="password" name="password" required>
        </div>

        <div class="inputDiv">
          <label class="inputLabel" for="confirmPassword">Confirm Password</label>
          <input type="password" id="confirmPassword" name="confirmPassword">
        </div>

        <div class="buttonWrapper">
          <button type="submit" id="submitButton" class="submitButton pure-button pure-button-primary" onclick="change()">
            Change Password
            <!-- <span id="loader"></span> -->
          </button>
        </div>

      </form>
    </div>
  </div>
  <script>
    function change() {
      alert("Password Change Successfully");
    }
  </script>

</body>

</html>