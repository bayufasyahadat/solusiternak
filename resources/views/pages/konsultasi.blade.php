@extends('layout')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Konsultasi</h3>
</div>
<!-- bradcam_area_end -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Keluhan</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{URL::to('/simpan_keluhan')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="judul_keluhan" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul keluhan'" placeholder="Judul keluhan">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="deskripsi_keluhan" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Keluhan Anda...'" placeholder="Keluhan Anda..."></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select">
                                    <select name="penyuluh_id">
                                        <option>Pilih Penyuluh</option>
                                        <?php
                                        $semua_penyuluh = DB::table('penyuluh')
                                            ->get();

                                        foreach ($semua_penyuluh as $v_penyuluh) {
                                            ?>
                                            <option value=" {{$v_penyuluh->id}}">{{$v_penyuluh->nama}}</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="input-group mb-3 mt-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Masukan Gambar</label>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Konsultasikan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Sign in</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange">Sign in</button>
                    </div>
                </div>
            </form>
            <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a> </p>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id="test-form2" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Resistration</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="Password" placeholder="Confirm password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- our_latest_blog_end -->

@endsection