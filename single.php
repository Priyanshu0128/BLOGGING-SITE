<?php
$id = $_GET['pid'];
include "conn.php";
$query = "SELECT * FROM post_blog where id=$id";
$res = mysqli_query($con, $query) or die("query not run");
$row = mysqli_fetch_assoc($res);
$category = $row['category'];
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
    <section>
    <div class="container-fluid my-3">
    <div class="row">
      <div class="col-sm-9 ">
        <div class="card mb-3">
          <div class="img"><img class="card-img-top" src="uploads/<?php echo  empty($row["image"]) ? 'default.png' : $row['image'] ?>" alt="Card image cap"></div>
          <div class="card-body">
            <h3 class="card-category"><?php echo $row['category'] ?></h3>
            <h4 class="card-title display-5"><?php echo $row['title'] ?></h4>
            <div class="card-text"><?php echo $row["discription"] ?></div>
            <p class="card-text mt-3"><small class="text-muted"><?php echo $row["date"]; ?></small></p>
          </div>
        </div>
      </div>
      <?php
      $query1 = "SELECT * FROM blog_name where category='$category'ORDER BY date DESC LIMIT 5 ";
      $res1 = mysqli_query($conn, $query1) or die("query not run");
      $n = mysqli_num_rows($res1);
      ?>
      <div class="col-sm-3 sidenav">
        <h5 class="display-5 heading">POPULAR ARTICLES</h5>
        <div class="row mt-3">
          <?php while ($row = mysqli_fetch_assoc($res1)) : ?>
            <div class="col col-md-4"><a href=".php?pid=<?php echo $row['id'] ?>"><img class="card-img-top  image " src="image/<?= !empty($row1["image"]) ? $row1["image"] : 'default.png' ?>" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h5 card-category  text-start text-secondary"><?php echo $row['category'] ?></h1>
              <h4 class="card-title h5"><?php echo $row['title'] ?></h4>
              <p class="card-text"><?php echo $row["discription"] ?></p>
              <p class="card-text"><small class="text-muted"><?php echo $row["date"]; ?></small></p>
              </a>
            </div>
            <!-- <hr> -->
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</body>
    </section>





</body>

</html>


<head>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<style>
		.desktop_menu {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			width: 100%;
		}

		.nevigation a.icon i.fa-bars {
			color: #fff !important;
			font-size: 20px;
			padding: 10px;
		}

		@media (max-width: 991px) {

			.desktop_menu {
				position: absolute;
				background: black;
				width: 200px;
				z-index: 1;
				top: 90px;
				right: 0px;
				left: auto;
			}

			.LO.btn:not(:disabled):not(.disabled) {
				cursor: pointer;
				background: transparent;
				border: none;
				font-size: 20px;
			}

			.btn:hover {
				color: white !important;
				/* background-color: var(--main-bg-color) !important; */
			}

			.desktop_menu ul li {
				margin-top: 9px !important;

			}

			.nav-right .btn {
				margin-left: 40px;
				margin-top: 4px;

			}

			div#hemburicon.show {
				display: block;
			}

			div#hemburicon {
				display: none;
			}

			.desktop_menu ul {
				display: block;
				margin: 0;
			}

			.fa {

				font-size: 30px;

			}
		}

		@media (min-width: 991px) {
			.nevigation a.icon i.fa-bars {
				display: none;
			}

			.nevigation a.icon i.fa-window-close {
				display: none;
			}
		}
	</style>
</head>

<body>
	
	<script>
		function myFunction() {
			const x = document.getElementById("hemburicon").classList
			x.toggle('show')
			const y = document.getElementById("MenuIcon").classList
			// fa-window-close
			if (x.contains('show')) {
				y.remove('fa-bars')
				y.add('fa-window-close')
			} else {
				y.remove('fa-window-close')
				y.add('fa-bars')
			}

		}
	</script>
</body>

