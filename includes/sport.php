<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
    <style>
        .title {

            margin-bottom: 50px;
        }

        .card-block {
            font-size: 1em;
            position: relative;
            margin: 0;
            padding: 1em;
            border: none;
            box-shadow: none;

        }

        .card {
            font-size: 1em;
            overflow: hidden;
            padding: 5;
            border: none;
            border-radius: .28571429rem;
            box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
            margin-top: 20px;
        }

        .carousel-indicators li {
            border-radius: 12px;
            width: 12px;
            height: 12px;
            background-color: #404040;
        }

        .carousel-indicators li {
            border-radius: 12px;
            width: 12px;
            height: 12px;
            background-color: #404040;
        }

        .carousel-indicators .active {
            background-color: white;
            max-width: 12px;
            margin: 0 3px;
            height: 12px;
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
        }

        lex-direction: column;
        }

        .btn {
            margin-top: auto;


        }

    </style>
</head>

<body>


<div class="wrapper-grey padded">
    <div class="container">
        <h2 class="text-center">Your next trip</h2>
        <div class="col-xs-12 col-sm-4">
            <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i1.wp.com/handluggageonly.co.uk/wp-content/uploads/2015/05/IMG_2813-s.jpg?w=1600&ssl=1');">
                <div class="card-category">City</div>
                <div class="card-description">
                    <h2>home</h2>
                    <p>Lovely house</p>
                </div>
                <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true">
                <a class="card-link" href="#" ></a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i0.wp.com/handluggageonly.co.uk/wp-content/uploads/2016/04/IMG_5589.jpg?w=1600&ssl=1');">
                <div class="card-category">City</div>
                <div class="card-description">
                    <h2>home</h2>
                    <p>Lovely house</p>
                </div>
                <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true">
                <a class="card-link" href="#" ></a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i0.wp.com/handluggageonly.co.uk/wp-content/uploads/2016/03/Positano-Weather.jpg?w=1600&ssl=1');">
                <div class="card-category">City</div>
                <div class="card-description">
                    <h2>Home</h2>
                    <p>Lovely house</p>
                </div>
                <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true">
                <a class="card-link" href="#" ></a>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>




</body>

</html>