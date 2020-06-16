@extends('layout')
@section('content')


<!-- slider_area_start -->
<div class="slider_area ">
    <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-md-6">
                    <div class="illastrator_png">
                        <img src="{{asset('frontend/img/banner/edu_ilastration.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="slider_info">
                        <h3>Konsultasikan Msalah <br>
                            Peternakanmu <br>
                            Pada Konsultan Kami</h3>
                        <a href="#" class="boxed_btn">
                            <h5>Konsultasi</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->


<!-- our_courses_start -->
<div class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Our Course Speciality</h3>
                    <p>Your domain control panel is designed for ease-of-use and <br>
                        allows for all aspects of your domains.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 col-lg-6">
                <div class="single_course text-center">
                    <div class="icon">
                        <i class="flaticon-art-and-design"></i>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>
                        Your domain control panel is designed for ease-of-use <br> and <br>
                        allows for all aspects of
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6">
                <div class="single_course text-center">
                    <div class="icon blue">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>
                        Your domain control panel is designed for ease-of-use <br> and <br>
                        allows for all aspects of
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6">
                <div class="single_course text-center">
                    <div class="icon">
                        <i class="flaticon-premium"></i>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>
                        Your domain control panel is designed for ease-of-use <br> and <br>
                        allows for all aspects of
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6">
                <div class="single_course text-center">
                    <div class="icon gradient">
                        <i class="flaticon-crown"></i>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>
                        Your domain control panel is designed for ease-of-use <br> and <br>
                        allows for all aspects of
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our_courses_end -->

<!-- subscribe_newsletter_Start -->
<div class="subscribe_newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="newsletter_text">
                    <h3>Subscribe Newsletter</h3>
                    <p>Your domain control panel is designed for ease-of-use and allows for all aspects of your</p>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="newsletter_form">
                    <h4>Your domain control panel is</h4>
                    <form action="#" class="newsletter_form">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe_newsletter_end -->

<div class="our_latest_blog">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Tips</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                    $semua_tips = DB::table('tips')->get();
                    ?>
                    @foreach($semua_tips as $v_tips)
                    <article class="blog_item">
                        <div class="blog_details">
                            <a class="d-inline-block" href="{{URL::to('/detail_tips/'.$v_tips->id)}}">
                                <h2>{{$v_tips->judul_tips}}</h2>
                            </a>
                            <p>{{$v_tips->deskripsi_tips}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection