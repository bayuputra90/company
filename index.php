<?php
include 'koneksi_db.php';

$sql = "SELECT * FROM tbl_team";
$hasil = $koneksi->query($sql);

if ($hasil->num_rows > 0) {
    while ($data = $hasil->fetch_assoc()) {
        $dataTeam[] = $data;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- link owl carousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- link style -->
    <link rel="stylesheet" href="style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/RC.png" type="image/x-icon">
</head>

<body>
    <!-- section header -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.jpg" class="d-block w-100" alt="img/1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- sectio menu -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">PT. Saya Bisa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 me-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#carouselExampleCaptions">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link">Disabled</a>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- section about company -->
    <!-- about company1 -->
    <div id="about" class="container py-5">
        <div class="row">
            <div class="col-md-10">
                <h1 class="text-info">About Company</h1>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis eius ullam
                    veritatis a neque, minima nam maiores illum adipisci eaque molestias! Ut repellendus vel ullam
                    architecto sunt illo quia nisi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    nemo ducimus iure, tempora laboriosam laudantium eum sed quibusdam omnis eos exercitationem laborum
                    dolorum dignissimos, nesciunt, facere neque? Odio, similique omnis.</p>

                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex et ad iusto!
                    Molestias beatae saepe blanditiis consequuntur? Nostrum atque dolorum repellendus, eveniet maxime
                    voluptatem veritatis doloribus. Sequi ad iste beatae? Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Aut, magni. Illo repellat, suscipit placeat adipisci harum hic provident, maxime
                    asperiores, nobis eum eos enim tenetur. Provident eaque saepe commodi libero.</p>

                <button class="btn btn-outline-info btn-lg">Get In Touch</button>
            </div>

            <div class="col-md-2 text-center">
                <img src="img/source.gif" alt="" class="img-fluid">
                <i class="fa fa-globe fa-8x text-info "></i>
            </div>
        </div>
    </div>

    <!-- about company 2 -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/R0RDnsOE-Qw"
                        title="YouTube video player" frameborder="100"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-8">
                    <h2 class="text-info">Our Values</h2>
                    <p class="text-justify"><b>Visi : </b> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Ipsum, dolorem architecto molestiae ut harum voluptatibus, beatae aperiam tempora in consectetur
                        ducimus praesentium, doloremque quibusdam cupiditate est ea ratione quas. Maxime?</p>

                    <p class="text-justify"><b>Misi : </b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
                        rem soluta in molestias id accusantium commodi, quas illum quia debitis eos saepe, possimus hic
                        laboriosam doloremque sit sunt obcaecati ea. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Impedit earum accusantium, cumque quam id ipsa quo est at atque suscipit, totam tempore
                        magni dolores modi, quis ut autem minus aliquid.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- section Service -->
    <div id="service">
        <div class="container-fluid">
            <div class="container py-5 text-center text-white">
                <h2>Service</h2>
                <p>What wee offer?</p>
                <div class="row">
                    <div class="col">
                        <i class="fa fa-home fa-7x text-warning mb-2"></i>
                        <h3>Home</h3>
                        <p>We offer your properti</p>
                    </div>
                    <div class="col">
                        <i class="fa fa-lock fa-7x text-danger mb-2"></i>
                        <h3>Security</h3>
                        <p>We offer your properti</p>
                    </div>
                    <div class="col">
                        <i class="fa fa-leaf fa-7x text-light mb-2"></i>
                        <h3>Nature</h3>
                        <p>We offer your properti</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <i class="fa fa-clock fa-7x text-danger mb-2"></i>
                        <h3>Home</h3>
                        <p>We offer your properti</p>
                    </div>
                    <div class="col">
                        <i class="fa fa-laptop fa-7x text-success mb-2"></i>
                        <h3>Security</h3>
                        <p>We offer your properti</p>
                    </div>
                    <div class="col">
                        <i class="fa fa-dollar fa-7x text-warning mb-2"></i>
                        <h3>Nature</h3>
                        <p>We offer your properti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section portofolio -->
    <div class="container text-center py-5">
        <h2>Portofolio</h2>
        <p>What we have create</p>
        <div class="row mt-3">
            <div class="col">
                <div class="bg-success img-thumbnail">
                    <img src="img/1.jpg" alt="">
                    <h3 class="py-2">Jakarta</h3>
                    <p>Yes we have create in jakarta</p>
                </div>
            </div>
            <div class="col">
                <div class="bg-light img-thumbnail">
                    <img src="img/2.jpg" alt="">
                    <h3 class="py-2">Jakarta</h3>
                    <p>Yes we have create in jakarta</p>
                </div>
            </div>
            <div class="col">
                <div class="bg-secondary img-thumbnail">
                    <img src="img/3.jpg" alt="">
                    <h3 class="py-2">Jakarta</h3>
                    <p>Yes we have create in jakarta</p>
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="bg-info img-thumbnail">
                    <img src="img/1.jpg" alt="">
                    <h3 class="py-2">Jakarta</h3>
                    <p>Yes we have create in jakarta</p>
                </div>
            </div>
            <div class="col">
                <div class="bg-warning img-thumbnail">
                    <img src="img/2.jpg" alt="">
                    <h3 class="py-2">Jakarta</h3>
                    <p>Yes we have create in jakarta</p>
                </div>
            </div>
            <div class="col">
                <div class="bg-danger img-thumbnail">
                    <img src="img/3.jpg" alt="">
                    <h3 class="py-2">Jakarta</h3>
                    <p>Yes we have create in jakarta</p>
                </div>
            </div>

        </div>

        <a href="portofolio.html" class="btn btn-outline-info mt-5">View all..</a>
    </div>

    <!-- section our team -->
    <div class="container-fluid bg-warning text-center text-white py-5">
        <div class="container">
            <h2>Our Team</h2>
            <p>Who are They</p>
            <div class="owl-carousel owl-theme">
                <?php  
                    if (isset($dataTeam)) {
                        foreach ($dataTeam as $data) {
                ?>
                <div class="item">
                    <div class="bg-light text-dark">
                        <img src="panel/uploads/<?php echo $data['image'] ?>" width="75px" height="75px" alt="" class="img-fluid">
                        <h3 class="mt-3"><?php echo $data['nama'] ?></h3>
                        <p><?php echo $data['posisi'] ?></p>
                        <button class="btn btn-outline-info mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['id'] ?>">View Profile</button>
                    </div>
                </div>

                <?php
                        }
                    }
                ?>
            </div>

            <script>
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 20,
                    responsive: {
                        0: {
                            items: 1
                        },
                        450: {
                            items: 2
                        }, 
                        720: {
                            items: 3
                        },
                        1200: {
                            items: 5
                        }
                    },
                    nav: true
                })
            </script>
        </div>
    </div>

    <?php  
        if (isset($dataTeam)) {
            foreach ($dataTeam as $data) {
    ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 500px;">
                <div class="modal-header">
                    <img src="panel/uploads/<?php echo $data['image'] ?>" alt="" width="100%">

                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['nama'] ?></h5>
                    <p><?php echo $data['posisi'] ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
            }
        }
    ?>


    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 500px;">
                <div class="modal-header">
                    <img src="img/avatar.png" alt="" width="100%">

                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Jhon Doe</h5>
                    <p>Web Developer</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="dimas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 500px;">
                <div class="modal-header">
                    <img src="img/avatar.png" alt="" width="100%">

                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Mr Dimas</h5>
                    <p>Mobile Developer</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div> -->

    <!-- section pricing -->
    <div id="pricing" class="container text-center py-5">
        <h2>Pricing</h2>
        <p>Chose your method payment</p>
        <div class="row">
            <div class="col-3">
                <div class="border border-3 border-secondary">
                    <div class="bg-secondary text-light p-3">
                        <h1>BASIC</h1>
                    </div>
                    <div class="p-3">
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                    </div>
                    <div class="p-3 alert-secondary">
                        <h2>$50</h2>
                        <h5>Monthly</h5>
                        <button class="btn btn-outline-secondary">Sign Uo</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border border-3 border-warning">
                    <div class="bg-warning text-light p-3">
                        <h1>PRO</h1>
                    </div>
                    <div class="p-3">
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                    </div>
                    <div class="p-3 alert-warning">
                        <h2>$100</h2>
                        <h5>Monthly</h5>
                        <button class="btn btn-outline-warning">Sign Uo</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border border-3 border-info">
                    <div class="bg-info text-light p-3">
                        <h1>PREMIUM</h1>
                    </div>
                    <div class="p-3">
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                    </div>
                    <div class="p-3 alert-info">
                        <h2>$250</h2>
                        <h5>Monthly</h5>
                        <button class="btn btn-outline-info">Sign Uo</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border border-3 border-danger">
                    <div class="bg-danger text-light p-3">
                        <h1>PLATINUM</h1>
                    </div>
                    <div class="p-3">
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                        <p>Items $50</p>
                    </div>
                    <div class="p-3 alert-danger">
                        <h2>$500</h2>
                        <h5>Monthly</h5>
                        <button class="btn btn-outline-danger">Sign Uo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section footer` -->
    <footer class="container-fluid bg-dark text-white text-center py-5">
        <a href="#carouselExampleCaptions" class="text-info">
            <i class="fa fa-chevron-up fa-2x"></i>
        </a>
        <p class="mt-5">Copyright &copy; 2022 All Right Reserved.</p>
    </footer>
</body>

</html>