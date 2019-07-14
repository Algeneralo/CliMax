@extends('admin.layout')
@section('style')
    <style>
        .inbox-rightbar {
            margin: -1.5rem 0 -1.5rem 250px;
            border-left: 5px solid #f5f6f8;
            padding: 1.5rem 0 1.5rem 25px;
        }
    </style>
    <link href="{{asset('assets/libs/summernote/summernote-bs4.css')}}" rel="stylesheet">
@endsection
@section('body')
    <div class="row"><!-- Right Sidebar -->
        <div class="col-lg-12">
            <div class="card-box"><!-- Left sidebar -->
                <div class="inbox-leftbar">
                    <a href="{{route('mails.index')}}"
                       class="btn btn-danger btn-block waves-effect waves-light">
                        Inbox
                    </a>
                    <div class="mail-list mt-4">
                        <a href="{{route('mails.index')}}" class="list-group-item border-0 text-danger">
                            <i class="mdi mdi-inbox font-18 align-middle mr-2"></i>Inbox
                            <span class="badge badge-danger float-right ml-2 mt-1">{{$unReadCount}}</span>
                        </a>
                    </div>
                </div>
                <div class="inbox-rightbar">
                    <div class="mt-4">
                        <hr>
                        <div class="media mb-4 mt-1">
                            <div class="media-body">
                                <span class="float-right">{{$mail->created_at->toDayDateTimeString()}}</span>
                                <h6 class="m-0"> {{$mail->name}}</h6>
                                <small class="text-muted">From: {{$mail->email}}</small>
                            </div>
                        </div>
                        {{$mail->message}}
                        <hr>

                    </div><!-- card-box -->
                    <form action="{{route('mails.replay',$mail->id)}}" method="post">
                        @csrf
                        <div class="media mb-0 mt-5">
                            <div class="media-body">
                                <div class="reply-box mb-2">
                                    <textarea name="mail_replay" required class="summernote">

                                    </textarea><!-- end summernote-->
                                </div>
                                <!-- end reply-box --></div><!-- end media-body -->
                        </div><!-- end medi-->
                        <div class="text-right">
                            <button id="delete" type="button"
                                    class="btn btn-danger btn-rounded w-md m-b-30">Delete
                            </button>
                            <button type="submit" class="btn btn-primary btn-rounded w-md m-b-30">Replay</button>
                        </div>
                    </form>
                    <form id="delete_form" style="display: none" action="{{route('mails.destroy',$mail->id)}}"
                          method="post">
                        @method('DELETE')
                        @csrf

                    </form>
                </div><!-- end inbox-rightbar-->
                <div class="clearfix"></div>
            </div><!-- end card-box -->
        </div><!-- end Col -->
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/libs/summernote/summernote-bs4.min.js')}}"></script>
    <script>jQuery(document).ready(function () {
            $('.summernote').summernote({
                height: 180,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
        });
    </script>
    <script>
        $("#delete").on("click", function () {
            $("#delete_form").submit();
        })
    </script>
@endsection