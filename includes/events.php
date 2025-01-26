<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            flex: 25%;
            max-width: 33.3%;
            padding: 0 4px;
            overflow: hidden;
        }

        .column img {
            margin-top: 8px;
            margin: 10px;
            vertical-align: middle;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s linear;
            overflow: hidden;
        }
        .column img{
            margin-bottom: 10px;
        }
        .column img:hover {
            transform: scale(1.04);
        }
        @media screen and (max-width: 800px) {
            .column {
                flex: 50%;
                max-width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                flex: 100%;
                max-width: 100%;
            }
            .column img {
                filter: grayscale(0) brightness(1);
            }
        }

    </style>
</head>

<body>
<!--    <div class="container mt-5">-->
<!--        <div class="row text-center mb-5 text-bold">-->
<!--            <h2 class="text-un">Special Events & News</h2>-->
<!--        </div>-->
<!--        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2">-->
<!---->
<!--            <div class="col mb-3">-->
<!--                <div class="card" data-aos="zoom-in" data-aos-duration="1000">-->
<!--                    <div class="view overlay">-->
<!--                        <img class="img-fluid" src="assets/images/news1.jpg" alt="Card image cap">-->
<!--                        <a href="#!">-->
<!--                            <div class="mask rgba-white-slight"></div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col mb-3">-->
<!--                <div class="card" data-aos="zoom-in" data-aos-duration="1000">-->
<!--                    <div class="view overlay">-->
<!--                        <img class="img-fluid" src="assets/images/news2.jpg" alt="Card image cap">-->
<!--                        <a href="#!">-->
<!--                            <div class="mask rgba-white-slight"></div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col mb-3">-->
<!--                <div class="card" data-aos="zoom-in" data-aos-duration="1000">-->
<!--                    <div class="view overlay">-->
<!--                        <img class="img-fluid" src="assets/images/news3.jpg" alt="Card image cap">-->
<!--                        <a href="#!">-->
<!--                            <div class="mask rgba-white-slight"></div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col mb-3">-->
<!--                <div class="card" data-aos="zoom-in" data-aos-duration="1000">-->
<!--                    <div class="view overlay">-->
<!--                        <img class="img-fluid" src="assets/images/news5.jpg" alt="Card image cap">-->
<!--                        <a href="#!">-->
<!--                            <div class="mask rgba-white-slight"></div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="container">-->
<!--            <div class="row" data-aos="zoom-in" data-aos-duration="1000">-->
<!--                <div class="col-12 col-md-12 px-5 text-center">-->
<!--                    <a class="btn btn-success mt-3 mb-4 px-5 py-2" href="contact.php">-->
<!--                        Learn More-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<div class="container">
    <div class="row text-center mb-5 text-bold mt-5 mb-5">
                 <h2 class="text-un">Special  News</h2>
                </div>
    <div class="row">
        <div class="column mx-2">
            <img src="assets/images/news5.jpg" />
            <img src="assets/images/news3.jpg" />
            <img src="assets/images/news2.jpg" />
        </div>  <div class="column mx-2">
            <img src="assets/images/news3.jpg" />
            <img src="assets/images/news2.jpg" />
            <img src="assets/images/news5.jpg" />
        </div>  <div class="column mx-2">
            <img src="assets/images/news6.jpg" />
            <img src="assets/images/news2.jpg" />
            <img src="assets/images/news1.jpg" />
        </div>

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 mt-5 mb-5 text-center justify-content-center align-items-center">
                <a href="contact.php" class="text-center py-3 px-5 border-0 btn btn-success">View Mores</a>
            </div>
        </div>
    </div>

</div>
</body>

</html>