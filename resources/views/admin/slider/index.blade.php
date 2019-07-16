@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">Slider</h4>
        <a class="btn btn-success mb-2" href="{{route('sliders.create')}}">Add</a>
        <table class="table mb-0 table-hover datatableJs">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>First Text</th>
                <th>Color</th>
                <th>Second Text</th>
                <th>Color</th>
                <th>Button Text</th>
                <th>Button Link</th>
                <th>Image</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$slider->first_text}}</td>
                    <td>{{$slider->first_text_color}}</td>
                    <td>{{$slider->second_text}}</td>
                    <td>{{$slider->second_text_color}}</td>
                    <td>{{$slider->button_text}}</td>
                    <td>{{$slider->button_link}}</td>
                    <td>
                        <img src="{{asset('assets/images/upload/'.$slider->image)}}" class="img-thumbnail w-25">
                    </td>
                    <td width="17%">
                        <a class="btn btn-warning" href="{{route('sliders.edit',$slider->id)}}">Edit</a>
                        <form action="{{route('sliders.destroy',$slider->id)}}" class="d-inline-block"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger delete_button" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    @includeIf('admin.articles.deleteConfirmation')
@endsection