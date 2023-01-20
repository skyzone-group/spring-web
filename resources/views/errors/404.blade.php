@extends('layouts.main')

@section('hero')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url(asset/images/intro_img/9.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title"><span>page</span> 404 not found</h1>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->
@endsection

@section('content')
<!-- start section -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <div class="mb-9">
                <img class="img-fluid" src="{{asset('asset/images/404.jpg')}}" alt="demo" />
            </div>

            <div class="__text">
                <h3>Oops! <span>That page can’t be found.</span></h3>

                <p>
                    <strong>It looks like nothing was found at this location. Maybe try a search?</strong>
                </p>
            </div>

            <div class="center-block" style="max-width: 700px">
                <form class="form--horizontal" action="#" method="get">
                    <div class="input-wrp">
                        <input class="textfield" name="s" type="text" placeholder="Search" />
                    </div>

                    <button class="custom-btn custom-btn--tiny custom-btn--style-1" type="submit" role="button">Find</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection