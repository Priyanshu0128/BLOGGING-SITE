<?php
include "conn.php";
$query = "SELECT * FROM blog_name where id='$id'" ;
$res = mysqli_query($conn, $query) or die("query not run");
$n = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show user </title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/show_style.css">
  <link rel="stylesheet" type="text/css" href="css/utility.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <style>
        .card-title {
            margin-bottom: 0.75rem;
            height: 30px;
            overflow: hidden;
        }

        .mainDropdown {

            left: auto !important;
            right: 0px;

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
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;">

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
    <div class="row my-3 container-fluid">
<?php 
while($row=mysqli_fetch_assoc($res)){?>

  <div class="col-md-4">
  <a href="home.php?id=<?php echo $row['id'] ?>">
    <div class="card">
        <img src="uploads/<?= !empty($row["image"]) ? $row["image"] : '21.jpeg' ?>" class="card-img-top" alt="...">
        <div class="card-body">
                <h3 class="card-title "><?php echo $row['title'] ?></h3>
                <p class="card-text"><?php echo $row['discription'] ?></p>
                <h5 class="card-category "><?php echo $row['category'] ?></h5>
                <small class="text-muted">Date : <?php echo $row['date'] ?></small>
                <div class="DU_Button"> 
                <a href="delete.php?d_id=<?php echo $row["id"] ?>" class="btn btn-danger show" role="button">Delete</a>
               <span> <a href="update.php?u_id=<?php echo $row["id"] ?>" class="btn btn-primary show" role="button">Update</a></span>
              </div>
            </div>
        </div>
        </a>
    </div>

<?php
}
?>
 </div>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Retrieve form data using $_POST superglobal

    //     $title = $_POST["title"];
    //     $discrip = $_POST["discription"];
    //     $category = $_POST["category"];
    //     $cdate = $_POST["date"];
    //     //.?
    //     // Retrieve uploaded image information using $_FILES superglobal
    //     $image = $_FILES["imgage"];

    //     // Check if an image was uploaded and process it

    //     // if ($image["error"] == UPLOAD_ERR_OK) {
    //     $image_name = $image["name"];
    //     $image_tmp_name = $image["tmp_name"];

    //     // Move the uploaded image to a desired location
    //     move_uploaded_file($image_tmp_name, "uploads/" . $image_name);

    //     // Display the submitted data and the uploaded image

    //     // echo "<div style='border: 1px solid black; width:640px; margin-left:1%  '> ";
    //     echo "<div class='container-fluid my-3' >";
    //     echo "<div class='card  ' style='width: 18rem;'>";
    //     echo "<img src='uploads/$image_name' class='card-img-top' alt='...''>";
    //     echo "<div class='card-body'>";
    //     echo "<h5 class='card-title'>$title</h5>";
    //     echo  "<p class='card-text' style='text-align:justify;'>$discrip</p>";
    //     echo  "<p class='card-text'>$category</p>";
    //     echo  "<p class='card-text'>$cdate</p>";
    //     echo "<div class='card-footer'>";

    //     echo "<div class='DU_Button'>";
    //     echo  "<a href='delete.php' class='btn btn-danger show' role='button'>Delete</a>";

    //     echo  "<span><a href='update.php' class='btn btn-danger show' role='button'>Update</a></span>";
    //     echo "</div>";
    //     echo "</div>";
    //     // <a href="#" class="btn btn-primary">Go somewhere</a>
    //     echo "</div>";
    //     echo "</div>";
    //     echo "</div>";
    //     // echo "<img src='uploads/$image_name' alt='Uploaded Image' style='height:350px; width:350'>";
    //     // echo "<b><h3>$</h3></b>";
    //     // echo "<p></p>";
    //     // echo "<p>$category</p>";
    //     // echo "<h5>$cdate</h5>";
    //     // echo "</div>";
    //     //     } else {
    //     //         echo "<p>No image uploaded or an error occurred.</p>";
    //     //     }
    // }
    // //else {
    // //     echo "<p>No form data submitted.</p>";
    // // }
    ?>



    <script>
        // let blogs = [];

        // function createBlog(){
        // const title = document.getElementById('blogTitle').value;
        //     const content = document.getElementById('blogContent').value;
        //     const name = document.getElementById('Cr1').value;
        //     const date = document.getElementById('d1').value;
        // blogs.push({ title, content, name, date});
        // document.getElementById('blogTitle').value = '';
        // document.getElementById('blogContent').value = '';
        // document.getElementById('Cr1').value='';
        // document.getElementById('d1').value='';
        // renderBlogs();
        // }
        //          function renderBlogs() {
        //          const blogsDiv = document.getElementById("blogs");
        //     blogsDiv.innerHTML = "";
        //     for (let i = 0; i < blogs.length; i++) {
        //       const blogDiv = document.createElement("div");
        //       blogDiv.id = `blog_${i}`;
        //       blogDiv.innerHTML = `
        //         <h3 class="title">${blogs[i].title}</h3>
        //         <p class="content" style="text-align: justify;">${blogs[i].content}</p>
        //         <span>${blogs[i].name}</span><br>
        //         <span>${blogs[i].date} </span><br><br>

        //       `;
        //       blogsDiv.appendChild(blogDiv);
        //     }

        // }
        //const urlParams=[];

        // const urlParams = new URLSearchParams(window.location.search);

        //         // Get the values from the query parameters

        //         const title = urlParams.get('blogTitle');
        //        const  content = urlParams.get('blogContent');
        //       const   name = urlParams.get('Cr1');
        //      const    date = urlParams.get('d1');
        //         // Display the values on the page
        //         document.getElementById('outputTitle').textContent = title;
        //         document.getElementById('outputContent').textContent = content;
        //         document.getElementById('outputCr1').textContent = name;
        //         document.getElementById('outputd1').textContent = date;
        // window.onload = function () {
        //     var url = document.location.href,
        //         params = url.split('?')[1].split('&'),
        //         data = {}, tmp;
        //     for (var i = 0, l = params.length; i < l; i++) {
        //          tmp = params[i].split('=');
        //          data[tmp[0]] = tmp[1];
        //     }
        //     document.getElementById('blogs').innerHTML = data.name;
        // } 
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
