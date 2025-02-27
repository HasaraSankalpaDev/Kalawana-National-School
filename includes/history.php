<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body{
            margin-top:20px;
            background:#eee;
        }

        .timeline {
            width: 100%;
            position: relative;
            padding: 1px 0;
            list-style: none;
            font-weight: 500
        }

        .timeline .timeline-item {
            padding-left: 0;
            padding-right: 30px
        }

        .timeline .timeline-item.timeline-item-right,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left) {
            padding-left: 30px;
            padding-right: 0
        }

        .timeline .timeline-item .timeline-event {
            width: 100%
        }

        .timeline:before {
            border-right-style: solid
        }

        .timeline:before,
        .timeline:after {
            content: " ";
            display: block
        }

        .timeline:after {
            clear: both
        }

        .timeline:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 50%;
            height: 100%!important;
            margin-left: 2px;
            border-right-width: 4px;
            border-right-style: solid;
            border-right-color: rgba(52, 40, 104, .1)
        }

        .timeline .timeline-label .label {
            background-color: #e76c90;
            border-radius: 35px;
            color: #fff;
            display: inline;
            font-size: .85rem;
            font-weight: 600;
            line-height: 1;
            padding: .65rem 1.4rem;
            text-align: center;
            vertical-align: baseline;
            white-space: nowrap
        }

        .timeline.timeline-line-solid:before {
            border-right-style: solid
        }

        .timeline.timeline-line-dotted:before {
            border-right-style: dotted
        }

        .timeline.timeline-line-dashed:before {
            border-right-style: dashed
        }

        .timeline .timeline-item {
            position: relative;
            float: left;
            clear: left;
            width: 50%;
            margin-bottom: 20px
        }

        .timeline .timeline-item:before,
        .timeline .timeline-item:after {
            content: "";
            display: table
        }

        .timeline .timeline-item:after {
            clear: both
        }

        .timeline .timeline-item:last-child {
            margin-bottom: 0!important
        }

        .timeline .timeline-item.timeline-item-right>.timeline-event,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left)>.timeline-event {
            float: right!important
        }

        .timeline .timeline-item.timeline-item-right>.timeline-event:before,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left)>.timeline-event:before,
        .timeline .timeline-item.timeline-item-right>.timeline-event:after,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left)>.timeline-event:after {
            right: auto!important;
            border-left-width: 0!important
        }

        .timeline .timeline-item.timeline-item-right>.timeline-event:before,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left)>.timeline-event:before {
            left: -15px!important;
            border-right-width: 15px!important
        }

        .timeline .timeline-item.timeline-item-right>.timeline-event:after,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left)>.timeline-event:after {
            left: -14px!important;
            border-right-width: 14px!important
        }

        .timeline .timeline-item>.timeline-event:before {
            top: 10px;
            right: -15px;
            border-top: 15px solid transparent;
            border-left-width: 15px;
            border-left-style: solid;
            border-right-width: 0;
            border-right-style: solid;
            border-bottom: 15px solid transparent
        }

        .timeline .timeline-item>.timeline-event:after {
            top: 11px;
            right: -14px;
            border-top: 14px solid transparent;
            border-left-width: 14px;
            border-left-style: solid;
            border-right-width: 0;
            border-right-style: solid;
            border-bottom: 14px solid transparent
        }

        .timeline .timeline-item>.timeline-point {
            top: 25px
        }

        .timeline .timeline-item:nth-of-type(2) {
            margin-top: 40px
        }

        .timeline .timeline-item.timeline-item-left,
        .timeline .timeline-item.timeline-item-right {
            clear: both!important
        }

        .timeline .timeline-item.timeline-item-right,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left) {
            float: right;
            clear: right
        }

        .timeline .timeline-item.timeline-item-right>.timeline-point,
        .timeline .timeline-item:nth-of-type(even):not(.timeline-item-left)>.timeline-point {
            left: -14px
        }

        .timeline .timeline-item>.timeline-event {
            position: relative;
            float: left
        }

        .timeline .timeline-item>.timeline-event:before {
            border-left-color: rgba(52, 40, 104, .04);
            border-right-color: rgba(52, 40, 104, .04)
        }

        .timeline .timeline-item>.timeline-event:after {
            border-left-color: rgba(52, 40, 104, .04);
            border-right-color: rgba(52, 40, 104, .04)
        }

        .timeline .timeline-item>.timeline-event:before,
        .timeline .timeline-item>.timeline-event:after {
            content: "";
            display: inline-block;
            position: absolute
        }

        .timeline .timeline-item>.timeline-point {
            color: #5d5386;
            background: #5d5386;
            right: -14px;
            width: 12px;
            height: 12px;
            margin-top: -6px;
            margin-left: 8px;
            margin-right: 8px;
            position: absolute;
            z-index: 100;
            border-width: 3px;
            border-style: solid;
            border-radius: 100%;
            line-height: 20px;
            text-align: center;
            box-shadow: 0 0 0 5px #f2f3f8
        }

        .timeline .timeline-label {
            position: relative;
            float: left;
            clear: left;
            width: 50%;
            margin-bottom: 20px;
            top: 1px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding: 0;
            text-align: center
        }

        .timeline .timeline-label:before,
        .timeline .timeline-label:after {
            content: "";
            display: table
        }

        .timeline .timeline-label:after {
            clear: both
        }

        .timeline .timeline-label:last-child {
            margin-bottom: 0!important
        }

        .timeline .timeline-label + .timeline-item {
            margin-top: 0
        }

        .timeline .timeline-label + .timeline-item + .timeline-item {
            margin-top: 40px
        }

        .timeline .time-right {
            color: rgba(52, 40, 104, .5);
            position: absolute;
            bottom: 0;
            right: 0;
            font-size: .85rem;
            font-weight: 500
        }

        .timeline .time-left {
            color: rgba(52, 40, 104, .5);
            position: absolute;
            bottom: 0;
            left: 0;
            font-size: .85rem;
            font-weight: 500
        }

        .timeline .widget-header .user-image {
            display: inline-block;
            vertical-align: middle;
            margin-right: 1.07rem
        }

        .timeline .widget-header .user-image img {
            width: 50px
        }

        .timeline .widget-header .title {
            color: #2c304d;
            font-size: 1rem
        }

        .timeline .widget-header .username {
            color: #e76c90
        }

        .timeline .widget-header .time {
            font-size: .85rem
        }

        .timeline .widget-body {
            padding: 1rem 1.4rem
        }

        .timeline .widget-footer {
            border-top: 1px solid #eee;
            margin: 0 1.4rem;
            padding: 1.07rem 0
        }

        .timeline .users-like {
            padding: 0
        }

        .timeline .users-like a {
            margin: 0 -1.6rem 0 0;
            transition: all 0.4s ease
        }

        .timeline .users-like a:hover {
            margin-right: -.3rem
        }

        .timeline .users-like img {
            width: 40px;
            border: .25rem solid #fff
        }

        .timeline .users-like a.view-more {
            background: #5d5386;
            color: #fff;
            width: 40px;
            height: 40px;
            border: .25rem solid #fff;
            border-radius: 50%;
            vertical-align: middle;
            font-size: .85rem;
            text-align: center;
            line-height: 30px;
            margin-right: 0
        }

        .timeline .widget-footer .meta li {
            display: inline-block;
            margin-right: .5rem
        }

        .timeline .widget-footer .meta li:last-child {
            margin-right: 0
        }

        .timeline .widget-footer .meta li a {
            color: rgba(52, 40, 104, .3)
        }

        .timeline .widget-footer .meta li a:hover {
            color: rgba(52, 40, 104, .9)
        }

        .timeline .widget-footer .meta li i {
            font-size: 1.8rem;
            vertical-align: middle;
            margin-right: .3rem
        }

        .timeline .widget-footer .meta li .numb {
            vertical-align: middle
        }

        @media screen and (max-width:768px) {
            .timeline.timeline {
                width: 100%;
                max-width: 100%
            }
            .timeline.timeline .timeline-item {
                padding-left: 72px;
                padding-right: 0
            }
            .timeline.timeline .timeline-item.timeline-item-right,
            .timeline.timeline .timeline-item:nth-of-type(even):not(.timeline-item-left) {
                padding-left: 72px;
                padding-right: 0
            }
            .timeline.timeline .timeline-item .timeline-event {
                width: 100%
            }
            .timeline.timeline:before {
                left: 42px;
                width: 0;
                margin-left: -1px
            }
            .timeline.timeline .timeline-item {
                width: 100%;
                margin-bottom: 20px
            }
            .timeline.timeline .timeline-item:nth-of-type(even) {
                margin-top: 0
            }
            .timeline.timeline .timeline-item>.timeline-event {
                float: right!important
            }
            .timeline.timeline .timeline-item>.timeline-event:before,
            .timeline.timeline .timeline-item>.timeline-event:after {
                right: auto!important;
                border-left-width: 0!important
            }
            .timeline.timeline .timeline-item>.timeline-event:before {
                left: -15px!important;
                border-right-width: 15px!important
            }
            .timeline.timeline .timeline-item>.timeline-event:after {
                left: -14px!important;
                border-right-width: 14px!important
            }
            .timeline.timeline .timeline-item>.timeline-point {
                transform: translateX(-50%);
                left: 42px!important;
                margin-left: 0
            }
            .timeline.timeline .timeline-label {
                transform: translateX(-50%);
                margin: 0 0 20px 42px
            }
            .timeline.timeline .timeline-label + .timeline-item + .timeline-item {
                margin-top: 0
            }
            .timeline .time-right {
                left: 0
            }
        }


        .rounded-widget .widget {
            border-radius: 4px
        }

        .rounded-widget .widget-image {
            border-radius: 4px
        }

        .rounded-widget .widget-header {
            border-radius: 4px 4px 0 0
        }

        .rounded-widget .widget-footer {
            border-radius: 0 0 4px 4px
        }

        .widget {
            background: #fff;
            border-radius: 0;
            border: none;
            margin-bottom: 30px
        }

        .widget-image {
            background: #fff;
            border-radius: 0;
            border: none;
            margin-bottom: 30px;
            position: relative
        }

        .widget-header {
            background: #fff;
            padding: .85rem 1.4rem;
            position: relative;
            width: 100%
        }

        .widget-header.bordered {
            border-bottom: .07rem solid #eee
        }

        .widget-header.no-actions {
            padding: 1.49rem
        }

        .widget-options .dropdown-toggle {
            color: #98a8b4;
            background: none;
            border: none;
            padding: 0;
            font-size: 1.7rem;
        }

        .widget-header h1,
        .widget-header h2,
        .widget-header h3,
        .widget-header h4,
        .widget-header h5,
        .widget-header h6 {
            color: #2c304d;
            margin-bottom: 0
        }

        .section-title h1,
        .section-title h2,
        .section-title h3,
        .section-title h4,
        .section-title h5,
        .section-title h6 {
            color: #2c304d;
            font-weight: 600;
            margin-bottom: 0
        }

        .widget-header h2 {
            color: #2c304d;
            font-size: 1.2rem;
            display: table-cell;
            vertical-align: middle;
            margin-right: auto
        }

        .widget-header h2 i {
            color: #aea9c3;
            font-size: 1.8rem;
            padding-right: .5rem;
            vertical-align: middle
        }

        .widget-body {
            padding: 1.4rem
        }

        .widget-image-footer {
            background: #fff;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 1.2rem 0;
            z-index: 1
        }

        .widget-footer {
            background: #fff;
            padding: 1rem 1.07rem;
            position: relative
        }

        .widget-footer.big {
            padding: 2.1rem 1.07rem
        }

        .no-border {
            border: 0 none!important;
        }

        .no-bg {
            background: none!important;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <!-- <div class="container history-caption ">
        <h2 class="text-center mt-5 mb-5 text-un" data-aos="zoom-in" data-aos-duration="1000">School History</h2>
        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-12 col-lg-12 col-md-12 text-center d-flex justify-content-center flex-1">
                <video src="" class="object-fit-contain" autoplay></video>
                <iframe class="object-fit-cover mt-5 mb-5 text-center d-flex justify-content-center flex-1" autoplay width="150%" height="405" src="https://www.youtube.com/embed/TaXql0h_wCA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyrosope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-12 col-lg-12 text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. In illum dignissimos quibusdam delectus dolorem ratione totam quidem, doloribus corporis id? Modi, quas dolor beatae magnam ipsam facere neque, minima temporibus nobis nulla in officiis? Alias et sed aperiam dolor velit. Maxime, inventore recusandae numquam, molestiae nobis nesciunt reprehenderit quia omnis, necessitatibus atque consequuntur possimus in commodi rerum? Consectetur eveniet laudantium nam, sint esse earum possimus nisi, error optio nemo praesentium dolor ipsa culpa voluptatibus pariatur neque fugit odio eligendi maxime consequatur, cum reiciendis molestias. Facilis eum dolore nihil sit quis sequi in sint reprehenderit eius, nesciunt ab praesentium soluta ratione, error maxime sunt. Architecto odio distinctio vel voluptatem voluptas animi, incidunt rem obcaecati nobis libero accusamus sit impedit qui deleniti eaque doloremque possimus. Recusandae ea nobis corporis quaerat. Soluta enim, quod ea debitis esse sequi explicabo? Vel, sed quia? Omnis veniam tempora eos odio culpa facilis soluta, dolorum voluptates distinctio natus eum nihil facere, asperiores at, blanditiis placeat repellendus? Nulla doloremque voluptate repudiandae beatae voluptatibus provident vel, exercitationem quis eligendi eum sequi nam, eaque aliquid deserunt vitae culpa? Dignissimos omnis illum est.</p>
            </div>
        </div>
    </div> -->
<!--    <div class="container mb-5 mt-5" data-aos="zoom-in" data-aos-duration="1000">-->
<!--        <div class="row">-->
<!--            <div class="col-12 col-md-12 col-lg-12 px-5 mx-5">-->
<!--            <video src="" class="object-fit-contain" autoplay></video>-->
<!--                <iframe class="object-fit-lg-contain" autoplay width="110%" height="405" src="https://www.youtube.com/embed/FgvgwaNoe24?si=Mb1TquPF0pfSKg2H" title="YouTube video player" frameborder="0" allow=" autoplay; "></iframe>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-12">
                <div class="timeline timeline-line-solid">
                <span class="timeline-label">
                    <span class="label">April 2018</span>
                </span>



                    <div class="timeline-item">
                        <div class="timeline-point timeline-point"></div>
                        <div class="timeline-event">
                            <div class="widget has-shadow">
                                <div class="widget-header py-4 px-3 d-flex align-items-center">
                                        <h2 class="fw-bold ">
                                            Pombule Dance School old Student – Mr.Jinadasa Nivithigala 1892</h2>
                                </div>

                                <div class="widget-body">
                                        <a href="#"><img src="../assets/images/banner1.jpg" class="i" alt="..."></a>
                                </div>

                                <div class="widget-footer">
                                    <p>Pombule Dance School old Student – Mr.Jinadasa Nivithigala 1892</p>
                                </div>
                            </div>
                            <div class="time-left">30 min ago</div>
                        </div>
                    </div>

                    <div class="timeline-item mt-5 pt-5">
                        <div class="timeline-point timeline-point"></div>
                        <div class="timeline-event">
                            <div class="widget has-shadow">
                                <div class="widget-header d-flex align-items-center">

                                    <div class="widget-options">

                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="content-img">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="i" alt="..."></a>
                                    </div>
                                </div>


                            </div>
                            <div class="time-left">30 min ago</div>
                        </div>
                    </div>

                    <div class="timeline-item">
                    <div class="timeline-point timeline-point"></div>
                    <div class="timeline-event">
                        <div class="widget has-shadow">
                            <div class="widget-header d-flex align-items-center">
                               
                                <div class="d-flex flex-column mr-auto">
                                    <div class="title">
                                    </div>
                                </div>
                                <div class="widget-options pt-3">
                                    <h2>
Pombule Dance School old Student – Mr.Jinadasa Nivithigala 1892</h2>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="content-img">
                                    <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid" alt="..."></a>
                                </div>
                            </div>

                            <div class="widget-footer d-flex align-items-center">
                              <p>Pombule Dance School old Student – Mr.Jinadasa Nivithigala 1892</p>
                            </div>
                        </div>
                        <div class="time-left">30 min ago</div>
                    </div>
                </div>


                    </div>
                    
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>