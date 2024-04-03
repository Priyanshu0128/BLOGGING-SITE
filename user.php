<?php
include "conn.php";
$query = "SELECT * FROM blogname ORDER BY date DESC ";
$res = mysqli_query($conn, $query) or die("query not run");
$n = mysqli_num_rows($res);
// echo $n;
// $row = mysqli_fetch_array($res);
?>
<?php
include "conn.php";
$query = "SELECT * FROM blogname ORDER BY date DESC ";
$res = mysqli_query($conn, $query) or die("query not run");
$n = mysqli_num_rows($res);
// echo $n;
// $row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width = device-width initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    
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
        .slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
    margin-left: auto;
    margin-right: auto;
    
}
        .slick-slider .element {
    height: 100px;
    width: 100px;
    background-color: #ffc800;
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
    font-style:oblique; 
    background: linear-gradient(115deg, #ff8400 40%, orange 60%);
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
    font-size: 22px;
    margin-top: 2px !important;
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

       

        /* Show the overlay and popup when the button is clicked */
        .show-popup {
            display: block;
        }


        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url("https://images.pexels.com/photos/129731/pexels-photo-129731.jpeg?auto=compress&cs=tinysrgb&w=800");
        }
        .img-size{
 
 object-fit:cover;
 
 border: 2px solid black;
        }
        .row {
            /* display: flex; */
            align-items: center;
            justify-content: start;

        }

        .card {
            width: 330px;
            flex: 1 1 21rem;
            margin: 45px auto;
            background: #fff;
            height: 90% !important;
            border-color: darkgray;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }
        .card-body{
       background-image: url("https://images.unsplash.com/photo-1614850523060-8da1d56ae167?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlnaHQlMjBjb2xvdXJ8ZW58MHx8MHx8fDA%3D&w=1000&q=80");
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <img src="logo.png" class="logo" style="width: 100px;">
            <!-- <a class="nav-link active " aria-current="page" href="home.php" style="color:aliceblue"> Home</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active show-popup" aria-current="page" href="logout.php" style="font-style:oblique; font-size:22px;"><b>Log Out</b></a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="width: 40px;">
 
                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink"  >

                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="show.php">My Blogs</a></li>
                            <!-- <li><a class="dropdown-item" href="changePass.php">Setting</a></li> -->
                            <!-- <li><a class="dropdown-item" href="logout.php">Log Out</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="cont mx-2">
		<div class="slick-slider" style="background-color:#ff7d00ab;">
        <div class="element element-1 category"><span class="ele"><b>All blogs</b></span></div>
        <div class="element element-2 category"><span class="ele"><b>Sports blogs</b></span></div>
        <div class="element element-3 category"><span class="ele"><b>Technology blogs</b></span></div>
        <div class="element element-4 category"><span class="ele"><b>Music blogs</b></span></div>
        <div class="element element-5 category"><span class="ele"><b>Environment blogs</b></span></div>
        <div class="element element-6 category"><span class="ele"><b>Food blogs</b></span></div>
            <button type="button" class="slick-prev slick-disabled" style="display: block;"> &lt; </button>
            <button type="button" class="slick-next" style="display: block;"> &gt; </button>
		</div>
    </div>
    <section>
        <div class="container-fluid card_wrapper">
            <div class="row">
                <?php
                $sql = "SELECT * FROM blogname ";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) { ?>

                    <div class="col-md-3">
                        <a href="readc2.php?pid=<?php echo $row['id'] ?>" style="text-decoration:none;">
                            <div class="card ">
                                <img src="uploads/<?= !empty($row["image"]) ? $row["image"] : '21.jpeg' ?>" class="card-img-top img_wrapper  img-size" alt="...">
                                <div class="card-body">
                                    <h5 class="card-category "><?php echo $row['category'] ?></h5>
                                    <h3 class="card-title "><?php echo $row['title'] ?></h3>
                                    <p class="card-text"><?php echo $row['discription'] ?></p>
                                    <small class="text" style="color:#000" >Date : <?php echo $row['date'] ?></small>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
  
        <script>


$(document).ready(function() {
            $('.category').on("click", function() {

                let selVal = $(this).text()
                console.log(selVal)
                $.ajax({
                    type: "POST",
                    url: "searchBlog.php",
                    data: {
                        "category": selVal
                    },
                    success: function(response) {
                        let res = JSON.parse(response)
                        $('.card_wrapper .row ').empty()
                            $.each(res.posts, (i, val) => {
                                $('.card_wrapper .row').append(` 
                                
                                    <div class="col-md-3">
                                        <a href="readc2.php?pid=${val.id}"> 
                                            <div class="card">
                                                <img src="uploads/${val.image!==null?val.image:'default.png'}" class="card-img-top img_wrapper img-size" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-category "> ${val.category}</h5>
                                                    <h3 class="card-title ">${val.title}</h3>
                                                    <p class="card-text">${val.discription}</p>
                                                    <small class="text-muted">${val.date}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>`
                                )
                            })
                           
                    }
                });
            })
        });
            $(".slick-slider").slick({
                slidesToShow: 5,
                infinite: false,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                dots: false,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"> < </button>',
                nextArrow: '<button type="button" class="slick-next"> > </button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            document.querySelector(".slick-prev").innerHTML = `<i class="fa fa-angle-left" aria-hidden="true"></i>`;
            document.querySelector(".slick-next").innerHTML = `<i class="fa fa-angle-right" aria-hidden="true"></i>`;
        </script>
</body>

</html>