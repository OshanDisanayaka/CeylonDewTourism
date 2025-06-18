<html>
    <head>
        <!--Bootstrap-->
        <title>CeylonDew | Gallery</title>
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

                                    <!-- magnific-popup css cdn link  -->
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
                                        </head>
                                        <body class="BG">
                                            <!--Navigation bar-->
                                            <?php include './navigation.php'; ?>


                                            <!--Active class adding to the navigation-->
                                            <script>
                                                document.getElementById("nav-menu3").classList.add("active", "navbtn");
                                            </script>

                                            <!--Gallery image content-->
                                            <div class="carousel slide imageset" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="Images/Gallery.jpg" class="response">
                                                            <h1 class="CarouselLable">Gallery</h1>
                                                    </div>
                                                </div>
                                                <div class="custom-shape-divider-bottom-1675852237 none">
                                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                                                        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                                                        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                                                    </svg>
                                                </div>
                                            </div>


                                            <!--Gallery content-->
                                            <div class="gallery container">
                                                <ul class="controls">
                                                    <li class="buttons active headerfont" data-filter="all">All</li>
                                                    <li class="buttons headerfont" data-filter="Ella">Ella</li>
                                                    <li class="buttons headerfont" data-filter="Sigiriya">Sigiriya</li>
                                                    <li class="buttons headerfont" data-filter="Kandy">Kandy</li>
                                                    <li class="buttons headerfont" data-filter="Galle">Galle</li>
                                                    <li class="buttons headerfont" data-filter="NuwaraEliya">Nuwara Eliya</li>
                                                    <li class="buttons headerfont" data-filter="OurClients">Our Clients</li>
                                                </ul>
                                                <div class="image-container">
                                                    <a href="Images/Gallery/Ella1.jpg" class="image Ella"><img src="Images/Gallery/Ella1.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Ella2.jpg" class="image Ella"><img src="Images/Gallery/Ella2.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Ella3.jpg" class="image Ella"><img src="Images/Gallery/Ella3.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Ella4.jpg" class="image Ella"><img src="Images/Gallery/Ella4.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Ella5.jpg" class="image Ella"><img src="Images/Gallery/Ella5.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Ella6.jpg" class="image Ella"><img src="Images/Gallery/Ella6.jpg" alt=""></a>

                                                    <a href="Images/Gallery/Sigiriya1.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya1.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Sigiriya2.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya2.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Sigiriya3.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya3.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Sigiriya4.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya4.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Sigiriya5.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya5.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Sigiriya6.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya6.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Sigiriya7.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya7.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Sigiriya8.jpg" class="image Sigiriya"><img src="Images/Gallery/Sigiriya8.jpg" alt=""></a>

                                                    <a href="Images/Gallery/Kandy1.jpg" class="image Kandy"><img src="Images/Gallery/Kandy1.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Kandy2.jpg" class="image Kandy"><img src="Images/Gallery/Kandy2.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Kandy3.jpg" class="image Kandy"><img src="Images/Gallery/Kandy3.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Kandy4.jpg" class="image Kandy"><img src="Images/Gallery/Kandy4.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Kandy5.jpg" class="image Kandy"><img src="Images/Gallery/Kandy5.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Kandy6.jpg" class="image Kandy"><img src="Images/Gallery/Kandy6.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Kandy7.jpg" class="image Kandy"><img src="Images/Gallery/Kandy7.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Kandy8.jpg" class="image Kandy"><img src="Images/Gallery/Kandy8.jpg" alt=""></a>

                                                    <a href="Images/Gallery/Galle1.jpg" class="image Galle"><img src="Images/Gallery/Galle1.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Galle2.jpg" class="image Galle"><img src="Images/Gallery/Galle2.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Galle3.jpg" class="image Galle"><img src="Images/Gallery/Galle3.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Galle4.jpg" class="image Galle"><img src="Images/Gallery/Galle4.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Galle5.jpg" class="image Galle"><img src="Images/Gallery/Galle5.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Galle6.jpg" class="image Galle"><img src="Images/Gallery/Galle6.jpg" alt=""></a>

                                                    <a href="Images/Gallery/NuwaraEliya1.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya1.jpg" alt=""></a>
                                                    <a href="Images/Gallery/NuwaraEliya2.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya2.jpg" alt=""></a>
                                                    <a href="Images/Gallery/NuwaraEliya3.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya3.jpg" alt=""></a>
                                                    <a href="Images/Gallery/NuwaraEliya4.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya4.jpg" alt=""></a>
                                                    <a href="Images/Gallery/NuwaraEliya5.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya5.jpg" alt=""></a>
                                                    <a href="Images/Gallery/NuwaraEliya6.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya6.jpg" alt=""></a>
                                                    <a href="Images/Gallery/NuwaraEliya7.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya7.jpg" alt=""></a>
                                                    <a href="Images/Gallery/NuwaraEliya8.jpg" class="image NuwaraEliya"><img src="Images/Gallery/NuwaraEliya8.jpg" alt=""></a>

                                                    <a href="Images/Gallery/Client1.jpg" class="image OurClients"><img src="Images/Gallery/Client1.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client2.jpg" class="image OurClients"><img src="Images/Gallery/Client2.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client3.jpg" class="image OurClients"><img src="Images/Gallery/Client3.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client4.jpg" class="image OurClients"><img src="Images/Gallery/Client4.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client5.jpg" class="image OurClients"><img src="Images/Gallery/Client5.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client6.jpg" class="image OurClients"><img src="Images/Gallery/Client6.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client7.jpg" class="image OurClients"><img src="Images/Gallery/Client7.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client8.jpg" class="image OurClients"><img src="Images/Gallery/Client8.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client9.jpg" class="image OurClients"><img src="Images/Gallery/Client9.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client10.jpg" class="image OurClients"><img src="Images/Gallery/Client10.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client11.jpg" class="image OurClients"><img src="Images/Gallery/Client11.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client12.jpg" class="image OurClients"><img src="Images/Gallery/Client12.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client13.jpg" class="image OurClients"><img src="Images/Gallery/Client13.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client14.jpg" class="image OurClients"><img src="Images/Gallery/Client14.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client15.jpg" class="image OurClients"><img src="Images/Gallery/Client15.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client16.jpg" class="image OurClients"><img src="Images/Gallery/Client16.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client17.jpg" class="image OurClients"><img src="Images/Gallery/Client17.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client18.jpg" class="image OurClients"><img src="Images/Gallery/Client18.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client19.jpg" class="image OurClients"><img src="Images/Gallery/Client19.jpg" alt=""></a>
                                                    <a href="Images/Gallery/Client20.jpg" class="image OurClients"><img src="Images/Gallery/Client20.jpg" alt=""></a>
                                                </div>
                                            </div>

                                            <!-- jquery cdn link  -->
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                                            <!-- magnific popup js cdn link  -->
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


                                            <script>
                                                $(document).ready(function () {

                                                    $('.buttons').click(function () {

                                                        $(this).addClass('active').siblings().removeClass('active');

                                                        var filter = $(this).attr('data-filter')

                                                        if (filter == 'all') {
                                                            $('.image').show(400);
                                                        } else {
                                                            $('.image').not('.' + filter).hide(200);
                                                            $('.image').filter('.' + filter).show(400);
                                                        }

                                                    });

                                                    $('.gallery').magnificPopup({

                                                        delegate: 'a',
                                                        type: 'image',
                                                        gallery: {
                                                            enabled: true
                                                        }

                                                    });

                                                });
                                            </script>

                                            <!--Footer-->
                                            <?php include './footer.php'; ?>
                                        </body>
                                        </html>
