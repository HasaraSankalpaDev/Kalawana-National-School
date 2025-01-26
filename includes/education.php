<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/style.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="container" >
        <h2 class="text-center text-un mt-5 mb-5" data-aos="zoom-in" data-aos-duration="1000">
            Education Facilities
        </h2>
        <div id="myCarousel" class="owl-carousel owl-theme my-3" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card shadow my-3">
                <img src="assets/images/012.jfif" class="card-img-top" height="300" alt="Image 1" />
                <div class="card-body">
                <h5 class="card-title">Science Sec<i class="fa-solid fa-flask text-end f-icon "></i></h5>
                </div>
            </div>
            <div class="card shadow my-3">
                <img src="assets/images/sel.jfif" class="card-img-top" alt="Image 2" height="300" />
                <div class="card-body">
                <h5 class="card-title">Sinhala Sec<i class="fa-solid fa-language text-end f-icon "></i></h5>
                </div>
            </div>
            <div class="card shadow my-3">
                <img src="assets/images/agri.webp" class="card-img-top" alt="Image 2" height="300" />
                <div class="card-body">
                <h5 class="card-title">Agri Sec<i class="fa-solid fa-wheat-awn text-end f-icon "></i></h5>
                </div>
            </div>
            <div class="card shadow my-3">
                <img src="assets/images/gini.jfif" class="card-img-top" alt="Image 2" height="300" />
                <div class="card-body">
                <h5 class="card-title">ART Sec<i class="fa-solid fa-palette text-end f-icon "></i></h5>
                </div>
            </div>
            <div class="card shadow my-3">
                <img src="assets/images/04.jpg" class="card-img-top" alt="Image 2" height="300" />
                <div class="card-body">
                    <h5 class="card-title">IT Section<i class="fa-solid fa-computer text-end f-icon "></i></h5>


                </div>
            </div>
            
            <!-- Add more cards as needed -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myCarousel').owlCarousel({
                items: 3, // Number of cards shown in each slide
                loop: true, // Continuously loop the carousel
                margin: 20, // Space between cards
                nav: true, // Show navigation buttons
                navText: [

                ], // Custom navigation icons
                responsive: {
                    0: {
                        items: 1, // Number of cards shown in the carousel for smaller screens
                    },
                    768: {
                        items: 2, // Number of cards shown in the carousel for medium screens
                    },
                    992: {
                        items: 3, // Number of cards shown in the carousel for large screens
                    },
                },
            });
        });
    </script>
</body>

</html>