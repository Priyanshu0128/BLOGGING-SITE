<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width = device-width initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        /* @media screen and  (max-width: 768px){
        .col-md-9,
        .col-md-3{
            width: 100% !important;
        }
} */
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
                            <li><a class="dropdown-item" href="#">Data Science</a></li>
                            <li><a class="dropdown-item" href="#">Programming</a></li>
                            <li><a class="dropdown-item" href="#">AI/ML</a></li>
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
    <section>
        <div class="container-fluid">
            <div class=" row row-cols-3 gy-3 my-2">
                <!-- <div class="col-4"> -->
                <div class="card ">
                    <img src="https://media.istockphoto.com/id/1477183258/photo/woman-holding-ai-icons-with-laptop.webp?b=1&s=170667a&w=0&k=20&c=QzpARW6X0LSjBDOzNSjtyjUbwYV3uyJh3cDP_0z_-9M=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tech</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1408387701/photo/social-media-marketing-digitally-generated-image-engagement.webp?b=1&s=170667a&w=0&k=20&c=udzg1fifSWZqXvkBJyEAPe2iFGiEi9NxasBCpBAdogo=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Data</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="col-4"> -->
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1477858506/photo/news-online-in-phone-reading-newspaper-from-website-digital-publication-and-magazine-mockup.webp?b=1&s=170667a&w=0&k=20&c=G9EGbIPr1D59b_dSdrFYKXt5pC402U_NAWFefHjk-BM=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Program</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://media.istockphoto.com/id/811268074/photo/laptop-computer-desktop-pc-human-hand-office-soft-focus-picture-vintage-concept.webp?b=1&s=170667a&w=0&k=20&c=tXdCfDzuDTUnxnZKwhWx5B0yJwbw7mVpku60ldp0844=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Coding</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- </div>
        <div class="col-4"> -->
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1352603244/photo/shot-of-an-unrecognizable-businessman-working-on-his-laptop-in-the-office.webp?b=1&s=170667a&w=0&k=20&c=cae8s_ncw2axGBVrD5vJR6DBqmVbQkKfAP1ecKUvQzQ=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Analysis</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1456701233/photo/close-up-happy-asian-girl-influencer-wear-headphone-with-guitar-record-podcast-onair-online.webp?b=1&s=170667a&w=0&k=20&c=gkANsDSJcHi9JgMjH1Gr41iPf0BYNhkxC8Tq_SVBC-w=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Others</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- </div> -->

            </div>
        </div>
    </section>
</body>

</html>