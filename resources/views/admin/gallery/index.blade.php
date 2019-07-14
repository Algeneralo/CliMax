@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">Gallery</h4>
        <a class="btn btn-success mb-2" href="{{route('gallery.create')}}">Add</a>
        <table class="table mb-0 table-hover datatableJs">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Group</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody>
            @foreach($gallery as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>
                        @if($item->type=="video")
                            <img src="{{asset('assets/images/upload/'.$item->videoThumbnail->thumbnail)}}"
                                 class="img-thumbnail w-25">
                        @else
                            <img src="{{asset('assets/images/upload/'.$item->file)}}"
                                 class="img-thumbnail w-25">
                        @endif
                    </td>
                    <td>{{$item->type}}</td>
                    <td width="11%">
                        {{--                        <a class="btn btn-warning" href="{{route('gallery.edit',$item->id)}}">Edit</a>--}}
                        <form action="{{route('gallery.destroy',$item->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger delete_button" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot class="thead-light">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
@section('script')
    @includeIf('admin.articles.deleteConfirmation')

    <script>
        function customDataTable(datatable) {
            datatable.api().columns(2).every(function () {
                var column = this;
                $('<p class="d-inline">Group Filter:</p>').appendTo($(column.footer()).empty())
                var select = $('<select class=""><option value="">All</option></select>')
                    .appendTo($(column.footer()))

                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function (d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        }
    </script>
@endsection