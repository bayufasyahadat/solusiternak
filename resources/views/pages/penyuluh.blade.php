@extends('layout')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Penyuluh</h3>
</div>
<!-- bradcam_area_end -->

<!-- our_team_member_start -->
<div class="our_team_member">
    <div class="container">
        <div class="row">
            @foreach($semua_penyuluh as $v_penyuluh)
            <div class="col-xl-3 col-md-6 col-lg-3">
                <div class="single_team">
                    <div class="master_name text-center">
                        <h3><a href="{{URL::to('profil_penyuluh/'.$v_penyuluh->id)}}">{{$v_penyuluh->nama}}</a></h3>
                        <p>{{$v_penyuluh->email}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- our_team_member_end -->


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

<!-- our_latest_blog_start -->
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
<!-- our_latest_blog_end -->
@endsection