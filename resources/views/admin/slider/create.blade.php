@extends('admin.layout')
@section('style')
    <style>
        .rectangle.avatar-upload .avatar-preview {
            margin-right: auto;
            margin-left: auto;
            width: 60%;
            height: 500px;
        }

        .avatar-upload .avatar-edit {
            right: 270px;
        }

        h1 {
            position: absolute;
            top: 40%;
            left: 9%;
        }

        h3 {
            position: absolute;
            top: 19%;
            left: 9%;
        }

    </style>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css">
@endsection
@section('body')
    <form action="{{route('sliders.store')}}" method="post" class="m-b-30" enctype="multipart/form-data">
        @csrf
        <div class="card-box"><h4 class="header-title m-t-0 mb-3">Slider</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="ml-3">First Text</label>
                    <div class="col-md-12">
                        <input id="first_text" type="text" class="form-control" name="first_text"
                               value="{{old('first_text')}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="ml-3">First Text Color</label>
                    <div class="input-group col-12 color-picker">
                        <input type="text" name="first_text_color" value="{{old('first_text_color')}}"
                               class="form-control"/>

                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span style="width: 19px;height: 84%;" class="input-group-addon">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="ml-3">Second Text</label>
                    <div class="col-md-12">
                        <input id="second_text" type="text" class="form-control" name="second_text"
                               value="{{old('second_text')}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="ml-3">Second Text Color</label>
                    <div class="input-group col-12 color-picker">
                        <input type="text" name="second_text_color" value="{{old('second_text_color')}}"
                               class="form-control"/>

                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span style="width: 19px;height: 84%" class="input-group-addon"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="ml-3">Button Text</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="button_text"
                               value="{{old("button_text")}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="ml-3">Button Link</label>
                    <div class="input-group col-12">
                        <input type="text" name="button_link" value="{{old('button_link')}}"
                               class="form-control"/>
                    </div>
                </div>
                <div class="col-12">
                    <div class="avatar-upload rectangle">
                        <div class="avatar-edit">
                            <input type='file' name="image_file" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                            <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview">
                                <h1 style="display:none"></h1>
                                <h3 style="display:none;"></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-3">
                    <button class="btn btn-success" type="submit">Create</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script src="{{asset('assets/js/imagePreview.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{asset('assets/js/customColorPickerFunction.js')}}"></script>
@endsection