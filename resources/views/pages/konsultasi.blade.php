@extends('layout')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Keluhan</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="comments-area">
                <h2>Keluhan Peternak</h2>

                <hr/>

                @foreach($semua_keluhan as $v_keluhan)

                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="desc">
                                    <h4 id='judul-kel' style="margin-bottom: 0px;">{{$v_keluhan->judul_keluhan}}</h4>
                                    <p class="comment">
                                        {{$v_keluhan->deskripsi_keluhan}}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a id='peternak-nama' href="{{URL::to('/lihat_keluhan/'.$v_keluhan->id)}}">{{$v_keluhan->name}}</a>
                                            </h5>
                                            <p class="date">{{$v_keluhan->created_at}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                            $balasan = DB::table('balasan')
                                ->where('keluhan_id', $v_keluhan->id)
                                ->get();
                            
                            foreach($balasan as $b_data){

                                $penyuluh = DB::table('penyuluh')
                                    ->where('id', $b_data->penyuluh_id)
                                    ->first();
                        ?>

                        <div class="single-comment justify-content-between d-flex" style="margin-top: 20px;">
                            <div class="user justify-content-between d-flex">
                                <div class="desc" style="padding-left:40px;">
                                    <p class="comment">
                                        {{$b_data->deskripsi_balasan}}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a id='peternak-nama' href="{{URL::to('/lihat_keluhan/'.$v_keluhan->id)}}">{{$penyuluh->nama}}</a>
                                            </h5>
                                            <p class="date">{{$b_data->created_at}}</p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                            <button 
                                                class="btn-reply text-uppercase" 
                                                id="btn-reply" 
                                                style="border:0;"
                                                data-peternak="{{$v_keluhan->name}}" 
                                                data-peternak-id="{{$v_keluhan->peternak_id}}" 
                                                data-keluhan="{{$v_keluhan->judul_keluhan}}"
                                                data-keluhan-id="{{$v_keluhan->id}}"
                                                onclick="replyRow(this)"
                                            >reply</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php } ?>
                        
                    </div>

                @endforeach

            </div>
            <div class="comment-form" style="margin-left: 60px;">
                <h2>Balas Keluhan</h2>
                <hr/>
                <form class="form-contact comment_form" action="{{URL::to('/simpan_balasan')}}" method="post" id="commentForm">
                    {{ csrf_field() }}
                    Klik reply pada keluhan peternak<br/><br/>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="peternak_name" id="peternak_name" type="text" placeholder="Peternak" readonly>
                                <input class="form-control" name="peternak_id" id="peternak_id" type="hidden">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="judul_balasan" id="judul_balasan" type="text" placeholder="Judul" readonly>
                                <input class="form-control" name="keluhan_id" id="keluhan_id" type="hidden">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="deskripsi_balasan" id="deskripsi_balasan" cols="30" rows="9" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                    {{Auth::id()}}
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<!--================ Blog Area end =================-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function replyRow(ele) {
        var peternak= $(ele).attr('data-peternak');
        var peternak_id= $(ele).attr('data-peternak-id');
        var keluhan= $(ele).attr('data-keluhan');
        var keluhan_id= $(ele).attr('data-keluhan-id');
        $('#peternak_name').val(peternak)
        $('#peternak_id').val(peternak_id)
        $('#judul_balasan').val(keluhan)
        $('#keluhan_id').val(keluhan_id)
    }
</script>

@endsection