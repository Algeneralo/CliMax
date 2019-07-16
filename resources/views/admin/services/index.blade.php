@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">Services</h4>
        <a class="btn btn-success mb-2" href="{{route('services.create')}}">Add</a>
        <table class="table mb-0 table-hover datatableJs">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th width="11%">Service Title</th>
                <th width="20%">Details</th>
                <th>Image</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$service->name}}</td>
                    <td>{!! $service->details !!}</td>
                    <td><img src="{{asset('assets/images/upload/'.$service->image)}}"
                             class="img-thumbnail w-25">
                    </td>
                    <td width="16%">
                        <a class="btn btn-warning" href="{{route('services.edit',$service->id)}}">Edit</a>
                        <form action="{{route('services.destroy',$service->id)}}"
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