</html>  <div class="container-fluid my-3">
    <div class="row">
      <div class="col-sm-9 ">
        <div class="card mb-3">
          <div class="img"><img class="card-img-top" src="image/bs7.jpg" alt="Card image cap"></div>
          <div class="card-body">
            <h3 class="card-category  display-5 text-start text-secondary">Business blogs</h3>
            <h4 class="card-title display-5">uyytuh</h4>
            <div class="card-text">uhitrerieth htirethirethjiet iirethjioretjrietj ijriejtfetjoerj jfkdjf okojoejrfoejfr</div>
            <p class="card-text mt-3"><small class="text-muted">2023-04-28</small></p>
          </div>
        </div>
      </div>
            <div class="col-sm-3 sidenav">
        <h5 class="display-5 heading">POPULAR ARTICLES</h5>
        <div class="row mt-3">
                      <div class="col col-md-4"><a href="./readcard_2.php?pid=36"><img class="card-img-top  image " src="image/bs7.jpg" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h5 card-category  text-start text-secondary">Business blogs</h1>
              <h4 class="card-title h5">uyytuh</h4>
              <p class="card-text">uhitrerieth htirethirethjiet iirethjioretjrietj ijriejtfetjoerj jfkdjf okojoejrfoejfr</p>
              <p class="card-text"><small class="text-muted">2023-04-28</small></p>
              </a>
            </div>
            <!-- <hr> -->
                      <div class="col col-md-4"><a href="./readcard_2.php?pid=35"><img class="card-img-top  image " src="image/bs7.jpg" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h5 card-category  text-start text-secondary">Business blogs</h1>
              <h4 class="card-title h5">fghfhfgh</h4>
              <p class="card-text">vbvbk gjorjo jtg tjoejtoetjoet jtoetrj oetjeo joewtrjoejtroewtrj  oewrjoejteotj roewro tjoew tooewtrjowrj oerowr ooerworo okjroewr o</p>
              <p class="card-text"><small class="text-muted">2023-04-25</small></p>
              </a>
            </div>
            <!-- <hr> -->
                      <div class="col col-md-4"><a href="./readcard_2.php?pid=33"><img class="card-img-top  image " src="image/bs3.avif" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h5 card-category  text-start text-secondary">Business blogs</h1>
              <h4 class="card-title h5">bussiness</h4>
              <p class="card-text">tyrytrgfhdhdf ghfgdh htgytuhj thfhtyut ghfgdhdhtyh ghjuyhkijyighjghyj jtgfggfhtyhtyu  hgfhyhttujjyj </p>
              <p class="card-text"><small class="text-muted">2023-04-24</small></p>
              </a>
            </div>
            <!-- <hr> -->
                      <div class="col col-md-4"><a href="./readcard_2.php?pid=34"><img class="card-img-top  image " src="image/bs8.jpg" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h5 card-category  text-start text-secondary">Business blogs</h1>
              <h4 class="card-title h5">utuyiyti</h4>
              <p class="card-text">tyuiyiyuiuyiyjhnbnvcgngdhbngh ujyiiiiiiiu y
fgrtyyyyyyyyyyyyyyyyyyyyyy
gbfdkjnihjwiruiwery89jfgnhuigigfng  ueh uwery8wruy uhuewhyuwy re8783y89 4hfejoa fiejfiehrfeh9 iuretrjti0u t</p>
              <p class="card-text"><small class="text-muted">2023-04-24</small></p>
              </a>
            </div>
            <!-- <hr> -->
                      <div class="col col-md-4"><a href="./readcard_2.php?pid=23"><img class="card-img-top  image " src="image/default.png" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h5 card-category  text-start text-secondary">Business blogs</h1>
              <h4 class="card-title h5">8otkgukg</h4>
              <p class="card-text">gjkk,m ju,vgnvbmvtyjjjjjjjjjjjjjjjjjjjjjdgfhhhhhhhhd</p>
              <p class="card-text"><small class="text-muted">2023-04-13</small></p>
              </a>
            </div>
            <!-- <hr> -->
                  </div>
      </div>
    </div>
  </div>
</body>