
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalawana National School</title>
    <link rel="icon" sizes="512x512" href="assets/images/logo.png">
    <!-- magnific-popup css cdn link  -->    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/ajx.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        *{

            font-family: Arial, Helvetica, sans-serif;
            text-transform: capitalize;
            transition:all 0.4s cubic-bezier(.34,1.12,.68,1.31);
        }

        .gallery{
            /*min-height: 100vh;*/
            background: #e8edef;
            padding-bottom: 60px;
        }

        .gallery .controls{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding:20px 0;
            list-style: none;
        }

        .gallery .controls .buttons{
            height:40px;
            background:#fff;
            padding-left:40px ;
            padding-right: 40px;
            color:#666;
            font-size: 20px;
            line-height: 40px;
            cursor: pointer;
            margin:20px;
            box-shadow: 0 3px 5px rgba(0,0,0,.3);
            text-align: center;
        }

        .gallery .controls .buttons.active{
            background: #4eb84b;
            color:#fff;
        }

        .gallery .image-container{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .gallery .image-container .image{
            height:250px;
            width: 350px;
            overflow: hidden;
            box-shadow: 0 3px 5px rgba(0,0,0,.3);
            margin: 20px;
        }

        .gallery .image-container .image img{
            height: 100%;
            width:100%;
            object-fit: cover;
        }

        .gallery .image-container .image:hover img{
            transform: scale(1.1);
        }
    </style>

</head>
<body>
<?php
require_once "./includes/nav.php";
require_once "./includes/new_slider.php";



?>

<div class="gallery">

    <ul class="controls">
        <li class="buttons active" data-filter="all">all</li>
        <li class="buttons" data-filter="ice-cream">House Meet</li>
        <li class="buttons" data-filter="chocolate">Morning Asembly</li>
        <li class="buttons" data-filter="cake">Festivals</li>
        <li class="buttons" data-filter="juice">Buildings</li>
    </ul>

    <div class="image-container">

        <a href="images/ice-cream1.jpg" class="image ice-cream">
            <img src="./assets/images/house1.jpg" alt="">
        </a>
        <a href="images/ice-cream2.jpg" class="image ice-cream">
            <img src="./assets/images/house2.jpg" alt="">
        </a>
        <a href="images/ice-cream2.jpg" class="image ice-cream">
            <img src="./assets/images/house3.jpg" alt="">
        </a>
        <a href="images/ice-cream3.jpg" class="image chocolate">
            <img src="./assets/images/ass1.jpg" alt="">
        </a>

        <a href="images/chocolate1.jpg" class="image chocolate">
            <img src="./assets/images/ass2.jpg" alt="">
        </a>
        <a href="images/chocolate2.jpg" class="image chocolate">
            <img src="./assets/images/ass3.jpg" alt="">
        </a>

        <a href="images/cake1.jpg" class="image cake">
            <img src="./assets/images/s1.jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image cake">
            <img src="./assets/images/s2.jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image cake">
            <img src="./assets/images/s3.jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image cake">
            <img src="./assets/images/s4.jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image juice">
            <img src="./assets/images/2022-03-07.jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image juice">
            <img src="./assets/images/banner21.jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image juice">
            <img src="./assets/images/2022-03-07 (1).jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image juice">
            <img src="./assets/images/2022-03-07 (2).jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image juice">
            <img src="./assets/images/2021-10-21.jpg" alt="">
        </a>
        <a href="images/cake2.jpg" class="image juice">
            <img src="./assets/images/93166691_1550695835085661_482727497704669184_n.jpg" alt="">
        </a>

    </div>

</div>




<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>

    $(document).ready(function(){

        $('.buttons').click(function(){

            $(this).addClass('active').siblings().removeClass('active');

            var filter = $(this).attr('data-filter')

            if(filter == 'all'){
                $('.image').show(400);
            }else{
                $('.image').not('.'+filter).hide(200);
                $('.image').filter('.'+filter).show(400);
            }

        });

        $('.gallery').magnificPopup({

            delegate:'a',
            type:'image',
            gallery:{
                enabled:true
            }

        });

    });

</script>

<?php
    require_once "./includes/footer.php";

?>

</body>
</html>