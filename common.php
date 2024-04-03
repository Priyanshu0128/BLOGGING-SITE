<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="home.css">

    <meta name="viewport" content="width = device-width initial-scale=1.0">
<!--     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style> 
    
        @media screen and (max-width: 768px) {
            /* Adjustments for small screens */


            /* Adjust the card layout for small screens */
            .row-cols-3 .card {
                flex-basis: calc(100% - 20px);
                /* Two cards per row with spacing */
            }

            /* Adjust the logo size for small screens */
            .logo {
                width: 50px;
            }
        }
        /* div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
} */

/* div.scrollmenu .card {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
} */

/* div.scrollmenu a:hover {
  background-color: #777;
} */

        /* .expanded-card {
            flex-basis: calc(100% - 20px); /* Expanded card takes full width */
        /* order: -1; Expanded card goes first in the layout */
        /* } */
        /* .vertical-cards {
            flex-direction: column;
        } */
        /* .col-9 { */
        /* flex: 0 0 100%; Adjust the width as needed */
        /* } */
        /*  */
        /* CSS fo/r vertically arranged cards */
        /* .vertical-card { */
        /* flex: 0 0 100%; Full width */
        /* } */
        /* Add more responsive styles here as needed */


        close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .overlay {
            display: none;
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
            display: none;
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
</head>

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
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; display: none;">

                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">

                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="myBlog.php">My Blogs</a></li>
                            <li><a class="dropdown-item" href="changePass.php">Setting</a></li>
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
                            Nature
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
</body>
</html>