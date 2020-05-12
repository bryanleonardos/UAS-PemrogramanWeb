<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/slick.css">
        <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>

        <!--NAVBAR-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">KIBAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item flex-row-reverse">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                </ul>
                <div style="text-align:right">
                    <form class="form-inline my-2 my-lg-0";>
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!--NAVBAR-->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    KIBAR
                    <h2>One Stop Shopping Service</h2>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" >
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/geforce-rtx-turing/social/geforce-rtx-20-series-social-2048x1024.jpg" alt="First slide" width="1000" height="400">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://rog.asus.com/media/1585821021649.jpg" alt="Second slide" width="1200" height="400">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://esfstream.com/wp-content/uploads/2018/03/Vamers-FYI-Gaming-Xbox-One-X-Microsofts-smallest-and-most-powerful-games-console-Main-Banner-01.jpg" alt="Third slide" width="1000" height="400">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="section-title">
                <h2 class="title2">New Products</h2>
                <div class="section-nav">
                </div>
            </div>
        </div>

        <!-- Products tab & slick -->
        <div class="col-md-12">
            <div class="row">
                <div class="products-tabs">
                    <!-- tab -->
                    <div id="tab1" class="tab-pane active">
                        <div class="products-slick carousel-inner" data-nav="#slick-nav-1">
                            <!-- product -->
                            <div class="product carousel-item active">
                                <div class="product-img">
                                    <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Notebook</p>
                                    <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                    <h4 class="product-price">RP 15.999.000 <del class="product-old-price">RP 16.999.000</del></h4>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                            <!-- /product -->

                            <!-- product -->
                            <div class="product carousel-item">
                                <div class="product-img">
                                    <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Notebook</p>
                                    <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                            <!-- /product -->

                            <!-- product -->
                            <div class="product carousel-item">
                                <div class="product-img">
                                    <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Notebook</p>
                                    <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                            <!-- /product -->

                            <!-- product -->
                            <div class="product carousel-item">
                                <div class="product-img">
                                    <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Notebook</p>
                                    <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                            <!-- /product -->
                        </div>
                        <div id="slick-nav-1" class="products-slick-nav"></div>
                    </div>
                    <!-- /tab -->
                </div>
            </div>
        </div>
        <!-- Products tab & slick -->

        <div class="col-md-4 col-xs-6">
            <div class="section-title">
                <h4 class="title2">Top selling</h4>
                <div class="section-nav">
                    <div id="slick-nav-4" class="products-slick-nav"></div>
                </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-4">
                <div>
                    <!-- product widget -->
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/product04.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        </div>
                    </div>
                    <!-- /product widget -->

                    <!-- product widget -->
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/product05.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        </div>
                    </div>
                    <!-- /product widget -->

                    <!-- product widget -->
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/product06.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        </div>
                    </div>
                    <!-- product widget -->
                </div>

                <div>
                    <!-- product widget -->
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/product07.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        </div>
                    </div>
                    <!-- /product widget -->

                    <!-- product widget -->
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/product08.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        </div>
                    </div>
                    <!-- /product widget -->

                    <!-- product widget -->
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/product09.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        </div>
                    </div>
                    <!-- product widget -->
                </div>
            </div>
        </div>

		<div class="clearfix visible-sm visible-xs"></div>

        <!-- Script -->
        <script type="text/javascript" src="/js/main.js"></script>
        <script type="text/javascript" src="/js/slick.min.js"></script>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/nouislider.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/jquery.zoom.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
