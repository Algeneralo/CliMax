@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }

        .dataTables_filter {
            display: none !important;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">Clients</h4>
        <a class="btn btn-success mb-2" href="{{route('clients.create')}}">Add</a>
        <table class="table mb-0 table-hover datatableJs">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset('assets/images/upload/'.$client->image)}}"
                             class="img-thumbnail w-25">
                    </td>
                    <td width="17%">
                        <form action="{{route('clients.destroy',$client->id)}}"
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