<html>
    <head>
        <!--Bootstrap-->
        <title>CeylonDew | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


        <!--Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@600&display=swap" rel="stylesheet">


        <!--Style link-->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="BG">
        <!--Navigation bar-->
        <?php include './navigation.php'; ?>

        <!--Active class adding to the navigation-->
        <script>
            document.getElementById("nav-menu1").classList.add("active", "navbtn");
        </script>

        <!--Owl carousel-->
        <div id="carouselExampleCaptions" class="carousel slide imageset" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/Colombo.jpg" class="response">
                    <h1 class="CarouselLable">Colombo the commercial capital in Sri Lanka</h1>
                </div>
                <div class="carousel-item">
                    <img src="Images/Dalada Maligawa.jpg" class="response">
                    <h1 class="CarouselLable">The Temple of the sacred tooth in Kandy</h1>
                </div>
                <div class="carousel-item">
                    <img src="Images/Elephants.jpg" class="response">
                    <h1 class="CarouselLable">Elephants in Sri Lanka</h1>
                </div>
                <div class="carousel-item">
                    <img src="Images/Galle.jpg" class="response">
                    <h1 class="CarouselLable">Galle is a city on the southwest coast of Sri Lanka</h1>
                </div>
                <div class="carousel-item">
                    <img src="Images/Negombo.jpg" class="response">
                    <h1 class="CarouselLable">Negombo is a city on the west coast of Sri Lanka</h1>
                </div>
                <div class="carousel-item">
                    <img src="Images/Segiriya Rock.jpg" class="response">
                    <h1 class="CarouselLable">Sigiriya or Sinhagiri is an ancient rock fortress</h1>
                </div>
                <div class="carousel-item">
                    <img src="Images/Yala.jpg" class="response">
                    <h1 class="CarouselLable">Yala is most known for the second largest national park in Sri Lanka</h1>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <div class="custom-shape-divider-bottom-1675852237 none">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>

        <!--Explore to Sri Lanka content-->
        <div class="container">
            <center>
                <div class="mb-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <img src="Images/sri lanka.jpg" class="explore img-fluid mt-5">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 class="contentheader mt-5">Explore holidays to Sri Lanka</h3>
                            <p class="text mt-4">Explore Holidays Sri Lanka offers cultural exploration and tailored travel experiences, with strong local relationships for a one-of-a-kind journey. Sri Lanka boasts an array of cultural and natural treasures, catering to various travel preferences, from adventurous escapades to tranquil getaways. Expect hassle-free and captivating experiences. Let us take you on a journey of a lifetime and create lasting memories with Explore Holidays Sri Lanka.</p>
                        </div>
                    </div>
                </div>
            </center>

            <hr>

            <!--Why travel with us content-->
            <center>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="contentheader mt-3">Why travel with us</h3> 
                    </div>
                </div>
            </center>
            <center>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img src="Images/Local Knowledge.png" class="box travelimgsize img-fluid color1 mt-5">
                        <p class="mt-2 text">Local Knowledge</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img src="Images/Exclusive Offers.png" class="box travelimgsize img-fluid color1 mt-5">
                        <p class="mt-2 text">Exclusive Offers</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img src="Images/Social Responsibility.png" class="box travelimgsize img-fluid color1 mt-5">
                        <p class="mt-2 text">Social Responsibility</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img src="Images/Trust & Safety.png" class="box travelimgsize img-fluid color1 mt-5">
                        <p class="mt-2 text">Trust & Safety</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img src="Images/Friendly.png" class="box travelimgsize img-fluid color1 mt-5">
                        <p class="mt-2 text">Friendly</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img src="Images/Experience.png" class="box travelimgsize img-fluid color1 mt-5">
                        <p class="mt-2 text">Experience</p>
                    </div>
                </div>
            </center>

            <hr>

            <!--Enjoy your tours content-->
            <center>
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="contentheader">Enjoy your tours with us</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 mt-5">
                        <img src="Images/Home/1.jpg" class="enjoy">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
                        <img src="Images/Home/2.jpg" class="enjoy">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 mt-5">
                        <img src="Images/Home/3.jpg" class="enjoy">
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-12 mt-5">
                        <img src="Images/Home/4.jpg" class="enjoy">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-9 col-md-9 col-sm-12 mt-5">
                        <img src="Images/Home/5.jpg" class="enjoy">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mt-5">
                        <img src="Images/Home/6.jpg" class="enjoy">
                    </div>
                </div>
            </center>

            <hr>

            <!--Discover Sri Lanka content-->
            <center>
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="contentheader">Discover Sri Lanka</h3>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
                        <div class="card">
                            <img src="Images/People.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title headerfont">People</h5>
                                <p class="card-text text">The main ethnic groups are the Sinhalese and Tamils, both originally from the Indian subcontinent. Then there are Muslims, who settled in the island from the time it became an ancient trading centre. Similarly, Malays and Chinese were also attracted to the island.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
                        <div class="card">
                            <img src="Images/Culture.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title headerfont">Culture</h5>
                                <p class="card-text text">Sri Lankan culture is best known abroad for its cricket, food, holistic medicine, religious icons like the Buddhist flag, and cultural exports such as tea, cinnamon and gems. Sri Lankan culture is diverse, as it varies from region to region. Sri Lanka has had ties with Indian subcontinent from ancient times.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
                        <div class="card">
                            <img src="Images/Environment.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title headerfont">The Environment</h5>
                                <p class="card-text text">Sri Lanka dry-zone dry evergreen forests are a tropical dry broadleaf , which, like the neighboring East Deccan dry evergreen forests of India's Coromandel Coast, is characterized by evergreen trees, rather than the dry-season deciduous trees that predominate in other tropical dry broadleaf.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

            <hr>

            <!--Top destinations content-->
            <center>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="contentheader">Top Destinations</h3> 
                    </div>
                </div>
            </center>
            <center>
                <div class="row mb-5">
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <img src="Images/1.jpg" class="box travelimgsize img-fluid">
                        <p class="mt-2 text">Sigiriya</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <img src="Images/2.jpg" class="box travelimgsize img-fluid">
                        <p class="mt-2 text">Kandy</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <img src="Images/3.jpg" class="box travelimgsize img-fluid">
                        <p class="mt-2 text">Galle</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <img src="Images/4.jpg" class="box travelimgsize img-fluid">
                        <p class="mt-2 text">Nuwara Eliya</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <img src="Images/5.jpg" class="box travelimgsize img-fluid">
                        <p class="mt-2 text">Anuradhapura</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <img src="Images/6.jpg" class="box travelimgsize img-fluid">
                        <p class="mt-2 text">Yala National Park</p>
                    </div>
                </div>
            </center>

        </div>

        <!--Footer-->
        <?php include './footer.php'; ?>
    </body>
</html>
