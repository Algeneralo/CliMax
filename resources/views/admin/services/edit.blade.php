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
    <form action="{{route('services.update',$service->id)}}" method="post" class="m-b-30" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-box"><h4 class="header-title m-t-0 mb-3">Edit Service</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">Title</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="name" value="{{$service->name}}">
                    </div>
                </div>
                <div class="form-group col-9">
                    <label class="mr-3" for="exampleInputEmail1">Details</label>

                    <textarea id="text_area" name="details">{{$service->details}}</textarea>
                </div>
                <div class="col-3">
                    <div class="avatar-upload rectangle">
                        <label class="mr-3" for="exampleInputEmail1">Image</label>
                        <div class="avatar-edit mt-4">
                            <input type='file' name="image_file" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                            <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview"
                                 style="background-image: url('{{asset('assets/images/upload/'.$service->image)}}')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-12">
                    <button class="btn btn-success" type="submit">Edit</button>
                    <a href="{{route('services.index')}}" class="btn btn-danger" type="submit">Cancel</a>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script src="{{asset('assets/js/imagePreview.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
    @includeIf('admin.articles.CKEditorCustom')
@endsection