@extends('main_layout.main')


@section('content')

    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">

                    <section class="section m-b-70">
                        <!-- Block Sliders -->
                        <div class="block block-sliders layout-10 color-white nav-center">
                            <div class="slick-sliders" data-autoplay="true" data-dots="true" data-nav="false" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">

                                <div class="item slick-slide">
                                    <div class="item-content">
                                        <div class="content-image">
                                            <img width="1920" height="1080" src="{{asset('assets/img/home_images/lighting.jpg')}}" alt="Image Slider">
                                        </div>
                                        <div class="item-info horizontal-center vertical-middle">
                                            <div class="content text-center" style="background-color: #948A83; opacity: 80%; padding: 20px; border-radius: 10px">
                                                <h2 class="title-slider" style="font-family: 'Aktiv Grotesk',serif">Decorative Lighting</h2>
                                                <div class="description-slider" style="font-family: 'Helvetica Neue',serif">Modern, Contemporary or Rustic Lighting Styles To Fit Your Desired Look</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item slick-slide">
                                    <div class="item-content">
                                        <div class="content-image">
                                            <img width="1920" height="1080" src="{{asset('assets/img/home_images/energy.jpg')}}" alt="Image Slider">
                                        </div>
                                        <div class="item-info horizontal-center vertical-middle">
                                            <div class="content text-center" style="background-color: #948A83; opacity: 80%; padding: 20px; border-radius: 10px">
                                                <h2 class="title-slider" style="font-family: 'Aktiv Grotesk',serif">Renewable Energy</h2>
                                                <div class="description-slider" style="font-family: 'Helvetica Neue',serif">Connecting You To The World With Renewable, Reliable & Efficient Energy</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item slick-slide">
                                    <div class="item-content">
                                        <div class="content-image">
                                            <img width="1920" height="1080" src="{{asset('assets/img/home_images/lifestyle.jpg')}}" alt="Image Slider">
                                        </div>
                                        <div class="item-info horizontal-center vertical-middle">
                                            <div class="content text-center" style="background-color: #948A83; opacity: 80%; padding: 20px; border-radius: 10px">
                                                <h2 class="title-slider" style="font-family: 'Aktiv Grotesk',serif">Projects & Lifestyle</h2>
                                                <div class="description-slider" style="font-family: 'Helvetica Neue',serif">Projects That Cater To Your Lifestyle</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="section section-padding m-b-70">
                        <div class="section-container">
                            <div class="block block-product-cats slider">
                                <div class="block-widget-wrap">
                                    <div class="block-title"><h2 style="font-family: 'Aktiv Grotesk',serif">Our Categories</h2></div>
                                    <div class="block-content">
                                        <div class="product-cats-list slick-wrap">
                                            <div class="slick-sliders content-category" data-dots="0" data-slidestoscroll="false" data-nav="1" data-columns4="2" data-columns3="3" data-columns2="4" data-columns1="5" data-columns1440="5" data-columns="5">
                                                <div class="item item-product-cat slick-slide">
                                                    <div class="item-product-cat-content">
                                                        <a href="#">
                                                            <div class="item-image">
                                                                <img src="{{asset('assets/img/home_images/decoLighting.jpg')}}" alt="bed-bath" style="height: 320px; width: 258px">
                                                            </div>
                                                        </a>
                                                        <div class="product-cat-content-info">
                                                            <h2 class="item-title">
                                                                <a href="#" style="font-family: 'Helvetica Neue',serif">Decorative Lighting</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-product-cat slick-slide">
                                                    <div class="item-product-cat-content">
                                                        <a href="#">
                                                            <div class="item-image">
                                                                <img src="{{asset('assets/img/home_images/outdoorCommercial.jpeg')}}" alt="furniture" style="height: 320px; width: 258px">
                                                            </div>
                                                        </a>
                                                        <div class="product-cat-content-info">
                                                            <h2 class="item-title">
                                                                <a href="#" style="font-family: 'Helvetica Neue',serif">Commercial & Outdoor Lighting</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-product-cat slick-slide">
                                                    <div class="item-product-cat-content">
                                                        <a href="#">
                                                            <div class="item-image">
                                                                <img src="{{asset('assets/img/home_images/projects.jpeg')}}" alt="home-decor" style="height: 320px; width: 258px">
                                                            </div>
                                                        </a>
                                                        <div class="product-cat-content-info">
                                                            <h2 class="item-title">
                                                                <a href="#" style="font-family: 'Helvetica Neue',serif">Projects</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-product-cat slick-slide">
                                                    <div class="item-product-cat-content">
                                                        <a href="#">
                                                            <div class="item-image">
                                                                <img src="{{asset('assets/img/home_images/energy2.jpg')}}" alt="lighting" style="height: 320px; width: 258px">
                                                            </div>
                                                        </a>
                                                        <div class="product-cat-content-info">
                                                            <h2 class="item-title">
                                                                <a href="#" style="font-family: 'Helvetica Neue',serif">Energy</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-product-cat slick-slide">
                                                    <div class="item-product-cat-content">
                                                        <a href="#">
                                                            <div class="item-image">
                                                                <img src="{{asset('assets/img/home_images/electrical.jpg')}}" alt="office" style="height: 320px; width: 258px">
                                                            </div>
                                                        </a>
                                                        <div class="product-cat-content-info">
                                                            <h2 class="item-title">
                                                                <a href="#" style="font-family: 'Helvetica Neue',serif">Electrical</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section section-padding p-t-20 m-b-20">
                        <div class="section-container">
                            <div class="block block-image slider">
                                <div class="block-widget-wrap">
                                    <div class="block-title"><h2 style="font-family: 'Aktiv Grotesk',serif">Our Brands</h2></div>
                                    <div class="slick-wrap">
                                        <div class="slick-sliders" data-nav="0" data-columns4="2" data-columns3="3" data-columns2="4" data-columns1="4" data-columns1440="5" data-columns="5">
                                            <div class="item slick-slide">
                                                <div class="item-image">
                                                    <a href="#">
                                                        <img width="450" height="450" src="{{asset('assets/img/brands/artdna.png')}}" alt="Brand 1">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item slick-slide">
                                                <div class="item-image">
                                                    <a href="#">
                                                        <img width="450" height="450" src="{{asset('assets/img/brands/fumagalli.png')}}" alt="Brand 2">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item slick-slide">
                                                <div class="item-image">
                                                    <a href="#">
                                                        <img width="450" height="450" src="{{asset('assets/img/brands/illumatt.png')}}" alt="Brand 3">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item slick-slide">
                                                <div class="item-image">
                                                    <a href="#">
                                                        <img width="450" height="450" src="{{asset('assets/img/brands/jinko.png')}}" alt="Brand 4">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item slick-slide">
                                                <div class="item-image">
                                                    <a href="#">
                                                        <img width="450" height="450" src="{{asset('assets/img/brands/liper.png')}}" alt="Brand 5">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <br>
                    <br>

                    <section class="section section-padding m-b-70">
                        <div class="section-container">
                            <div class="block block-banners banners-effect">
                                <div class="block-widget-wrap">
                                    <div class="block-title"><h2 style="font-family: 'Aktiv Grotesk',serif">Our Works</h2></div>
                                    <div class="row">
                                        <div class="col-md-4 sm-m-b">
                                            <div class="block-widget-banner layout-12">
                                                <div class="bg-banner">
                                                    <div class="banner-wrapper banners">
                                                        <div class="banner-image">
                                                            <a href="#">
                                                                <img src="{{asset('assets/img/work/VMBeautiful.jpg')}}" alt="Banner Image" style="height: 500px; width: 450px">
                                                            </a>
                                                        </div>
                                                        <div class="banner-wrapper-infor">
                                                            <div class="info">
                                                                <div class="content">
                                                                    <a class="link-title" href="#">
                                                                        <h3 class="title-banner" style="font-family: 'Aktiv Grotesk',serif">Village Market</h3>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 sm-m-b">
                                            <div class="block-widget-banner layout-12">
                                                <div class="bg-banner">
                                                    <div class="banner-wrapper banners">
                                                        <div class="banner-image">
                                                            <a href="#">
                                                                <img src="{{asset('assets/img/work/harvest.jpg')}}" alt="Banner Image" style="height: 500px; width: 450px">
                                                            </a>
                                                        </div>
                                                        <div class="banner-wrapper-infor text-center">
                                                            <div class="info">
                                                                <div class="content">
                                                                    <a class="link-title" href="#">
                                                                        <h3 class="title-banner" style="font-family: 'Aktiv Grotesk',serif">Harvest Restaurant</h3>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 sm-m-b">
                                            <div class="block-widget-banner layout-12">
                                                <div class="bg-banner">
                                                    <div class="banner-wrapper banners">
                                                        <div class="banner-image">
                                                            <a href="#">
                                                                <img src="{{asset('assets/img/work/gardenLights.jpeg')}}" alt="Banner Image" style="height: 500px; width: 450px">
                                                            </a>
                                                        </div>
                                                        <div class="banner-wrapper-infor">
                                                            <div class="info">
                                                                <div class="content">
                                                                    <a class="link-title" href="#">
                                                                        <h3 class="title-banner" style="font-family: 'Aktiv Grotesk',serif">Escape Gardens</h3>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

@endsection