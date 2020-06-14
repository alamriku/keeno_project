@extends('layouts.front')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-md-12 mx-auto pt-5">
                <h1 class="text-center">
                    E-Shop
                </h1>
               <blockquote class="text-center mb-5">
                   tempora ipsam architecto.
                   Totam voluptates est qui error exercitationem labore.
                   Quidem quas tempora repudiandae ea. Mollitia non qui ipsa
                   cupiditate commodi sunt et. Labore est sit ipsum harum. Temporibus earum et
                   voluptatibus consectetur nisi nam. Rerum doloremque blanditiis nobis placeat et.
                   Sit sint nemo ex iste maiores pariatur et. Iste commodi sed aperiam recusandae impedit.
                   Eaque ut velit ad reiciendis delectus enim. Omnis rem quae voluptas est excepturi. Magni
                   consequatur tempore consectetur ut enim
               </blockquote>
                <div class="cus-divider mx-auto mb-5"></div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center py-5">
                <div class="justify-content-center">
                    <img src="https://unsplash.it/300/200?image=502" class=" img-thumbnail rounded float-right" alt="...">
                    <img src="https://unsplash.it/300/200?image=503" class="mx-auto img-thumbnail rounded " alt="...">
                    <img src="https://unsplash.it/300/200?image=501" class="img-thumbnail rounded float-left" alt="...">
                </div>

                @foreach($products as $product)
{{--                    @php--}}
{{--                        $product_img=rtrim($product->images_url,',');--}}
{{--                        $array= explode(',',$product_img);--}}
{{--                    @endphp--}}

{{--                    <div class="card" style="width: 100%;">--}}
{{--                        <img class="card-img-top" src="{{URL::to('/images').'/'.$array[0]}}" alt="Card image cap">--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-text">--}}
{{--                                {{$product->description}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                @endforeach
            </div>
            <div class="col-md-8 text-center mt-3">
                <button class="btn btn-warning btn-lg">
                    Shop Now
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center py-3">Featured Products</h2>
                <div class="">
                    <div class="carousel">
                        <div class="roll">
                            @php
                                $product_images='';
                            $feature_images = array();
                                @endphp
                            @foreach($products as $product)
                                @if($product->is_featured)
                                    @php

                                     $feature_images = explode(',', rtrim($product->images_url,','));
                                        @endphp

                            <div class="slides">
                                <img src="{{ !empty($feature_images[0]) ? asset('/images'.'/'.$feature_images[0]) : 'https://unsplash.it/300/200?image=503'}}" alt="slides img 1">
                                <p>
                                    {{$product->title}} <br>
                                    {{ $product->price }}
                                </p>
                            </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="sections">
                        </div>
                        <button class="navigation" id="nav-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <button class="navigation" id="nav-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div>


                </div>
            </div>
        <div class="row mt-5 px-3 py-5 news_latter_b" >
            <div class="col-6">
                <h1>Newsletter</h1>
                <p>
                    consectetur adipiscing elit. Vestibulum ac tellus ex. Integer
                    eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis
                </p>
            </div>
            <div class="col-6 pl-sm-5">
                <form class="form-inline my-2 mt-lg-5">
                    <input class="form-control mr-sm-2" style="width: 60%" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="row  py-5 featured_b" >

            <div class="col-4" style="height: 545px">
                @if($rated_products->max('rating') > 1)
                    @php
                        $top_rated = App\Product::where('rating','=',$rated_products->max('rating'))->first();
                    @endphp

                <div class="f_image" style="height: 545px;">
                    <img src="{{asset('/images').'/'.$top_rated->getImageAttribute()}}" style="height: 100%" class="img-thumbnail" alt="" />
                    <span class="float-left mt-sm-2">
                                    {{$top_rated->title}} <br>
                                    {{$top_rated->price}}
                                </span>
                    <span class="float-right mt-sm-2">
                        @php
                        $obtained_rate =1;
                        @endphp
                        @for($i=1;$rated_products->max('rating') >= $i;$i++)
                            @php $obtained_rate++ @endphp
                                    <i class="fa fa-star" style="color:#004eff"></i>
                            @endfor
                        @if($rated_products->max('rating') != 5)
                            @for($j=1;(5-$obtained_rate) >=$i;$i++)
                                <i class="fa fa-star"></i>
                                @endfor()
                            @endif
                                </span>
                </div>

                    @endif
            </div>

            <div class="col-8 pl-sm-8">
                <ul class="f_list_pro">
                    @foreach($rated_products as $product)
                    <li>
                        <div class="custom_card ">
                            <div class="f_image ">
                                <img src="{{asset('/images').'/'.$product->getImageAttribute()}}" class="img-thumbnail"  alt="" />
                                <span class="float-left  mt-sm-2">
                                    {{$product->title}} <br>
                                    {{$product->price}}
                                </span>
                                <span class="float-right mt-sm-2">
                                     @php
                                         $obtained_rate =0;
                                     @endphp
                                    @for($i=1;$product->rating >= $i;$i++)
                                        @php $obtained_rate++ @endphp
                                        <i class="fa fa-star" style="color:#004eff"></i>
                                    @endfor
                                    @if($product->rating != 5)
                                        @for($j=1;(5-$obtained_rate) >=$j;$j++)
                                            <i class="fa fa-star"></i>
                                        @endfor()
                                    @endif

                                </span>
                            </div>
                        </div>
                    </li>
                    @endforeach
{{--                    <li>--}}
{{--                        <div class="custom_card ">--}}
{{--                            <div class="f_image ">--}}
{{--                                <img src="https://placeimg.com/300/150/arch" class="img-thumbnail" alt="" />--}}
{{--                                <span class="float-left mt-sm-2">--}}
{{--                                    Product name <br>--}}
{{--                                    price--}}
{{--                                </span>--}}
{{--                                <span class="float-right mt-sm-2">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="custom_card ">--}}
{{--                            <div class="f_image ">--}}
{{--                                <img src="https://placeimg.com/300/150/arch" class="img-thumbnail"  alt="" />--}}
{{--                                <span class="float-left mt-sm-2">--}}
{{--                                    Product name <br>--}}
{{--                                    price--}}
{{--                                </span>--}}
{{--                                <span class="float-right mt-sm-2">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="custom_card ">--}}
{{--                            <div class="f_image ">--}}
{{--                                <img src="https://placeimg.com/300/150/arch" class="img-thumbnail"  alt="" />--}}
{{--                                <span class="float-left mt-sm-2">--}}
{{--                                    Product name <br>--}}
{{--                                    price--}}
{{--                                </span>--}}
{{--                                <span class="float-right mt-sm-2">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>

            </div>
        </div>
        <div class="row py-sm-5 justify-content-center  featured_b" >
            <div class="col-8">
                <h1 class="text-center">About Your Shop</h1>
                <p class="text-center">
                    consectetur adipiscing elit. Vestibulum ac tellus ex. Integer
                    eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis
                    consectetur adipiscing elit. Vestibulum ac tellus ex. Integer
                    eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis
                </p>
            </div>

        </div>

    </div>

@endsection
