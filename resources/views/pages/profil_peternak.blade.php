@extends('layout')
@section('content')


<!-- bradcam_area_start -->
<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3>{{$users_info->name}}</h3>
                    <div class="prise">
                        <span class="active">{{$users_info->email}}</span>
                        <br>
                        <span class="active">{{$users_info->alamat}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<div class="courses_details_info">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="single_courses">
                    <h3>PETERNAKAN</h3>
                    <p>Nama Peternakan</p>
                    <h4>{{$users_info->nama_peternakan}}</h4>
                    <p>Jumlah Hewan Ternak</p>
                    <h4>{{$users_info->jumlah_hewan_ternak}}</h4>
                    <p>Jenis Hewan Ternak</p>
                    <h4>{{$users_info->jenis_hewan_ternak}}</h4>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <a href="{{URL::to('/konsultasi')}}" class="boxed_btn" style="margin-bottom:20">Edit Profil</a>
                    <hr>
                    <a href="{{URL::to('/konsultasi')}}" class="boxed_btn">Konsultasi</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection