@extends('gembala')
@section('content')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Detail Keluhan</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="comments-area">
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="desc">
                                <p class="comment">
                                    {{$keluhan_info->deskripsi_keluhan}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form class="form-contact comment_form" action="{{URL::to('/simpan_balasan')}}" id="commentForm" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="judul_balasan" id="judul_balasan" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="deskripsi_balasan" id="deskripsi_balasan" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--================ Blog Area end =================-->



@endsection