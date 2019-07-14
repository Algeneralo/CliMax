@extends('admin.layout')
@section('style')
    <style>
        textarea {
            resize: none;
            height: 150px;
        }
    </style>
@endsection
@section('body')
    <form action="{{isset($config)?route('config.update',$config->id):route('config.store')}}" method="post"
          class="m-b-30">
        @csrf
        @if(isset($config))
            @method('PUT')
        @endif
        <div class="card-box">
            <h4 class="header-title m-t-0 mb-3">Contact Info</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="ml-3" for="exampleInputEmail1">Facebook</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="facebook"
                               aria-describedby="emailHelp" value="{{$config->facebook??''}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="ml-3" for="exampleInputEmail1">Twitter</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="twitter" value="{{$config->twitter??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="ml-3" for="exampleInputEmail1">Instagram</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="instagram" value="{{$config->instagram??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="ml-3" for="exampleInputEmail1">Google Map Link</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="map_link" value="{{$config->map_link??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="ml-3" for="exampleInputEmail1">Mobile</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="phone" value="{{$config->phone??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="ml-3" for="exampleInputEmail1">Telephone</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="telephone" value="{{$config->telephone??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="ml-3" for="exampleInputEmail1">Email</label>
                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email"
                               aria-describedby="emailHelp" value="{{$config->email??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="ml-3" for="exampleInputEmail1">Climax Message</label>
                    <div class="col-md-12">
                        <textarea type="email" class="form-control" name="message">{{$config->message??''}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-success mt-3" type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection