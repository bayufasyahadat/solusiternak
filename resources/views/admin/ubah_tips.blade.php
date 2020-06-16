@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">
    <form action="{{url('/update_tips', $tips_info->id)}}" method="post">
        {{ csrf_field() }}
        <div class="form-col">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Judul Tips</label>
                <input name="judul_tips" type="text" class="form-control" id="inputEmail4" placeholder="Judul">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Deskripsi</label>
                <br>
                <textarea name="deskripsi_tips" id="inputEmail4" cols="30" rows="3" class="form-control" placeholder="Deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection