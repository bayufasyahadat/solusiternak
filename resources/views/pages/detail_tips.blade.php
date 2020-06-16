@extends('layout')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Detail Tips</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{$tips_info->judul_tips}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> {{$tips_info->created_at}}</a></li>
                        </ul>
                        <p class="excert">
                            {{$tips_info->deskripsi_tips}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->

@endsection