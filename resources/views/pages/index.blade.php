@extends('layouts.main')

@section('content')
    <!-- start section -->
    <section class="section">
        <div class="container-fluid">
            <!-- start product promo -->
            <div class="product-promo product-promo--style-2">
                <div class="__inner">
                    <div class="row no-gutters  js-isotope"
                        data-isotope-options='{
                            "itemSelector": ".js-isotope__item",
                            "transitionDuration": "0.8s",
                            "percentPosition": "true",
                            "masonry": { "columnWidth": ".js-isotope__sizer" }
                        }'>
                        
                        <div class="col-12 col-sm-6 col-md-4  js-isotope__sizer"></div>

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-md-4  js-isotope__item">
                            <div class="__item" data-y="2">
                                <figure class="__image">
                                    <img src="{{asset('asset/images/product-preview_img/11.jpg')}}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h3 class="__title">Awesome <br><span>Sweets</span></h3>
                                </div>

                                <a class="__link" href="#"></a>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-md-4  js-isotope__item">
                            <div class="__item">
                                <figure class="__image">
                                    <img src="{{asset('asset/images/product-preview_img/12.jpg')}}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h3 class="__title">Organic <br><span>food</span></h3>
                                </div>

                                <a class="__link" href="#"></a>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-md-4  js-isotope__item">
                            <div class="__item">
                                <figure class="__image">
                                    <img src="{{asset('asset/images/product-preview_img/13.jpg')}}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h3 class="__title">tasty <br><span>meat</span></h3>
                                </div>

                                <a class="__link" href="#"></a>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-md-4  js-isotope__item">
                            <div class="__item">
                                <div class="__content">
                                    <h2 class="__title">Agro <br><span>awesome <br>Products</span></h2>
                                </div>

                                <a class="__link" href="#"></a>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-md-4  js-isotope__item">
                            <div class="__item">
                                <figure class="__image">
                                    <img src="{{asset('asset/images/product-preview_img/14.jpg')}}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h3 class="__title">Juicy <br><span>Fruits</span></h3>
                                </div>

                                <a class="__link" href="#"></a>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end product promo -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="container">
            <div class="special-offer special-offer--style-3" data-aos="fade" data-aos-duration="600" data-aos-offset="70">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <figure class="image">
                            <img class="img-fluid  lazy" src="{{asset('asset/images/blank.gif')}}" data-src="{{asset('asset/images/img_asd.png')}}" alt="demo" />
                        </figure>
                    </div>

                    <div class="col-12 my-3 d-lg-none"></div>

                    <div class="col-12 col-lg-6">
                        <h2 class="text">
                            <span style="color: #fcdb5a">Quality</span>
                            <span style="color: #db2985">food is the</span>
                            <span style="color: #72aa41">most important</span>
                            <span style="color: #f2a137">thing in our</span>
                            <span style="color: #4fb1c9">life</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pt">
        <div class="container">
            <div class="section-heading section-heading--center" data-aos="fade">
                <h2 class="__title">Agro food <span>Services</span></h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>

            <!-- start feature -->
            <div class="feature feature--style-3">
                <div class="__inner">
                    <div class="row">
                        <!-- start item -->
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="__item  text-center" data-aos="fade" data-aos-delay="100" data-aos-offset="100">
                                <i class="__ico">
                                    <img class="img-fluid  lazy" src="{{asset('asset/images/blank.gif')}}" data-src="{{asset('asset/images/feature_img/15.png')}}" alt="demo" />
                                </i>

                                <h5 class="__title">Steak House</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="__item  text-center" data-aos="fade" data-aos-delay="200" data-aos-offset="100">
                                <i class="__ico">
                                    <img class="img-fluid  lazy" src="{{asset('asset/images/blank.gif')}}" data-src="{{asset('asset/images/feature_img/16.png')}}" alt="demo" />
                                </i>

                                <h5 class="__title">Tasty Cereals</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="__item  text-center" data-aos="fade" data-aos-delay="300" data-aos-offset="100">
                                <i class="__ico">
                                    <img class="img-fluid  lazy" src="{{asset('asset/images/blank.gif')}}" data-src="{{asset('asset/images/feature_img/17.png')}}" alt="demo" />
                                </i>

                                <h5 class="__title">Italian Pizza</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="__item  text-center" data-aos="fade" data-aos-delay="400" data-aos-offset="100">
                                <i class="__ico">
                                    <img class="img-fluid  lazy" src="{{asset('asset/images/blank.gif')}}" data-src="{{asset('asset/images/feature_img/18.png')}}" alt="demo" />
                                </i>

                                <h5 class="__title">Vegeterian Burgers</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="__item  text-center" data-aos="fade" data-aos-delay="500" data-aos-offset="100">
                                <i class="__ico">
                                    <img class="img-fluid  lazy" src="{{asset('asset/images/blank.gif')}}" data-src="{{asset('asset/images/feature_img/19.png')}}" alt="demo" />
                                </i>

                                <h5 class="__title">Awesome Cupcake</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="__item  text-center" data-aos="fade" data-aos-delay="600" data-aos-offset="100">
                                <i class="__ico">
                                    <img class="img-fluid  lazy" src="{{asset('asset/images/blank.gif')}}" data-src="{{asset('asset/images/feature_img/20.png')}}" alt="demo" />
                                </i>

                                <h5 class="__title">Vegetables</h5>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end feature -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--dark-bg jarallax" data-speed="0.5" data-img-position="50% 80%">
        <img class="jarallax-img  lazy" data-src="{{asset('asset/images/bg_3.jpg')}}" alt="demo" />

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <div data-aos="fade-left" data-aos-easing="ease-out-quad" data-aos-duration="700">
                        <h2 class="text-white">Agro Perfect <br><span>farm for you</span></h2>

                        <p class="text-white">
                            Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </p>

                        <p><a class="custom-btn custom-btn--medium custom-btn--style-4" href="#">Discover</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4 py-lg-10"></div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pt section--gray-bg">
        <div class="container">
            <div class="recipes">
                <div class="__inner">
                    <div class="row no-gutters">
                        <!-- start item -->
                        <div class="col-12 col-lg-6">
                            <div class="__item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-12 col-md-6 align-self-md-stretch">
                                        <figure class="__image">
                                            <img class="lazy" src="img/blank.gif" data-src="img/recipes_img/1.jpg" alt="demo" />
                                        </figure>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="__content">
                                            <h3 class="__title h5"><a href="blog_details.html">Tips for Ripening your Fruit</a></h3>

                                            <p>
                                                Dogfish shark, bango hog sucker, baikal oilfish, eeltail catfish regal whiptail catfish; squarehead 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="__item">
                                <div class="row flex-md-row-reverse no-gutters align-items-center">
                                    <div class="col-12 col-md-6 align-self-md-stretch">
                                        <figure class="__image">
                                            <img class="lazy" src="img/blank.gif" data-src="img/recipes_img/3.jpg" alt="demo" />
                                        </figure>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="__content">
                                            <h3 class="__title h5"><a href="blog_details.html">Superfoods you should be eating</a></h3>

                                            <p>
                                                The generated Lorem Ipsum is therefore always free from repetition injected humour, or 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-lg-6">
                            <div class="__item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-12 col-md-6 align-self-md-stretch">
                                        <figure class="__image">
                                            <img class="lazy" src="img/blank.gif" data-src="img/recipes_img/2.jpg" alt="demo" />
                                        </figure>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="__content">
                                            <h3 class="__title h5"><a href="blog_details.html">Tips for Ripening your Fruit</a></h3>

                                            <p>
                                                The generated Lorem Ipsum is therefore always free from repetition injected humour, or 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="__item">
                                <div class="row flex-md-row-reverse no-gutters align-items-center">
                                    <div class="col-12 col-md-6 align-self-md-stretch">
                                        <figure class="__image">
                                            <img class="lazy" src="img/blank.gif" data-src="img/recipes_img/4.jpg" alt="demo" />
                                        </figure>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="__content">
                                            <h3 class="__title h5"><a href="blog_details.html">Grunt torrent catfish squaretail Norwegian Atlantic salmon</a></h3>

                                            <p>
                                                Northern clingfish searobin betta blue shark. Jackfish leopard danio
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pt section--no-pb">
        <!-- start banner simple -->
        <div class="simple-banner simple-banner--style-3" data-aos="fade" data-aos-offset="50">

            <div class="__label" data-aos="zoom-in" data-delay="700">
                <img class="lazy" data-src="img/banner_label_2.png" alt="demo" />
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="__inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="banner__text" data-aos="fade" data-delay="500">
                                        <h2 class="__title">Tasty Cakes</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end banner simple -->
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="container">
            <div class="section-heading section-heading--center" data-aos="fade">
                <h2 class="__title">Agro <span>Progress</span></h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>

            <!-- start counters -->
            <div class="counter">
                <div class="__inner">
                    <div class="row justify-content-sm-center">
                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="150">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_8.png" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="350">350</p>

                                        <p class="__title">Muffins</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="300">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_9.png" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="158">158</p>

                                        <p class="__title">Cakes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="450">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_10.png" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="500">500</p>

                                        <p class="__title">Cupcakes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="600">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_11.png" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="685">685</p>

                                        <p class="__title">Doughnut</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end counters -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pt section--no-pb">
        <div class="gallery gallery--style-3">
            <div class="__inner">
                <div class="row no-gutters">
                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/13.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Testy Jam</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/13.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/14.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Cristmas Sweets</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/14.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/15.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Awesome Dishes</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/15.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/16.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Tasty Desert</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/16.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/17.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Nuts</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/17.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/18.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Jam</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/18.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/19.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Honey</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/19.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="__item">
                            <figure class="__image">
                                <img class="lazy" src="img/blank.gif" data-src="img/gallery_img/20.jpg" alt="demo"/>

                                <div class="__content">
                                    <h5 class="__content__title">Bread</h5>
                                </div>

                                <a class="__link" data-fancybox="gallery" href="img/gallery_img/20.jpg"></a>
                            </figure>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--dark-bg section--review jarallax" data-speed="0.5" data-img-position="50% 80%">
        <img class="jarallax-img  lazy" data-src="img/bg_2.jpg" alt="demo" />

        <div class="container">
            <div class="section-heading section-heading--white section-heading--center" data-aos="fade">
                <h2 class="__title">People says <span>about agro</span></h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>

            <!-- start review -->
            <div class="review review--slider">
                <div class="js-slick" data-slick='{"autoplay": true, "arrows": false, "dots": true, "speed": 1000}'>
                    <!-- start item -->
                    <div class="review__item">
                        <div class="review__item__text">
                            <p>
                                <i>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</i>
                            </p>
                        </div>

                        <div class="review__item__author  d-table">
                            <div class="d-table-cell align-middle">
                                <div class="review__item__author-image">
                                    <img class="circled" src="img/ava.png" alt="ava" />
                                </div>
                            </div>

                            <div class="d-table-cell align-middle">
                                <span class="review__item__author-name"><strong>Terens Smith</strong></span>
                                <span class="review__item__author-position">/CEO AntalAgro</span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="review__item">
                        <div class="review__item__text">
                            <p>
                                <i>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</i>
                            </p>

                            <p>
                                <i>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</i>
                            </p>
                        </div>

                        <div class="review__item__author  d-table">
                            <div class="d-table-cell align-middle">
                                <div class="review__item__author-image">
                                    <img class="circled" src="img/ava.png" alt="ava" />
                                </div>
                            </div>

                            <div class="d-table-cell align-middle">
                                <span class="review__item__author-name"><strong>Terens Smith</strong></span>
                                <span class="review__item__author-position">/CEO AntalAgro</span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
            </div>
            <!-- start review -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pb">
        <div class="container">
            <div class="section-heading section-heading--center" data-aos="fade">
                <h2 class="__title">Blog <span>Posts</span></h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>

            <!-- start posts -->
            <div class="posts posts--style-2">
                <div class="__inner">
                    <div class="row">
                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="__item __item--preview" data-aos="flip-up" data-aos-delay="100" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="img/blank.gif" data-src="img/posts_img/7.jpg" alt="demo" />

                                    <span class="__overlay"></span>

                                    <div class="__content">
                                        <span class="__date-post">
                                            <strong>07</strong>Nov
                                        </span>

                                        <p class="__category"><a href="#">ORGANIC FOOD/TIPS & GUIDES</a></p>

                                        <h3 class="__title h5"><a href="blog_details.html">Tips for Ripening your Fruit</a></h3>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="__item __item--preview" data-aos="flip-up" data-aos-delay="200" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="img/blank.gif" data-src="img/posts_img/8.jpg" alt="demo" />

                                    <span class="__overlay"></span>

                                    <div class="__content">
                                        <span class="__date-post">
                                            <strong>03</strong>Nov
                                        </span>

                                        <p class="__category"><a href="#">DIET/ORGANIC FOOD</a></p>

                                        <h3 class="__title h5"><a href="blog_details.html">Health Benefits of a Raw Food</a></h3>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="__item __item--preview" data-aos="flip-up" data-aos-delay="300" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="img/blank.gif" data-src="img/posts_img/9.jpg" alt="demo" />

                                    <span class="__overlay"></span>

                                    <div class="__content">
                                        <span class="__date-post">
                                            <strong>25</strong>oct
                                        </span>

                                        <p class="__category"><a href="#">DIET/ORGANIC FOOD</a></p>

                                        <h3 class="__title h5"><a href="blog_details.html">Superfoods you should be eating</a></h3>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end posts -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="container">
            <div class="partners-list">
                <div class="js-slick"
                        data-slick='{
                        "autoplay": true,
                        "arrows": false,
                        "dots": true,
                        "speed": 1000,
                        "responsive": [
                        {
                            "breakpoint":576,
                            "settings":{
                                "slidesToShow": 2
                            }
                        },
                        {
                            "breakpoint":767,
                            "settings":{
                                "slidesToShow": 3
                            }
                        },
                        {
                            "breakpoint":991,
                            "settings":{
                                "slidesToShow": 4
                            }
                        },
                        {
                            "breakpoint":1199,
                            "settings":{
                                "autoplay": false,
                                "dots": false,
                                "slidesToShow": 5
                            }
                        }
                    ]}'>
                    <div class="__item">
                        <img class="img-fluid m-auto" src="img/partners_img/1.jpg" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="img/partners_img/2.jpg" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="img/partners_img/3.jpg" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="img/partners_img/4.jpg" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="img/partners_img/5.jpg" alt="demo" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection