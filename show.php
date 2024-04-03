<?php
session_start();
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
  // echo $id;
  // echo $name;
} else {
  // echo "<script>window.location='login.php'</script>";
  echo " session not set";
}
include "conn.php";
$query = "SELECT * FROM blogname where user_id='$id' ORDER BY date DESC" ;
$res = mysqli_query($conn, $query) or die("query not run");
$n = mysqli_num_rows($res);
// echo $n;
// $row = mysqli_fetch_array($res);



?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>show user </title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <meta name="viewport" content="width = device-width initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" type="text/css" href="css/show_style.css">-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!--<link rel="stylesheet" type="text/css" href="css/utility.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <style>
    body{
      background-image: url("https://images.pexels.com/photos/129731/pexels-photo-129731.jpeg?auto=compress&cs=tinysrgb&w=800");
    }
    .card-title {
      margin-bottom: 0.75rem;
      height: 30px;
      overflow: hidden;
    }
    slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
    margin-left: auto;
    margin-right: auto;
    background-color: aquamarine;
}
        slick-slider .element {
    height: 100px;
    width: 100px;
    background-color: #000;
    color: #fff;
    border-radius: 5px;
    display: inline-block;
    margin: 0px 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 20px;
}

.slick-slider .slick-disabled {
    opacity: 0;
    pointer-events: none;

}

.slick-slider .element {
    height: 50px;
    width: 100px;
    background-color: white !important;
    color: #000 ! important;
    border-radius: 5px;
    display: inline-block;
    margin: 0px 0px !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: space-around;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 20px;
    margin-top: 20px !important;
}
.category {
    cursor: pointer;


}
span.ele:hover {

    background-color: black;
    color: gainsboro;

}

button.slick-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    border: none;
    font-size: 30px;
    padding-left: 10px;
    padding-right: 10px;
    color: #454545;
    margin-top: 0px;

}

button.slick-next {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    border: none;
    font-size: 30px;
    padding-left: 10px;
    padding-right: 10px;
    margin-top: 0px;
    color: #454545;
}
a {
    color: black;
    background-color: transparent;
    text-decoration: none !important;
}
a:hover{
    text-decoration: none !important;
    color: black ;
}
.img-size{
 width: 100%;
 
 object-fit:cover;
 
 border: 2px solid black;
        }

        .row {
       
            align-items: center;
            justify-content: start;

        }

        .card {
            width: 325px;
            flex: 1 1 50rem;
            margin: 45px auto;
            background: #fff;
            height: 90% !important;
            border-color: darkgray;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <img src="logo.png" class="logo" style="width: 100px;">
            <a class="nav-link active " aria-current="page" href="home.php" style="color:aliceblue"> Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active show-popup" aria-current="page" href="#">Log In</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;">

                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">

                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="show.php">My Blogs</a></li>
                            <!-- <li><a class="dropdown-item" href="changePass.php">Setting</a></li> -->
                            <li><a class="dropdown-item" href="home.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
  <div class="container-fluid">
    <div class="row">
    <?php while ($row = mysqli_fetch_assoc($res)) :
    ?>
        <div class="col-md-3 ">
        <a href="RCard.php?pid=<?php echo $row['id'] ?>" style="text-decoration:none;">
         <div class="card">
            <div class='img_wrapper'>
              <img src="uploads/<?php echo !empty ($row["image"])?$row['image']:'default.png' ?>" class="card-img-top show  img-size" alt="image not found">
            </div>
            <div class="card-body">
              <h3 class="card-category  "><?php echo $row['category'] ?></h3>
              <h4 class="card-title "><?php echo $row['title'] ?></h4>
              <p class="card-text"><?php echo $row["discription"] ?></p>
            </div>
            <div class="card-footer">
              <div class="DU_Button"> 
                <a href="delete.php?d_id=<?php echo $row["id"] ?>" class="btn btn-danger show" role="button">Delete</a>
               <span> <a href="update.php?u_id=<?php echo $row["id"] ?>" class="btn btn-primary show" role="button">Update</a></span>
              </div>
            </div>
            </div>
          
      </a>
        </div>

<?php

    endwhile;

?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
     
</script>
</body>

</html>