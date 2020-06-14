<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@400;500;600&family=Viga&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Cabin Condensed', sans-serif;
            font-weight: 700;
            color:black;
        }
      .custom_mr{
          padding-left: 66px !important;
          padding-right: 55px !important;
        }
      .nav-link{
          padding-top: 0px !important;
          padding-bottom: 0px !important;
      }
      .riku ul
      {
          margin: 0;
          padding: 0;
      }



      .riku li:not(:first-child):before {
          content: " | ";
          position: absolute;
      }
        .cus-divider {
            border-bottom: 1px solid #00000047;
            width: 40% !important;
            height: 0px !important;
            display: block;
        }
        .news_latter_b{
            border-top: 1px solid #d2cbcb;
            border-bottom: 1px solid #d2cbcb;
        }

        .f_list_pro{
            padding:0px !important;
        }
        .f_list_pro li{
            display: inline-block;
            float: right;
            width: 42%;
            margin-left: 55px;
        }
        .f_list_pro li:nth-child(3) {
           padding-top: 23px;
        }
        .f_list_pro li:nth-child(4) {
            padding-top: 23px;
        }
        .featured_b{
            border-bottom: 1px solid #d2cbcb;
        }
        .group_wrapper{
            width: 25%;
            display: inline-block;
        }

        .list-group-item{
            padding: 0px !important;
             background-color: transparent; !important;
             border: none !important;
        }
       .list-group .list-group-item li{
           padding: 2px 0px !important;
       }
       .logo_wrap{
           width: 65% !important;
       }


        /*Slider*/





        .carousel-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        .carousel {
            position: relative;
            overflow: hidden;
            width: 1110px;
        }

        .roll {
            position: relative;
            white-space: nowrap;
            font-size: 0;
            left: 20px;
        }

        .slides {
            width: 523px;
            height: 293px;
            /*background-color: #FFF;*/
            /*-webkit-box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);*/
            /*-moz-box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);*/
            /*box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);*/
            text-align: center;
            margin: 0 10px 15px 0;
            display: inline-block;
            font-size: 18px;
        }

        .slides img {
            margin-top: 10px;
            width: 463px;
            height: 270px;
        }

        .slides p {
            margin: 32px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 200;
            text-align: left;
            white-space: normal;
            text-align: center;
        }

        .sections {
            text-align: center;
            color: #b4fdc0;
            font-size: 12px;
        }

        .sections i {
            margin: 0 2px;
            cursor: pointer;
        }

        .navigation {
            position: absolute;
            border: none;
            padding: 0;
            background-color: rgba(35,35,35,0.8);
            height: 34px;
            width: 34px;
            color: #FFF;
            font-size: 20px;
            text-align: center;
            top: 176px;
            z-index: 10;
        }

        .navigation:visited { text-decoration: none; }

        .navigation-hover {
            height: 50px;
            width: 50px;
            top: 168px;
        }

        .navigation:active { text-decoration: none; }

        .navigation:focus { outline: none; }

        .navigation:first-of-type { left: 0px; }

        .navigation:last-of-type { right: 10px; }
        @media screen and (max-width: 950px) {

            .carousel {
                position: relative;
                overflow: hidden;
                width: 1114px;;
            }
        }
        @media screen and (max-width: 655px) {

            .carousel {
                position: relative;
                overflow: hidden;
                width: 310px;
            }
        }

    </style>
</head>
<body>
<div id="app">


        <div class="container-fluid">


            <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 fixed-top">
                <a class="navbar-brand" href="#" style="width: 12%">
                    <img src="{{asset('/logo/new_logo.png')}}"   width="100%" height="76" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse riku" id="navbarSupportedContent">
                    <form class="my-2 my-lg-0" style="width: 39%">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item " style="position: relative">
                            <a class="nav-link custom_mr" href="{{ route('login') }}" style="
    padding-right: 55px;">Home</a>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle custom_mr" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($common_content['categories'] as $category)

                                        <a class="dropdown-item" href="{{ route('login') }}">{{ $category->name }}</a>
                                            <div class="dropdown-divider"></div>
                                @endforeach

                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link custom_mr" href="{{ route('login') }}">Help</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('login') }}" style="padding-left:66px">About</a>
                        </li>



                    </ul>

                </div>
            </nav>

        </div>


    <main class="py-4">
        @yield('content')

    </main>

    @include('../partial.footer')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('/js/rl-carousel.js')}}"></script>
</body>
</html>
